<?php
/**
 * NodeTrait.php
 *
 * @category   Contender
 * @package    Contender\Dom\Traits
 * @subpackage Contender\Dom\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Dom\Traits;

use Contender\Service\Factory;
use Contender\Dom\Node;
use DOMNode;

/**
 * Trait NodeTrait
 *
 * @category   Contender
 * @package    Contender\Dom\Traits
 * @subpackage Contender\Dom\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @hideDoc
 * @property-read \Contender\Dom\NodeList childNodes Aliases to children
 * @property-read \Contender\Dom\NodeList child_nodes Aliases to children
 * @property-read \Contender\Dom\NodeList children That contains all children of this node. If there are no children, this is an empty {@link \Contender\Dom\NodeList}.
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
 * @property-read \Contender\Dom\Node|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read string nodePath Gets an XPath location path for the node
 * @property-read string node_path Gets an XPath location path for the node
 * @property-read string outerHTML The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outerXML The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_h_t_m_l The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read string outer_x_m_l The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
 * @property-read \Contender\Dom\Document ownerDocument The {@link \Contender\Dom\Document} object associated with this node
 * @property-read \Contender\Dom\Document owner_document The {@link \Contender\Dom\Document} object associated with this node
 * @property mixed|string|int parameter
 * @property-read \Contender\Dom\Node|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read \Contender\Dom\Node|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read string textContent The text content of this node and its descendants.
 * @property-read string text_content The text content of this node and its descendants.
 */
trait NodeTrait
{
    use GetterTrait;
    use SelectorTrait;

    /**
     * Adds a node to the end of the list of children of a specified parent node.
     *
     * @param \Contender\Dom\Node $node
     * @return \Contender\Dom\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild
     * @see \Contender\Dom\Document::createElement()
     */
    public function appendChild(Node $node): Node
    {
        $res = $this->element->appendChild($node->nativeNode());

        return Factory::get($res, $this);
    }

    /**
     * @return DOMNode
     * @hideDoc
     */
    public function nativeNode(): DOMNode
    {
        return $this->element;
    }

    /**
     *  Inserts a node before a reference node as a child of a specified parent node.
     *
     * @param \Contender\Dom\Node $node
     * @param \Contender\Dom\Node|null $referenceNode
     * @return \Contender\Dom\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore
     * @see \Contender\Dom\Document::createElement()
     */
    public function insertBefore(Node $node, ?Node $referenceNode = null): Node
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
    public function normalize(): void
    {
        $this->element->normalize();
    }

    /**
     * Clones a node
     *
     * Creates a copy of the node.
     *
     * @param bool $deep Indicates whether to copy all descendant nodes. This parameter is defaulted to FALSE.
     * @return \Contender\Dom\Node
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
     * @param \Contender\Dom\Node $oldnode
     * @return \Contender\Dom\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild
     */
    public function removeChild(Node $oldnode): Node
    {
        return Factory::get($this->element->removeChild($oldnode->nativeNode()), $this);
    }

    /**
     * Replaces a child
     *
     * @param \Contender\Dom\Node $newnode
     * @param \Contender\Dom\Node $oldnode
     * @return \Contender\Dom\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild
     */
    public function replaceChild(Node $newnode, Node $oldnode): Node
    {
        $res = $this->element->replaceChild($newnode->nativeNode(), $oldnode->nativeNode());

        return Factory::get($res, $this);
    }
}
