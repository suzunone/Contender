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
 * Class Collection
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
 * @method \Contender\Elements\Node offsetGet($key)
 * @method \Contender\Elements\Node last(callable $callback = null, $default = null)
 * @method \Contender\Elements\Node first(callable $callback = null, $default = null)
 * @property mixed innerHTML
 * @property mixed inner_h_t_m_l
 */
class Collection extends \Illuminate\Support\Collection
{
    use CssSelector2XPathTrait;

    /**
     * Collection constructor.
     * @param array $items
     */
    public function __construct($items = [])
    {
        parent::__construct($items);
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
     * @param \DOMNodeList $element
     * @param \Contender\Elements\ElementInterface $node
     * @return \Contender\Elements\Collection
     */
    public static function makeByDOMNodeList(DOMNodeList $element, ElementInterface $node): Collection
    {
        $res = [];
        foreach ($element as $dom) {
            $res[] = $node->createNode($dom);
        }

        return static::make($res);
    }

    /**
     * @return \Contender\Elements\Collection
     */
    public function onlyElement(): Collection
    {
        return $this->filter(static function (Node $node) {
            return $node->is_element;
        })->values();
    }

    /**
     * @return \Contender\Elements\Collection
     */
    public function sortDom()
    {
        return $this->sort(function (Node $item_a, Node $item_b) {
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
     * @param string $query
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
     * @param string $query
     * @return \Contender\Elements\Collection|Node[]
     */
    public function querySelectorAll(string $query): Collection
    {
        $queries = explode(',', $query);
        $res = self::make();

        $this->each(function (Node $item) use ($queries, &$res) {
            foreach ($queries as $selector) {
                $res = $res->merge($item->evaluateToCollection($this->cssSelector2XPath(trim($selector))));
            }
        });

        return $res->sortDom();
    }

    /**
     * @param string $key
     * @return mixed|string
     * @throws \Exception
     */
    public function __get($key)
    {
        if (strtolower($key) === 'innerhtml') {
            return $this->getInnerHtmlAttribute();
        }

        return parent::__get($key);
    }

    /**
     * @param $key
     * @param $value
     * @return void|mixed
     */
    public function __set($key, $value)
    {
        if (strtolower($key) === 'innerhtml') {
            return $this->setInnerHtmlAttribute($value);
        }
    }

    /**
     * @return string
     */
    public function getInnerHTMLAttribute(): string
    {
        return $this->sortDom()->first()->innerHTML;
    }

    /**
     * @param string $val
     */
    public function setInnerHTMLAttribute(string $val): void
    {
        $this->sortDom()->first()->innerHTML = $val;
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        if (strtolower($key) === 'innerhtml') {
            return true;
        }

        return in_array($key, static::$proxies, true);
    }

    /**
     * @param mixed ...$param
     * @return string
     */
    public function attr(...$param): string
    {
        return $this->sortDom()->first()->attr(...$param);
    }
}
