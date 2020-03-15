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
 */
trait SelectorTrait
{
    use CssSelector2XPathTrait;

    /**
     * @param string $query
     * @return \Contender\Elements\Node|null
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
     * @param string $query
     * @return \Contender\Elements\Collection|\Contender\Elements\Node[]
     */
    public function getElementsByClassName(string $query): Collection
    {
        return $this->querySelectorAll('.' . trim($query));
    }

    /**
     * @param string $query
     * @return \Contender\Elements\Collection|\Contender\Elements\Node[]
     */
    public function getElementsByName(string $query): Collection
    {
        return $this->querySelectorAll('[name="' . trim($query) . '"');
    }

    /**
     * @param string $query
     * @return \Contender\Elements\Collection
     */
    public function getElementsByTagName(string $query): Collection
    {
        if ($this->isElement) {
            return $this->element->getElementsByTagName($query);
        }

        $res = $this->document()->getElementsByTagName($query);

        return Collection::makeByDOMNodeList($res);
    }

    /**
     * @param string $namespaceURI
     * @param string $localName
     * @return \Contender\Elements\Collection
     */
    public function getAttributeNodeNS(string $namespaceURI, string $localName): Collection
    {
        if ($this->isElement) {
            return $this->element->getAttributeNodeNS($namespaceURI, $localName);
        }

        $res = $this->document()->getAttributeNodeNS($namespaceURI, $localName);

        return Collection::makeByDOMNodeList($res);
    }

    /**
     * @param string $query
     * @return \Contender\Elements\Node|null
     */
    public function querySelector(string $query): ?Node
    {
        $queries = explode(',', $query);
        foreach ($queries as $selector) {
            $res = $this->evaluate($this->cssSelector2XPath(trim($selector)));
            if ($res) {
                return $res;
            }
        }
    }

    /**
     * @param string $query
     * @return \Contender\Elements\Collection|Node[]
     */
    public function querySelectorAll(string $query): Collection
    {
        $queries = explode(',', $query);
        $res = Collection::make();
        foreach ($queries as $selector) {
            $res = $res->merge($this->evaluateToCollection($this->cssSelector2XPath(trim($selector))));
        }

        return $res->sortDom();
    }

    /**
     * @param string $query
     * @return \Contender\Elements\Collection
     */
    public function find(string $query): Collection
    {
        return $this->querySelectorAll($query)->onlyElement();
    }

    /**
     * @param string $query
     * @return \Contender\Elements\Collection|Node[]
     */
    public function evaluateToCollection(string $query): Collection
    {
        $res = $this->domXPathQuery($query);

        if ($res === false) {
            return Collection::make();
        }
        if ($res instanceof DOMNodeList) {
            return Collection::makeByDOMNodeList($res, $this);
        }

        return Collection::make([$this->createElement($res)]);
    }

    /**
     * @param string $query
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
