<?php
/**
 * Element.php
 *
 * Class Element
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

use Contender\Elements\Traits\ElementTrait;
use Generator;

/**
 * Class Element
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
 * @isdoc
 * @property-read \Contender\Elements\NamedNodeMap attributes
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
 * @property-read \Contender\Elements\Element|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null parentNode The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null parent_node The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null lastElementChild The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null last_element_child The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null nextSibling Alias to next_element_sibling
 * @property-read \Contender\Elements\Element|null next_sibling Alias to next_element_sibling
 * @property-read int nodeType Gets the type of the node.
 * @property-read int node_type Gets the type of the node.
 * @property-read string nodeName Returns the most accurate name for the current node type
 * @property-read string node_name Returns the most accurate name for the current node type
 */
class Element extends Node
{
    use ElementTrait;

    /**
     * @var \DOMElement
     */
    protected $element;

    /**
     * if call attr('name')
     * Alias getAttr()
     *
     * if call attr('name', 'value')
     * Alias setAttr()
     *
     * @param mixed ...$name
     * @return string|null
     */
    public function attr(...$name): ?string
    {
        if (count($name) === 1) {
            return $this->getAttribute($name[0]);
        }

        $this->setAttribute($name[0], $name[1]);

        return null;
    }

    /**
     * Get tag attribute for element.
     *
     * @param string $name
     * @return mixed
     */
    public function getAttribute(string $name)
    {
        return $this->element->getAttribute($name);
    }

    /**
     * Set tag attribute for element.
     *
     * @param string $name
     * @param string $value
     */
    public function setAttribute(string $name, string $value)
    {
        $this->element->setAttribute($name, $value);
    }

    /**
     * Returns an array of strings that are attributes to an Element.
     *
     * If you simply want to get the attribute and its value, it is faster to combine with {@link \Contender\Elements\Element::getAttribute()}, than to use the {@link \Contender\Elements\Element::$attributes} property.
     *
     * @see \Contender\Elements\Element::getAttributeNamesGenerator()
     * @return array
     */
    public function getAttributeNames(): array
    {
        if (!$this->element->attributes) {
            // @codeCoverageIgnoreStart
            return [];
            // @codeCoverageIgnoreEnd
        }

        return iterator_to_array($this->getAttributeNamesGenerator());
    }

    /**
     * Returns a Generator of strings that are attributes to an Element.
     *
     * @see \Contender\Elements\Element::getAttributeNames()
     * @return \Generator|null
     */
    public function getAttributeNamesGenerator(): ?Generator
    {
        if ($this->element->attributes) {
            foreach ($this->element->attributes as $attr) {
                yield $attr->nodeName;
            }
        }
    }

    /**
     * Returns the Element's Attribute. Note that it returns {@link \Contender\Elements\NamedNodeMap} rather than an array.
     *
     * @return \Contender\Elements\NamedNodeMap
     */
    public function getAttributesAttribute(): NamedNodeMap
    {
        return NamedNodeMap::load($this->element->attributes, $this);
    }

    /**
     * @param $name
     * @return bool
     * @hideDoc
     */
    public function removeAttribute($name)
    {
        return $this->element->removeAttribute($name);
    }

    /**
     * @param $name
     * @return bool
     * @hideDoc
     */
    public function hasAttribute($name)
    {
        return $this->element->hasAttribute($name);
    }
}
