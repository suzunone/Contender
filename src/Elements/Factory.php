<?php
/**
 * Factory.php
 *
 * Class Factory
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

use Contender\Contender;
use DOMDocument;
use DOMElement;
use DOMNamedNodeMap;
use DOMNode;
use DOMNodeList;

/**
 * Class Factory
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
 * @hideDoc
 */
class Factory
{
    /**
     * @param \DOMNodeList|\DOMDocument|\DOMElement|\DOMNode|\DOMNamedNodeMap|null $item
     * @param \Contender\Elements\ElementInterface|null $old
     * @return \Contender\Elements\Collection|\Contender\Elements\Document|\Contender\Elements\Element|\Contender\Elements\Node|\Contender\Elements\NamedNodeMap|\Contender\Elements\Attr
     * @hideDoc
     */
    public static function get($item, $old)
    {
        if ($item instanceof DOMNodeList) {
            return Collection::makeByDOMNodeList($item, $old);
        }

        if ($item instanceof DOMDocument) {
            return Contender::loadDomDocument($item);
        }

        if ($item instanceof DOMElement) {
            return new Element($item);
        }

        if ($item instanceof DOMNamedNodeMap) {
            return NamedNodeMap::load($item, $old);
        }

        if ($item instanceof \DOMAttr) {
            return new Attr($item);
        }

        if ($item instanceof DOMNode) {
            return new Node($item);
        }

        if ($item === null) {
            return null;
        }

        return new Node($item);
    }
}
