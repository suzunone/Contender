<?php
/**
 * Document.php
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

use Contender\Dom\Traits\NodeTrait;
use DOMDocument;
use Contender\Service\Factory;

/**
 * Access each element of Html, like window.document in Javascript.
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
 * @mixin \Contender\DummyMixin\DomDocument
 * @property-read string actualEncoding Deprecated. Actual encoding of the document, is a readonly equivalent to encoding.
 * @property-read string|null baseURI The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.
 * @property-read \Contender\Dom\NodeList childNodes Aliases to children
 * @property-read \Contender\Dom\NodeList child_nodes Aliases to children
 * @property-read \Contender\Dom\NodeList children That contains all children of this node. If there are no children, this is an empty {@link \Contender\Dom\NodeList}.
 * @property-read \DOMConfiguration config Deprecated. Configuration used when {
 * @property-read \Contender\Dom\Element documentElement
 * @property string|null documentURI The location of the document or NULL if undefined.
 * @property-read \Contender\Dom\Element document_element
 * @property string encoding Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.
 * @property-read \Contender\Dom\Node|null firstChild Get a first child node.
 * @property-read \Contender\Dom\Element|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null first_child Get a first child node.
 * @property-read \Contender\Dom\Element|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property bool formatOutput Nicely formats output with indentation and extra space.
 * @property \Contender\Dom\Implementation implementation
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
 * @property-read string outerHTML The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outerXML The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_h_t_m_l The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_x_m_l The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read \Contender\Dom\Document ownerDocument The {@link \Contender\Dom\Document} object associated with this node
 * @property-read \Contender\Dom\Document owner_document The {@link \Contender\Dom\Document} object associated with this node
 * @property mixed|string|int parameter
 * @property string|null prefix The namespace prefix of this node, or NULL if it is unspecified.
 * @property bool preserveWhiteSpace Do not remove redundant white space. Default to TRUE.
 * @property-read \Contender\Dom\Node|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property bool recover Proprietary. Enables recovery mode, i.e. trying to parse non-well formed documents.This attribute is not part of the DOM specification and is specific to libxml.
 * @property bool resolveExternals Set it to TRUE to load external entities from a doctype declaration. This is useful for including character entities in your XML document.
 * @property bool standalone Deprecated. Whether or not the document is standalone, as specified by the XML declaration,corresponds to xmlStandalone.
 * @property bool strictErrorChecking Throws <classname>DOMException</classname> on errors. Default to TRUE.
 * @property bool substituteEntities Proprietary. Whether or not to substitute entities. This attribute is not part of the DOMspecification and is specific to libxml.
 * @property-read string textContent The text content of this node and its descendants.
 * @property-read string text_content The text content of this node and its descendants.
 * @property bool validateOnParse Loads and validates against the DTD. Default to FALSE.
 * @property string version Deprecated. Version of XML, corresponds to xmlVersion
 * @property-read string xmlEncoding An attribute specifying, as part of the XML declaration, the encoding of this document. This is NULL whenunspecified or when it is not known, such as when the Document was created in memory.
 * @property bool xmlStandalone An attribute specifying, as part of the XML declaration, whether this document is standalone.This is FALSE when unspecified.
 * @property string xmlVersion An attribute specifying, as part of the XML declaration, the version number of this document. If there is nodeclaration and if this document supports the "XML" feature, the value is "1.0".
 */
class Document implements ElementInterface
{
    use NodeTrait;

    /**
     * @var \DOMDocument
     */
    protected $element;

    /**
     * Node constructor.
     *
     * @param \DOMDocument $element
     * @return void
     */
    public function __construct(DOMDocument $element)
    {
        $this->element = $element;
    }

    /**
     * @return \Contender\Dom\Element
     */
    public function getDocumentElementAttribute(): Element
    {
        return Factory::get($this->element->documentElement, $this);
    }

    /**
     * Create new element node
     *
     * @param string $name       The tag name of the element.
     * @param string|null $value The value of the element. By default, an empty element will be created. You can also set the value later with DOMElement->nodeValue.
     * @return \Contender\Dom\Element
     */
    public function createElement(string $name, ?string $value = null): Element
    {
        $element = $this->element->createElement($name, $value);

        return Factory::get($element, $this);
    }

    /**
     * Create new comment node
     *
     * @param string $value The content of the comment.
     * @return \Contender\Dom\Node
     */
    public function createComment(string $value): Node
    {
        $node = $this->element->createComment($value);

        return Factory::get($node, $this);
    }

    /**
     * Create new comment node
     *
     * @param string $value The content of the text.
     * @return \Contender\Dom\Node
     */
    public function createTextNode(string $value): Node
    {
        $node = $this->element->createTextNode($value);

        return Factory::get($node, $this);
    }

    /**
     * Create new cdata node
     *
     * @param string $value The content of the cdata.
     * @return \Contender\Dom\Node
     */
    public function createCDATASection(string $value): Node
    {
        $node = $this->element->createCDATASection($value);

        return Factory::get($node, $this);
    }

    /**
     * Creates new PI node
     *
     * @param string $target    The target of the processing instruction.
     * @param string|null $data The content of the processing instruction.
     * @return \Contender\Dom\Node
     */
    public function createProcessingInstruction(string $target, ?string $data = null): Node
    {
        $node = $this->element->createProcessingInstruction($target, $data);

        return Factory::get($node, $this);
    }

    /**
     * Create new attribute node with an associated namespace
     *
     * @param string $namespaceURI  The namespace URI of the elements to match on. The special value * matches all namespaces.
     * @param string $qualifiedName The local name of the elements to match on. The special value * matches all local names.
     * @return \Contender\Dom\Node
     */
    public function createAttributeNS(string $namespaceURI, string $qualifiedName): Node
    {
        $node = $this->element->createAttributeNS($namespaceURI, $qualifiedName);

        return Factory::get($node, $this);
    }

    /**
     * Create new attribute
     *
     * @param string $value The name of the attribute.
     * @return \Contender\Dom\Attr
     */
    public function createAttribute(string $value): Attr
    {
        $node = $this->element->createAttribute($value);

        return Factory::get($node, $this);
    }

    /**
     * Create new entity reference node
     *
     * @param string $value The content of the entity reference, e.g. the entity reference minusthe leading & and the trailing ; characters.
     * @return \Contender\Dom\Node
     * @link https://php.net/manual/domdocument.createentityreference.php
     */
    public function createEntityReference(string $value): Node
    {
        $node = $this->element->createEntityReference($value);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getOuterHTMLAttribute();
    }

    /**
     * @return \DOMDocument
     */
    protected function document(): DOMDocument
    {
        return $this->element;
    }
}