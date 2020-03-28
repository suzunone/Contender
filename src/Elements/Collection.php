<?php
/**
 * Collection.php
 *
 * @category   Contender
 * @package    Contender\Elements
 * @subpackage Contender\Elements
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Elements;

use Contender\Elements\Traits\CssSelector2XPathTrait;
use DOMNodeList;

/**
 * A collection of {@link \Contender\Elements\Node} from {@link \Contender\Elements\Document}
 *
 *
 *
 * @category   Contender
 * @package    Contender\Elements
 * @subpackage Contender\Elements
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
 * @property string inner_h_t_m_l 1st of innerHTML
 * @property string innerXML 1st of innerXML
 * @property string inner_x_m_l 1st of innerXML
 */
class Collection extends \Illuminate\Support\Collection
{
    use CssSelector2XPathTrait;

    /**
     * Collection constructor.
     * @param array $items
     * @return void
     */
    public function __construct($items = [])
    {
        parent::__construct($items);
    }

    /**
     * @param \DOMNodeList $element
     * @param \Contender\Elements\ElementInterface $node
     * @return \Contender\Elements\Collection
     */
    public static function makeByDOMNodeList(DOMNodeList $element, ElementInterface $node): Collection
    {
        $res = [];
        foreach ($element as $dom) {
            $res[] = Factory::get($dom, $node);
        }

        return static::make($res);
    }

    /**
     * Call {@link \Contender\Elements\Collection::querySelectorAll()} and {@link \Contender\Elements\Collection::onlyElement()}
     *
     * @param string $selectors
     * @return \Contender\Elements\Collection
     */
    public function find(string $selectors): Collection
    {
        return $this->querySelectorAll($selectors)->onlyElement();
    }

    /**
     * HTMLElement only Node
     *
     * @return \Contender\Elements\Collection Filtered Collection
     */
    public function onlyElement(): Collection
    {
        return $this->filter(static function (Node $node) {
            return $node->is_element;
        })->values();
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
        $res = self::make();

        $this->each(function (Node $item) use ($queries, &$res) {
            foreach ($queries as $selector) {
                $res = $res->merge($item->evaluateToCollection($this->cssSelector2XPath(trim($selector))));
            }
        });

        return $res->sortDom();
    }

    /**
     * Sort {@link \Contender\Elements\Node} by line number and Xpath
     *
     * @return \Contender\Elements\Collection Sorted Collection
     */
    public function sortDom(): Collection
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
     * Returns a {@link \Contender\Elements\Node} matching CSS selector.
     *
     * @param string $query Valid CSS selector string
     * @return \Contender\Elements\Node|null
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
     * @link \Contender\Elements\Node::$innerHTML
     */
    public function getInnerHTMLAttribute(): string
    {
        return $this->sortDom()->first()->innerHTML;
    }

    /**
     * @return string 1st of innerXML
     * @hideDoc
     * @link \Contender\Elements\Node::$innerXML
     */
    public function getInnerXMLAttribute(): string
    {
        return $this->sortDom()->first()->innerXML;
    }

    /**
     * @param string $val
     * @hideDoc
     * @link \Contender\Elements\Node::$innerHTML
     */
    public function setInnerHTMLAttribute(string $val): void
    {
        $this->sortDom()->first()->innerHTML = $val;
    }

    /**
     * @param string $val
     * @hideDoc
     * @link \Contender\Elements\Node::$innerXML
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
     * Alias getAttr()
     *
     * if call attr('name', 'value')
     * Alias setAttr()
     *
     * @param array $param
     * @return string|null
     * @link \Contender\Elements\Element::attr()
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
     * @link \Contender\Elements\Element::getAttribute()
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
     * @link \Contender\Elements\Element::setAttribute()
     */
    public function setAttribute(string $name, string $value): void
    {
        $this->sortDom()->first()->setAttribute($name, $value);
    }

    /**
     * Removes the object from the tree it belongs to.
     *
     * @return \Contender\Elements\Collection
     * @link \Contender\Elements\Node::remove()
     */
    public function remove(): Collection
    {
        $collect = new Collection([]);
        $this->each(static function (Node $node) use (&$collect) {
            $collect->push($node->remove());
        });

        return $collect;
    }
}
