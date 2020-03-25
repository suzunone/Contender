<?php
/**
 * Document.php
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

use Contender\Elements\Traits\NodeTrait;
use DOMDocument;

/**
 * Access each element of Html, like window.document in Javascript.
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
 * @property-read \Contender\Elements\Document|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null parentNode The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null parent_node The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null lastElementChild The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null last_element_child The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Document|null nextSibling Alias to next_element_sibling
 * @property-read \Contender\Elements\Document|null next_sibling Alias to next_element_sibling
 * @property-read int nodeType Gets the type of the node.
 * @property-read int node_type Gets the type of the node.
 * @property-read string nodeName Returns the most accurate name for the current node type
 * @property-read string node_name Returns the most accurate name for the current node type
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
     * @return \DOMDocument
     */
    protected function document(): DOMDocument
    {
        return $this->element;
    }

    /**
     * Create new element node
     *
     * @param string $name The tag name of the element.
     * @param string|null $value The value of the element. By default, an empty element will be created. You can also set the value later with DOMElement->nodeValue.
     * @return \Contender\Elements\Element
     */
    public function createElement(string $name, ?string $value = null): Element
    {
        $element = $this->element->createElement($name, $value);
        $this->element->importNode($element);

        return Factory::get($element, $this);
    }


    /**
     * Create new comment node
     *
     * @param string $value The content of the comment.
     * @return \Contender\Elements\Node
     */
    public function createComment(string $value): Node
    {
        $node = $this->element->createComment($value);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }

    /**
     * Create new comment node
     *
     * @param string $value The content of the text.
     * @return \Contender\Elements\Node
     */
    public function createTextNode(string $value): Node
    {
        $node = $this->element->createTextNode($value);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }

    /**
     * Create new cdata node
     *
     * @param string $value The content of the cdata.
     * @return \Contender\Elements\Node
     */
    public function createCDATASection(string $value): Node
    {
        $node = $this->element->createCDATASection($value);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }

    /**
     * Creates new PI node
     *
     * @param string $target    The target of the processing instruction.
     * @param string|null $data The content of the processing instruction.
     * @return \Contender\Elements\Node
     */
    public function createProcessingInstruction(string $target, ?string $data = null): Node
    {
        $node = $this->element->createProcessingInstruction($target, $data);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }

    /**
     * Create new attribute node with an associated namespace
     *
     * @param string $namespaceURI  The namespace URI of the elements to match on. The special value * matches all namespaces.
     * @param string $qualifiedName The local name of the elements to match on. The special value * matches all local names.
     * @return \Contender\Elements\Node
     */
    public function createAttributeNS(string $namespaceURI, string $qualifiedName): Node
    {
        $node = $this->element->createAttributeNS($namespaceURI, $qualifiedName);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }

    /**
     * Create new attribute
     *
     * @param string $value The name of the attribute.
     * @return \Contender\Elements\Node
     */
    public function createAttribute(string $value): Node
    {
        $node = $this->element->createAttribute($value);
        $this->element->importNode($node);

        return Factory::get($node, $this);
    }


    /**
     * Create new entity reference node
     *
     * @param string $value The content of the entity reference, e.g. the entity reference minusthe leading & and the trailing ; characters.
     * @return \Contender\Elements\Node
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
}
