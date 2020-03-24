<?php
/**
 * NamedNodeMap.php
 *
 * Class NamedNodeMap
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
 * @since      2020/03/24
 */

namespace Contender\Elements;

use Illuminate\Support\Collection;

/**
 * Class NamedNodeMap
 *
 * @category   Contender
 * @package    Contender\Elements
 * @subpackage Contender\Elements
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @isdoc
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/25
 */
class NamedNodeMap extends Collection
{
    protected $nodeMap;

    /**
     * NamedNodeMap constructor.
     * @param array $items
     * @param \DOMNamedNodeMap|null $map
     */
    public function __construct($items = [], ?\DOMNamedNodeMap $map = null)
    {
        parent::__construct($items);
        $this->nodeMap = $map;
    }

    /**
     * @param \DOMNamedNodeMap|null $map
     * @param \Contender\Elements\Node $old
     * @return \Contender\Elements\NamedNodeMap
     * @hideDoc
     */
    public static function load(?\DOMNamedNodeMap $map, $old): self
    {
        if ($map === null) {
            return new self([]);
        }

        $items = [];
        foreach ($map as $item) {
            $items[] = Factory::get($item, $old);
        }

        return new self($items, $map);
    }

    /**
     *  Retrieves a node specified by name
     *
     * @param string $name The nodeName of the node to retrieve.
     * @return \Contender\Elements\Node|null
     */
    public function getNamedItem(string $name): ?Node
    {
        if ($this->nodeMap instanceof \DOMNamedNodeMap) {
            return Factory::get($this->nodeMap->getNamedItem($name), null);
        }

        return  null;
    }

    /**
     * Retrieves a node specified by local name and namespace URI
     *
     * @param string $namespaceURI The namespace URI of the node to retrieve.
     * @param string $localName The local name of the node to retrieve.
     * @return \Contender\Elements\Node|null
     */
    public function getNamedItemNS(string $namespaceURI, string $localName): ?Node
    {
        if ($this->nodeMap instanceof \DOMNamedNodeMap) {
            return Factory::get($this->nodeMap->getNamedItemNS($namespaceURI, $localName), null);
        }

        return  null;
    }
}
