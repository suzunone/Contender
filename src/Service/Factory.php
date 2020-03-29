<?php
/**
 * Factory.php
 *
 * Class Factory
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
 * @since      2020/03/24
 */

namespace Contender\Service;

use Contender\Contender;
use Contender\Dom\Attr;
use Contender\Dom\CdataSection;
use Contender\Dom\Comment;
use Contender\Dom\DocumentFragment;
use Contender\Dom\DocumentType;
use Contender\Dom\Element;
use Contender\Dom\Entity;
use Contender\Dom\EntityReference;
use Contender\Dom\Implementation;
use Contender\Dom\NamedNodeMap;
use Contender\Dom\Node;
use Contender\Dom\NodeList;
use Contender\Dom\Notation;
use Contender\Dom\ProcessingInstruction;
use Contender\Dom\Text;
use DOMAttr;
use DOMCdataSection;
use DOMComment;
use DOMDocument;
use DOMDocumentFragment;
use DOMDocumentType;
use DOMElement;
use DOMEntity;
use DOMEntityReference;
use DOMImplementation;
use DOMNamedNodeMap;
use DOMNode;
use DOMNodeList;
use DOMText;

/**
 * Class Factory
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
 * @since      2020/03/24
 * @hideDoc
 */
class Factory
{
    /**
     * @param \DOMNodeList|\DOMDocument|\DOMElement|\DOMImplementation|\DOMNode|\DOMNamedNodeMap|\DOMText|\DOMDocumentType|null $item
     * @param \Contender\Dom\Traits\SelectorTrait|\Contender\Dom\Traits\MutationTrait|\Contender\Dom\Traits\GetterTrait|\Contender\Dom\ElementInterface|\Contender\Dom\Implementation|null $old
     * @return \Contender\Dom\Attr|\Contender\Dom\CdataSection|\Contender\Dom\CharacterData|\Contender\Dom\NodeList|\Contender\Dom\Comment|\Contender\Dom\Document|\Contender\Dom\DocumentType|\Contender\Dom\DocumentFragment|\Contender\Dom\Element|\Contender\Dom\Implementation|\Contender\Dom\NamedNodeMap|\Contender\Dom\Node|\Contender\Dom\Notation|ProcessingInstruction|\Contender\Dom\Text
     * @hideDoc
     */
    public static function get($item, $old)
    {
        if ($item instanceof DOMNodeList) {
            return NodeList::makeByDOMNodeList($item, $old);
        }

        if ($item instanceof DOMDocument) {
            return Contender::loadDomDocument($item);
        }

        if ($item instanceof DOMElement) {
            return new Element($item);
        }

        if ($item instanceof DOMEntity) {
            return new Entity($item);
        }

        if ($item instanceof \DOMProcessingInstruction) {
            return new ProcessingInstruction($item);
        }

        if ($item instanceof \DOMNotation) {
            return new Notation($item);
        }

        if ($item instanceof DOMEntityReference) {
            return new EntityReference($item);
        }

        if ($item instanceof DOMImplementation) {
            return new Implementation($item);
        }

        if ($item instanceof DOMDocumentType) {
            return new DocumentType($item);
        }

        if ($item instanceof DOMNamedNodeMap) {
            return NamedNodeMap::load($item, $old);
        }

        if ($item instanceof DOMAttr) {
            return new Attr($item);
        }

        if ($item instanceof DOMComment) {
            return new Comment($item);
        }

        if ($item instanceof DOMCdataSection) {
            return new CdataSection($item);
        }

        if ($item instanceof DOMText) {
            return new Text($item);
        }

        if ($item instanceof DOMDocumentFragment) {
            return new DocumentFragment($item);
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
