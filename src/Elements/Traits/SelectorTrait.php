<?php
/**
 * SelectorTrait.php
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Elements\Traits;

use Contender\Elements\Collection;
use Contender\Elements\Factory;
use Contender\Elements\Node;
use DOMNodeList;
use DOMXPath;

/**
 * Trait SelectorTrait
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @hideDoc
 */
trait SelectorTrait
{
    use CssSelector2XPathTrait;

    /**
     *  Returns a {@link \Contender\Elements\Node} object representing the element whose id property matches the specified string.
     *
     * @param string $query tag id
     * @return \Contender\Elements\Node|null Selected node
     */
    public function getElementById(string $query): ?Node
    {
        $res = $this->document()->getElementById($query);
        if ($res === null) {
            return null;
        }

        return $this->createNode($res);
    }

    /**
     *  Returns a {@link \Contender\Elements\Collection} object of all child elements which have all of the given class name(s)
     *
     * @param string $query tag class name
     * @return \Contender\Elements\Collection|\Contender\Elements\Node[]
     */
    public function getElementsByClassName(string $query): Collection
    {
        return $this->querySelectorAll('.' . trim($query));
    }

    /**
     *  Returns a {@link \Contender\Elements\Collection} object of elements with a given name in the document.
     *
     * @param string $query tag name attribute
     * @return \Contender\Elements\Collection|\Contender\Elements\Node[]
     */
    public function getElementsByName(string $query): Collection
    {
        return $this->querySelectorAll('[name="' . trim($query) . '"]');
    }

    /**
     * Returns a {@link \Contender\Elements\Collection} object of elements with the given tag name.
     *
     * @param string $tag_name Elements tag name
     * @return \Contender\Elements\Collection
     */
    public function getElementsByTagName(string $tag_name): Collection
    {
        if ($this->isElement) {
            $res = $this->element->getElementsByTagName($tag_name);
        } else {
            $res = $this->document()->getElementsByTagName($tag_name);
        }

        if ($res instanceof DOMNodeList) {
            return Factory::get($res, $this);
        }

        return Collection::make([]);
    }

    /**
     * Returns the attribute node in namespace namespaceURI with local name localName for the current node.
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName The local name.
     * @return \Contender\Elements\Collection
     */
    public function getAttributeNodeNS(string $namespaceURI, string $localName): Collection
    {
        if ($this->isElement) {
            return $this->element->getAttributeNodeNS($namespaceURI, $localName);
        }

        $res = $this->document()->getAttributeNodeNS($namespaceURI, $localName);

        return Factory::get($res, $this);
    }

    /**
     * Returns a {@link \Contender\Elements\Node} matching CSS selector.
     *
     * @param string $selectors Valid CSS selector string
     * @return \Contender\Elements\Node|null
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
     * Returns a {@link \Contender\Elements\Collection} of {@link \Contender\Elements\Node} matching CSS selector.
     *
     * @param string $selectors Valid CSS selector string
     * @return \Contender\Elements\Collection|Node[]
     */
    public function querySelectorAll(string $selectors): Collection
    {
        $queries = explode(',', $selectors);
        $res = Collection::make();
        foreach ($queries as $selector) {
            $res = $res->merge($this->evaluateToCollection($this->cssSelector2XPath(trim($selector))));
        }

        return $res->sortDom();
    }

    /**
     * Call querySelectorAll() and {@link \Contender\Elements\Collection::onlyElement()}
     *
     * @param string $query
     * @return \Contender\Elements\Collection
     */
    public function find(string $query): Collection
    {
        return $this->querySelectorAll($query)->onlyElement();
    }

    /**
     * Evaluates the given XPath expression and returns a {@link \Contender\Elements\Collection} result if possible
     *
     * @param string $query xpath
     * @return \Contender\Elements\Collection|Node[]
     */
    public function evaluateToCollection(string $query): Collection
    {
        $res = $this->domXPathQuery($query);

        if ($res === false) {
            return Collection::make();
        }
        if ($res instanceof DOMNodeList) {
            return Factory::get($res, $this);
        }

        return Collection::make([$this->createElement($res)]);
    }

    /**
     * Evaluates the given XPath expression and returns a {@link \Contender\Elements\Node} result if possible
     *
     * @param string $query xpath
     * @param int $offset
     * @return \Contender\Elements\Node|null
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

        return $this->createNode($res->item($offset));
    }

    /**
     * alias DOMXPath::evaluate
     *
     * @param string $query
     * @return  DOMNodeList
     */
    protected function domXPathQuery(string $query)
    {
        $xpath = new DOMXPath($this->document());
        if ($this->element->ownerDocument === null) {
            return $xpath->evaluate('//' . $query);
        }

        return $xpath->evaluate($this->element->getNodePath() . '//' . $query);
    }
}
