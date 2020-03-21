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

use DOMNode;
use Contender\Elements\Traits\ElementTrait;
use DOMDocument;

/**
 * Class Node
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
 * @property-read bool isElementtrue if this node is an XML_ELEMENT_NODE
 * @property-read bool is_elementtrue if this node is an XML_ELEMENT_NODE
 * @property-read bool isAttrtrue if this node is an XML_ATTRIBUTE_NODE
 * @property-read bool is_attrtrue if this node is an XML_ATTRIBUTE_NODE
 * @property-read bool isTexttrue if this node is an XML_TEXT_NODE
 * @property-read bool is_texttrue if this node is an XML_TEXT_NODE
 * @property-read bool isCharacterDatatrue if this node is an XML_CDATA_SECTION_NODE
 * @property-read bool is_character_datatrue if this node is an XML_CDATA_SECTION_NODE
 * @property-read bool isEntityReferencetrue if this node is an XML_ENTITY_REF_NODE
 * @property-read bool is_entity_referencetrue if this node is an XML_ENTITY_REF_NODE
 * @property-read bool isEntitytrue if this node is an XML_ENTITY_NODE
 * @property-read bool is_entitytrue if this node is an XML_ENTITY_NODE
 * @property-read bool isProcessingInstructiontrue if this node is an XML_PI_NODE
 * @property-read bool is_processing_instructiontrue if this node is an XML_PI_NODE
 * @property-read bool isCommenttrue if this node is an XML_COMMENT_NODE
 * @property-read bool is_commenttrue if this node is an XML_COMMENT_NODE
 * @property-read bool isDocumenttrue if this node is an XML_DOCUMENT_NODE
 * @property-read bool is_documenttrue if this node is an XML_DOCUMENT_NODE
 * @property-read bool isDocumentTypetrue if this node is an XML_DOCUMENT_TYPE_NODE
 * @property-read bool is_document_typetrue if this node is an XML_DOCUMENT_TYPE_NODE
 * @property-read bool isDocumentFragmenttrue if this node is an XML_DOCUMENT_FRAG_NODE
 * @property-read bool is_document_fragmenttrue if this node is an XML_DOCUMENT_FRAG_NODE
 * @property-read bool isNotationtrue if this node is an XML_NOTATION_NODE
 * @property-read bool is_notationtrue if this node is an XML_NOTATION_NODE
 * @property-read string innerTextThe value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.
 * @property-read string inner_textThe value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.
 * @property-read string textContentThe text content of this node and its descendants.
 * @property-read string text_contentThe text content of this node and its descendants.
 * @property string innerHTMLThe Element property innerHTML gets or sets the HTML or XML markup contained within the element
 * @property string inner_h_t_m_lThe Element property innerHTML gets or sets the HTML or XML markup contained within the element
 * @property-read string outerHTMLThe outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_h_t_m_lThe outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property string innerXMLThe Element property innerXML gets or sets the HTML or XML markup contained within the element
 * @property string inner_x_m_lThe Element property innerXML gets or sets the HTML or XML markup contained within the element
 * @property-read string outerXMLThe outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_x_m_lThe outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string nodePathGets an XPath location path for the node
 * @property-read string node_pathGets an XPath location path for the node
 * @property-read int lineNoGet line number for a node
 * @property-read int line_noGet line number for a node
 * @property-read \Contender\Elements\Collection childrenThat contains all children of this node. If there are no children, this is an empty {@link \Contender\Elements\Collection}.
 * @property-read \Contender\Elements\Collection childNodesAliases to children
 * @property-read \Contender\Elements\Collection child_nodesAliases to children
 * @property-read \Contender\Elements\Node firstChildGet a first child node.
 * @property-read \Contender\Elements\Node first_childGet a first child node.
 * @property-read \Contender\Elements\Node lastChildGet a last child node.
 * @property-read \Contender\Elements\Node last_childGet a last child node.
 * @property-read \Contender\Elements\Node|null firstElementChildThe first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null first_element_childThe first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null parentNodeThe parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null parent_nodeThe parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null lastElementChildThe last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null last_element_childThe last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null previousElementSiblingThe node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null previous_element_siblingThe node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null nextElementSiblingThe node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null next_element_siblingThe node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null nextSiblingAlias to next_element_sibling
 * @property-read \Contender\Elements\Node|null next_siblingAlias to next_element_sibling
 * @property-read int nodeTypeGets the type of the node.
 * @property-read int node_typeGets the type of the node.
 * @property-read string nodeNameReturns the most accurate name for the current node type
 * @property-read string node_nameReturns the most accurate name for the current node type
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
        return $this->outerHTML;
    }
}
