<?php
/**
 * NodeTrait.php
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Elements\Traits;

use Contender\Elements\Factory;
use Contender\Elements\Node;
use DOMNode;

/**
 * Trait NodeTrait
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @hideDoc
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
 * @property-read \Contender\Elements\Node|null firstChild Get a first child node.
 * @property-read \Contender\Elements\Node|null first_child Get a first child node.
 * @property-read \Contender\Elements\Node|null lastChild Get a last child node.
 * @property-read \Contender\Elements\Node|null last_child Get a last child node.
 * @property-read \Contender\Elements\Element|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null parentNode The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null parent_node The parent of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null lastElementChild The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Element|null last_element_child The last child of this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Elements\Node|null nextSibling Alias to next_element_sibling
 * @property-read \Contender\Elements\Node|null next_sibling Alias to next_element_sibling
 * @property-read \Contender\Elements\Document ownerDocument The {@link \Contender\Elements\Document} object associated with this node
 * @property-read \Contender\Elements\Document owner_document The {@link \Contender\Elements\Document} object associated with this node
 * @property-read string nodeName Returns the most accurate name for the current node type
 * @property-read string node_name Returns the most accurate name for the current node type
 * @property mixed|string|int parameter
 */
trait NodeTrait
{
    use GetterTrait;
    use SelectorTrait;

    /**
     * Create {@link \Contender\Elements\Node} From \DomNode
     *
     * @param \DOMNode|null $element
     * @return Node|null
     * @hideDoc
     */
    public function createNode(?DOMNode $element): ?Node
    {
        if ($element === null) {
            return $element;
        }

        return Factory::get($element, $this);
    }

    /**
     * Adds a node to the end of the list of children of a specified parent node.
     *
     * @param \Contender\Elements\Node $node
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild
     * @see \Contender\Elements\Document::createElement()
     */
    public function appendChild(Node $node)
    {
        $res = $this->element->appendChild($node->nativeNode());

        return Factory::get($res, $this);
    }

    /**
     *  Inserts a node before a reference node as a child of a specified parent node.
     *
     * @param \Contender\Elements\Node $node
     * @param \Contender\Elements\Node|null $referenceNode
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore
     * @see \Contender\Elements\Document::createElement()
     */
    public function insertBefore(Node $node, ?Node $referenceNode = null)
    {
        if ($referenceNode) {
            $res = $this->element->insertBefore($node->nativeNode(), $referenceNode->nativeNode());
        } else {
            $res = $this->element->insertBefore($node->nativeNode());
        }

        return Factory::get($res, $this);
    }

    /**
     * Normalizes the node
     *
     * Remove empty text nodes and merge adjacent text nodes in this node and all its children.
     *
     * @see https://www.php.net/manual/en/domnode.normalize.php
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize
     */
    public function normalize()
    {
        $this->element->normalize();
    }

    /**
     * Clones a node
     *
     * Creates a copy of the node.
     *
     * @param bool $deep Indicates whether to copy all descendant nodes. This parameter is defaulted to FALSE.
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode
     */
    public function cloneNode(bool $deep = false): Node
    {
        return Factory::get($this->element->cloneNode($deep), $this);
    }

    /**
     * Checks if node has children
     *
     * This function checks if the node has children.
     *
     * @return bool
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes
     */
    public function hasChildNodes(): bool
    {
        return $this->element->hasChildNodes();
    }

    /**
     * Removes child from list of children
     *
     * @param \Contender\Elements\Node $oldnode
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild
     */
    public function removeChild(Node $oldnode): Node
    {
        return Factory::get($this->element->removeChild($oldnode->nativeNode()), $this);
    }

    /**
     * Replaces a child
     *
     * @param \Contender\Elements\Node $newnode
     * @param \Contender\Elements\Node $oldnode
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild
     */
    public function replaceChild(Node $newnode, Node $oldnode): Node
    {
        $res = $this->element->replaceChild($newnode->nativeNode(), $oldnode->nativeNode());

        return Factory::get($res, $this);
    }

    /**
     * @return DOMNode
     * @hideDoc
     */
    public function nativeNode()
    {
        return $this->element;
    }
}
