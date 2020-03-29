<?php
/**
 * NodeList.php
 *
 * @category   Contender
 * @package    Contender\Dom
 * @subpackage Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Dom;

use Contender\Dom\Traits\CssSelector2XPathTrait;
use DOMNodeList;

use Contender\Service\Factory;

/**
 * A collection of {@link \Contender\Dom\Node} from {@link \Contender\Dom\Document}
 *
 *
 *
 * @category   Contender
 * @package    Contender\Dom
 * @subpackage Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @isdoc
 * @method Node|Element offsetGet($key)
 * @method Node|Element last(callable $callback = null, $default = null)
 * @method Node|Element first(callable $callback = null, $default = null)
 * @property string innerHTML 1st of innerHTML
 * @property string innerXML 1st of innerXML
 * @property string inner_h_t_m_l 1st of innerHTML
 * @property string inner_x_m_l 1st of innerXML
 */
class NodeList extends \Illuminate\Support\Collection
{
    use CssSelector2XPathTrait;

    /**
     * NodeList constructor.
     * @param array $items
     * @return void
     */
    public function __construct($items = [])
    {
        parent::__construct($items);
    }

    /**
     * @param \DOMNodeList $element
     * @param \Contender\Dom\ElementInterface $node
     * @return \Contender\Dom\NodeList
     */
    public static function makeByDOMNodeList(DOMNodeList $element, ElementInterface $node): NodeList
    {
        $res = [];
        foreach ($element as $dom) {
            $res[] = Factory::get($dom, $node);
        }

        return static::make($res);
    }

    /**
     * Call {@link \Contender\Dom\NodeList::querySelectorAll()} and {@link \Contender\Dom\NodeList::onlyElement()}
     *
     * @param string $selectors
     * @return \Contender\Dom\NodeList
     */
    public function find(string $selectors): NodeList
    {
        return $this->querySelectorAll($selectors)->onlyElement();
    }

    /**
     * HTMLElement only Node
     *
     * @return \Contender\Dom\NodeList Filtered NodeList
     */
    public function onlyElement(): NodeList
    {
        return $this->filter(static function (Node $node) {
            return $node->is_element;
        })->values();
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
        $res = self::make();

        $this->each(function (Node $item) use ($queries, &$res) {
            foreach ($queries as $selector) {
                $res = $res->merge($item->evaluateToCollection($item->cssSelector2XPath(trim($selector))));
            }
        });

        return $res->sortDom();
    }

    /**
     * Sort {@link \Contender\Dom\Node} by line number and Xpath
     *
     * @return \Contender\Dom\NodeList Sorted NodeList
     */
    public function sortDom(): NodeList
    {
        return $this->sort(static function (Node $item_a, Node $item_b) {
            $line_no_a = $item_a->lineNo;
            $line_no_b = $item_b->lineNo;

            if ($line_no_a === $line_no_b) {
                $line_no_a = mb_strlen($item_a->nodePath);
                $line_no_b = mb_strlen($item_b->nodePath);
            }

            if ($line_no_a === $line_no_b) {
                return strnatcasecmp($item_a->nodePath, $item_b->nodePath);
            }

            return $line_no_a - $line_no_b;
        })->values();
    }

    /**
     * Returns a {@link \Contender\Dom\Node} matching CSS selector.
     *
     * @param string $query Valid CSS selector string
     * @return \Contender\Dom\Node|null
     */
    public function querySelector(string $query): ?Node
    {
        $queries = explode(',', $query);

        $res = null;
        $this->each(function (Node $item) use ($queries, &$res) {
            foreach ($queries as $selector) {
                $res = $item->evaluate($this->cssSelector2XPath(trim($selector)));
                if ($res) {
                    return false;
                }
            }

            return true;
        });

        return $res;
    }

    /**
     * @param string $key
     * @return mixed|string
     * @throws \Exception
     * @hideDoc
     */
    public function __get($key)
    {
        if (strtolower($key) === 'innerhtml') {
            return $this->getInnerHtmlAttribute();
        }
        if (strtolower($key) === 'innerxml') {
            return $this->getInnerXMLAttribute();
        }

        return parent::__get($key);
    }

    /**
     * @param $key
     * @param $value
     * @return void
     * @hideDoc
     */
    public function __set($key, $value)
    {
        if (strtolower($key) === 'innerhtml') {
            $this->setInnerHtmlAttribute($value);
        } elseif (strtolower($key) === 'innerxml') {
            $this->setInnerXMLAttribute($value);
        }
    }

    /**
     * @return string 1st of innerHTML
     * @hideDoc
     * @link \Contender\Dom\Node::$innerHTML
     */
    public function getInnerHTMLAttribute(): string
    {
        return $this->sortDom()->first()->innerHTML;
    }

    /**
     * @return string 1st of innerXML
     * @hideDoc
     * @link \Contender\Dom\Node::$innerXML
     */
    public function getInnerXMLAttribute(): string
    {
        return $this->sortDom()->first()->innerXML;
    }

    /**
     * @param string $val
     * @hideDoc
     * @link \Contender\Dom\Node::$innerHTML
     */
    public function setInnerHTMLAttribute(string $val): void
    {
        $this->sortDom()->first()->innerHTML = $val;
    }

    /**
     * @param string $val
     * @hideDoc
     * @link \Contender\Dom\Node::$innerXML
     */
    public function setInnerXMLAttribute(string $val): void
    {
        $this->sortDom()->first()->innerXML = $val;
    }

    /**
     * @param $key
     * @return bool
     * @hideDoc
     */
    public function __isset($key)
    {
        if (strtolower($key) === 'innerhtml') {
            return true;
        }
        if (strtolower($key) === 'innerxml') {
            return true;
        }

        return in_array($key, static::$proxies, true);
    }

    /**
     * if call attr('name')
     * Alias getAttribute()
     *
     * if call attr('name', 'value')
     * Alias setAttribute()
     *
     * @param string[] ...$param
     * @return string|null
     * @link \Contender\Dom\Element::attr()
     */
    public function attr(...$param): ?string
    {
        return call_user_func_array([$this->sortDom()->first(), 'attr'], $param);
    }

    /**
     * get tag attribute for element.
     *
     * @param string $name
     * @return mixed
     * @link \Contender\Dom\Element::getAttribute()
     */
    public function getAttribute(string $name)
    {
        return $this->sortDom()->first()->getAttribute($name);
    }

    /**
     * set tag attribute for element.
     *
     * @param string $name
     * @param string $value
     * @link \Contender\Dom\Element::setAttribute()
     */
    public function setAttribute(string $name, string $value): void
    {
        $this->sortDom()->first()->setAttribute($name, $value);
    }

    /**
     * Removes the object from the tree it belongs to.
     *
     * @return \Contender\Dom\NodeList
     * @link \Contender\Dom\Node::remove()
     */
    public function remove(): NodeList
    {
        $collect = new NodeList([]);
        $this->each(static function (Node $node) use (&$collect) {
            $collect->push($node->remove());
        });

        return $collect;
    }
}
