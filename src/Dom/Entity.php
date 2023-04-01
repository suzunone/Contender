<?php
/**
 * Entity.php
 *
 * Class Entity
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
 * @since      2020/03/28
 */

namespace Contender\Dom;

use DOMEntity;
use DOMNode;

/**
 * Class Entity
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
 * @since      2020/03/28
 * @isdoc
 * @mixin \Contender\DummyMixin\DOMEntity
 * @property string|null actualEncoding An attribute specifying the encoding used for this entity at the time of parsing, when it is an external
 * @property-read string|null baseURI The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.
 * @property-read \Contender\Dom\NodeList childNodes Aliases to children
 * @property-read \Contender\Dom\NodeList child_nodes Aliases to children
 * @property-read \Contender\Dom\NodeList children That contains all children of this node. If there are no children, this is an empty {@link \Contender\Dom\NodeList}.
 * @property string|null encoding An attribute specifying, as part of the text declaration, the encoding of this entity, when it is an external
 * @property-read \Contender\Dom\Node|null firstChild Get a first child node.
 * @property-read \Contender\Dom\Element|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null first_child Get a first child node.
 * @property-read \Contender\Dom\Element|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property string innerHTML The Element property innerHTML gets or sets the HTML or XML markup contained within the element
 * @property-read string innerText The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Dom\Node::$textContent} instead of NULL.
 * @property string innerXML The Element property innerXML gets or sets the HTML or XML markup contained within the element
 * @property string inner_h_t_m_l The Element property innerHTML gets or sets the HTML or XML markup contained within the element
 * @property-read string inner_text The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Dom\Node::$textContent} instead of NULL.
 * @property string inner_x_m_l The Element property innerXML gets or sets the HTML or XML markup contained within the element
 * @property-read bool isAttr true if this node is an XML_ATTRIBUTE_NODE
 * @property-read bool isCharacterData true if this node is an XML_CDATA_SECTION_NODE
 * @property-read bool isComment true if this node is an XML_COMMENT_NODE
 * @property-read bool isDocument true if this node is an XML_DOCUMENT_NODE
 * @property-read bool isDocumentFragment true if this node is an XML_DOCUMENT_FRAG_NODE
 * @property-read bool isDocumentType true if this node is an XML_DOCUMENT_TYPE_NODE
 * @property-read bool isElement true if this node is an XML_ELEMENT_NODE
 * @property-read bool isEntity true if this node is an XML_ENTITY_NODE
 * @property-read bool isEntityReference true if this node is an XML_ENTITY_REF_NODE
 * @property-read bool isNotation true if this node is an XML_NOTATION_NODE
 * @property-read bool isProcessingInstruction true if this node is an XML_PI_NODE
 * @property-read bool isText true if this node is an XML_TEXT_NODE
 * @property-read bool is_attr true if this node is an XML_ATTRIBUTE_NODE
 * @property-read bool is_character_data true if this node is an XML_CDATA_SECTION_NODE
 * @property-read bool is_comment true if this node is an XML_COMMENT_NODE
 * @property-read bool is_document true if this node is an XML_DOCUMENT_NODE
 * @property-read bool is_document_fragment true if this node is an XML_DOCUMENT_FRAG_NODE
 * @property-read bool is_document_type true if this node is an XML_DOCUMENT_TYPE_NODE
 * @property-read bool is_element true if this node is an XML_ELEMENT_NODE
 * @property-read bool is_entity true if this node is an XML_ENTITY_NODE
 * @property-read bool is_entity_reference true if this node is an XML_ENTITY_REF_NODE
 * @property-read bool is_notation true if this node is an XML_NOTATION_NODE
 * @property-read bool is_processing_instruction true if this node is an XML_PI_NODE
 * @property-read bool is_text true if this node is an XML_TEXT_NODE
 * @property-read \Contender\Dom\Node|null lastChild Get a last child node.
 * @property-read \Contender\Dom\Element|null lastElementChild The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null last_child Get a last child node.
 * @property-read \Contender\Dom\Element|null last_element_child The last child of this node. If there is no such node, this returns NULL.
 * @property-read int lineNo Get line number for a node
 * @property-read int line_no Get line number for a node
 * @property-read string localName Returns the local part of the qualified name of this node.
 * @property-read string|null namespaceURI The namespace URI of this node, or NULL if it is unspecified.
 * @property-read \Contender\Dom\Node|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read string nodeName Returns the most accurate name for the current node type
 * @property-read string nodePath Gets an XPath location path for the node
 * @property-read int nodeType Gets the type of the node. One of the predefined XML_xxx_NODE constants
 * @property string nodeValue The value of this node, depending on its type
 * @property-read string node_path Gets an XPath location path for the node
 * @property string|null notationName For unparsed entities, the name of the notation for the entity. For parsed entities, this is NULL.
 * @property-read string outerHTML The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outerXML The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_h_t_m_l The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_x_m_l The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read \Contender\Dom\Document ownerDocument The {@link \Contender\Dom\Document} object associated with this node
 * @property-read \Contender\Dom\Document owner_document The {@link \Contender\Dom\Document} object associated with this node
 * @property mixed|string|int parameter
 * @property string|null prefix The namespace prefix of this node, or NULL if it is unspecified.
 * @property-read \Contender\Dom\Node|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property string|null publicId The public identifier associated with the entity if specified, and NULL otherwise.
 * @property string|null systemId The system identifier associated with the entity if specified, and NULL otherwise. This may be an
 * @property-read string textContent The text content of this node and its descendants.
 * @property-read string text_content The text content of this node and its descendants.
 * @property string|null version An attribute specifying, as part of the text declaration, the version number of this entity, when it is an
 */
class Entity extends Node
{
    /**
     * @var \DOMEntity
     */
    protected DOMNode $element;

    /**
     * Comment constructor.
     * @param \DOMEntity $element
     */
    public function __construct(DOMEntity $element)
    {
        parent::__construct($element);
    }
}
