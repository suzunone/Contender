<?php
/**
 * SelectorTrait.php
 *
 * @category   Contender
 * @package    Contender\Dom\Traits
 * @subpackage Contender\Dom\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Dom\Traits;

use Contender\Dom\NodeList;
use Contender\Service\Factory;
use Contender\Dom\Node;
use DOMNodeList;
use DOMXPath;

/**
 * Trait SelectorTrait
 *
 * @category   Contender
 * @package    Contender\Dom\Traits
 * @subpackage Contender\Dom\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @hideDoc
 * @mixin Node
 */
trait SelectorTrait
{
    use CssSelector2XPathTrait;

    /**
     *  Returns a {@link \Contender\Dom\Node} object representing the element whose id property matches the specified string.
     *
     * @param string $query tag id
     * @return \Contender\Dom\Element|null Selected node
     */
    public function getElementById(string $query): ?Node
    {
        $res = $this->document()->getElementById($query);
        if ($res === null) {
            return null;
        }

        return Factory::get($res, $this);
    }

    /**
     *  Returns a {@link \Contender\Dom\NodeList} object of all child elements which have all of the given class name(s)
     *
     * @param string $query tag class name
     * @return \Contender\Dom\NodeList|\Contender\Dom\Node[]
     */
    public function getElementsByClassName(string $query): NodeList
    {
        return $this->querySelectorAll('.' . trim($query));
    }

    /**
     * Returns a {@link \Contender\Dom\NodeList} of {@link \Contender\Dom\Node} matching CSS selector.
     *
     * @param string $selectors Valid CSS selector string
     * @return \Contender\Dom\NodeList|Node[]
     */
    public function querySelectorAll(string $selectors): NodeList
    {
        $queries = explode(',', $selectors);
        $res = NodeList::make();
        foreach ($queries as $selector) {
            $res = $res->merge($this->evaluateToCollection($this->cssSelector2XPath(trim($selector))));
        }

        return $res->sortDom();
    }

    /**
     * Evaluates the given XPath expression and returns a {@link \Contender\Dom\NodeList} result if possible
     *
     * @param string $query xpath
     * @return \Contender\Dom\NodeList|Node[]
     */
    public function evaluateToCollection(string $query): NodeList
    {
        $res = $this->domXPathQuery($query);

        if ($res === false) {
            return NodeList::make();
        }
        if ($res instanceof DOMNodeList) {
            return Factory::get($res, $this);
        }

        return NodeList::make([$this->createElement($res)]);
    }

    /**
     * alias DOMXPath::evaluate
     *
     * @param string $query
     * @return  DOMNodeList
     */
    protected function domXPathQuery(string $query): DOMNodeList
    {
        $xpath = new DOMXPath($this->document());

        return $xpath->evaluate($query, $this->element);
    }

    /**
     *  Returns a {@link \Contender\Dom\NodeList} object of elements with a given name in the document.
     *
     * @param string $query tag name attribute
     * @return \Contender\Dom\NodeList|\Contender\Dom\Node[]
     */
    public function getElementsByName(string $query): NodeList
    {
        return $this->querySelectorAll('[name="' . trim($query) . '"]');
    }

    /**
     * Returns a {@link \Contender\Dom\NodeList} object of elements with the given tag name.
     *
     * @param string $tag_name Dom tag name
     * @return \Contender\Dom\NodeList
     */
    public function getElementsByTagName(string $tag_name): NodeList
    {
        if ($this->isElement) {
            $res = $this->element->getElementsByTagName($tag_name);
        } else {
            $res = $this->document()->getElementsByTagName($tag_name);
        }

        if ($res instanceof DOMNodeList) {
            return Factory::get($res, $this);
        }

        return NodeList::make([]);
    }

    /**
     * Returns the attribute node in namespace namespaceURI with local name localName for the current node.
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName    The local name.
     * @return \Contender\Dom\NodeList
     */
    public function getAttributeNodeNS(string $namespaceURI, string $localName): NodeList
    {
        if ($this->isElement) {
            return $this->element->getAttributeNodeNS($namespaceURI, $localName);
        }

        /** @noinspection PhpUndefinedMethodInspection */
        $res = $this->document()->getAttributeNodeNS($namespaceURI, $localName);

        return Factory::get($res, $this);
    }

    /**
     * Returns a {@link \Contender\Dom\Node} matching CSS selector.
     *
     * @param string $selectors Valid CSS selector string
     * @return \Contender\Dom\Node|null
     */
    public function querySelector(string $selectors): ?Node
    {
        $queries = explode(',', $selectors);
        foreach ($queries as $selector) {
            $res = $this->evaluate($this->cssSelector2XPath(trim($selector)));
            if ($res) {
                return $res;
            }
        }

        return null;
    }

    /**
     * Evaluates the given XPath expression and returns a {@link \Contender\Dom\Node} result if possible
     *
     * @param string $query xpath
     * @param int $offset
     * @return \Contender\Dom\Node|null
     */
    public function evaluate(string $query, int $offset = 0): ?Node
    {
        $res = $this->domXPathQuery($query);

        if (!$res instanceof DOMNodeList) {
            return null;
        }

        if ($res->count() <= $offset) {
            return null;
        }

        return Factory::get($res->item($offset), $this);
    }

    /**
     * Call querySelectorAll() and {@link \Contender\Dom\NodeList::onlyElement()}
     *
     * @param string $query
     * @return \Contender\Dom\NodeList
     */
    public function find(string $query): NodeList
    {
        return $this->querySelectorAll($query)->onlyElement();
    }
}
