<?php
/**
 * Node.php
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

use Contender\Elements\Traits\ElementTrait;
use DOMDocument;
use DOMNode;

/**
 * Each element accessed from the {@link \Contender\Elements\Document}
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
 * @property-read bool isElement true if this node is an XML_ELEMENT_NODE
 * @property-read bool is_element true if this node is an XML_ELEMENT_NODE
 * @property-read bool isAttr true if this node is an XML_ATTRIBUTE_NODE
 * @property-read bool is_attr true if this node is an XML_ATTRIBUTE_NODE
 * @property-read bool isText true if this node is an XML_TEXT_NODE
 * @property-read bool is_text true if this node is an XML_TEXT_NODE
 * @property-read bool isCharacterData true if this node is an XML_CDATA_SECTION_NODE
 * @property-read bool is_character_data true if this node is an XML_CDATA_SECTION_NODE
 * @property-read bool isEntityReference true if this node is an XML_ENTITY_REF_NODE
 * @property-read bool is_entity_reference true if this node is an XML_ENTITY_REF_NODE
 * @property-read bool isEntity true if this node is an XML_ENTITY_NODE
 * @property-read bool is_entity true if this node is an XML_ENTITY_NODE
 * @property-read bool isProcessingInstruction true if this node is an XML_PI_NODE
 * @property-read bool is_processing_instruction true if this node is an XML_PI_NODE
 * @property-read bool isComment true if this node is an XML_COMMENT_NODE
 * @property-read bool is_comment true if this node is an XML_COMMENT_NODE
 * @property-read bool isDocument true if this node is an XML_DOCUMENT_NODE
 * @property-read bool is_document true if this node is an XML_DOCUMENT_NODE
 * @property-read bool isDocumentType true if this node is an XML_DOCUMENT_TYPE_NODE
 * @property-read bool is_document_type true if this node is an XML_DOCUMENT_TYPE_NODE
 * @property-read bool isDocumentFragment true if this node is an XML_DOCUMENT_FRAG_NODE
 * @property-read bool is_document_fragment true if this node is an XML_DOCUMENT_FRAG_NODE
 * @property-read bool isNotation true if this node is an XML_NOTATION_NODE
 * @property-read bool is_notation true if this node is an XML_NOTATION_NODE
 * @property-read string innerText The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.
 * @property-read string inner_text The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.
 * @property-read string textContent The text content of this node and its descendants.
 * @property-read string text_content The text content of this node and its descendants.
 * @property string innerHTML The Element property innerHTML gets or sets the HTML or XML markup contained within the element
 * @property string inner_h_t_m_l The Element property innerHTML gets or sets the HTML or XML markup contained within the element
 * @property-read string outerHTML The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_h_t_m_l The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property string innerXML The Element property innerXML gets or sets the HTML or XML markup contained within the element
 * @property string inner_x_m_l The Element property innerXML gets or sets the HTML or XML markup contained within the element
 * @property-read string outerXML The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_x_m_l The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string nodePath Gets an XPath location path for the node
 * @property-read string node_path Gets an XPath location path for the node
 * @property-read int lineNo Get line number for a node
 * @property-read int line_no Get line number for a node
 * @property-read \Contender\Elements\Collection children That contains all children of this node. If there are no children, this is an empty {@link \Contender\Elements\Collection}.
 * @property-read \Contender\Elements\Collection childNodes Aliases to children
 * @property-read \Contender\Elements\Collection child_nodes Aliases to children
 * @property-read \Contender\Elements\Node firstChild Get a first child node.
 * @property-read \Contender\Elements\Node first_child Get a first child node.
 * @property-read \Contender\Elements\Node lastChild Get a last child node.
 * @property-read \Contender\Elements\Node last_child Get a last child node.
 * @property-read \Contender\Elements\Node|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null parentNode The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null parent_node The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null lastElementChild The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null last_element_child The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null nextSibling Alias to next_element_sibling
 * @property-read \Contender\Elements\Node|null next_sibling Alias to next_element_sibling
 * @property-read int nodeType Gets the type of the node.
 * @property-read int node_type Gets the type of the node.
 * @property-read string nodeName Returns the most accurate name for the current node type
 * @property-read string node_name Returns the most accurate name for the current node type
 */
class Node implements ElementInterface
{
    use ElementTrait;

    /**
     * @var \DOMNode|\DOMElement
     */
    protected $element;

    /**
     * Node constructor.
     *
     * @param \DOMNode $element
     * @return void
     */
    public function __construct(DOMNode $element)
    {
        $this->element = $element;
    }

    /**
     * @return \DOMDocument
     */
    protected function document(): DOMDocument
    {
        return $this->element->ownerDocument;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getOuterHTMLAttribute();
    }


    /**
     * Removes the object from the tree it belongs to.
     *
     * @return \Contender\Elements\Node|null
     * @see https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/remove
     */
    public function remove(): ?Node
    {
        $res = $this->element->parentNode->removeChild($this->element);

        return new Node($res);
    }

    /**
     * Inserts a set of {@link \Contender\Elements\Node} or String in the children list of this ChildNode's parent, just after this ChildNode. Strings are inserted as equivalent Text nodes.
     *
     * @param \Contender\Elements\Node|string ...$elements
     * @return \Contender\Elements\Node|null
     * @see \Contender\Elements\Document::createElement()
     * @see https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/after
     */
    public function after(...$elements)
    {
        krsort($elements);
        foreach ($elements as $element) {
            if (!$element instanceof Node) {
                $node = new \DOMText($element);
            } else {
                $node = $element->nativeNode();
            }

            if ($this->element->nextSibling) {
                $res = $this->element->parentNode->insertBefore($node, $this->element->nextSibling);
            } else {
                $res = $this->element->parentNode->appendChild($node);
            }

        }

        if (isset($res)) {
            return new Node($res);
        }

        return null;
    }


    /**
     * Inserts a set of {@link \Contender\Elements\Node}  or String in the children list of this ChildNode's parent, just before this ChildNode. Strings are inserted as equivalent Text nodes.
     *
     * @param \Contender\Elements\Node|string ...$elements
     * @return \Contender\Elements\Node
     * @see \Contender\Elements\Document::createElement()
     * @see https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before
     */
    public function before(...$elements)
    {
        krsort($elements);

        foreach ($elements as $element) {
            if (!$element instanceof Node) {
                $node = new \DOMText($element);
            } else {
                $node = $element->nativeNode();
            }

            $res = $this->element->parentNode->insertBefore($node, $this->element);
        }

        if (isset($res)) {
            return new Node($res);
        }

        return null;
    }
}
