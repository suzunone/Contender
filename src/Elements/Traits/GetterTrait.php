<?php
/**
 * GetterTrait.php
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

use Contender\Contender;
use Contender\Elements\Collection;
use Contender\Elements\Document;
use Contender\Elements\Factory;
use Contender\Elements\Node;
use DOMDocument;
use DOMNode;
use DOMNodeList;

/**
 * Trait GetterTrait
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
 * @mixin \Contender\Elements\Node
 * @mixin \Contender\Elements\Document
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
 * @property-read self|null firstElementChild The first child of this node. If there is no such node, this returns NULL.
 * @property-read self|null first_element_child The first child of this node. If there is no such node, this returns NULL.
 * @property-read self|null parentNode The parent of this node. If there is no such node, this returns NULL.
 * @property-read self|null parent_node The parent of this node. If there is no such node, this returns NULL.
 * @property-read self|null lastElementChild The last child of this node. If there is no such node, this returns NULL.
 * @property-read self|null last_element_child The last child of this node. If there is no such node, this returns NULL.
 * @property-read self|null previousElementSibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read self|null previous_element_sibling The node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read self|null nextElementSibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read self|null next_element_sibling The node immediately following this node. If there is no such node, this returns NULL.
 * @property-read self|null nextSibling Alias to next_element_sibling
 * @property-read self|null next_sibling Alias to next_element_sibling
 * @property-read int nodeType Gets the type of the node.
 * @property-read int node_type Gets the type of the node.
 * @property-read string nodeName Returns the most accurate name for the current node type
 * @property-read string node_name Returns the most accurate name for the current node type
 */
trait GetterTrait
{
    use MutationTrait;

    /**
     * @return bool true if this node is an XML_ELEMENT_NODE
     * @hideDoc
     */
    public function getIsElementAttribute(): bool
    {
        return $this->nodeType === XML_ELEMENT_NODE;
    }

    /**
     * @return bool true if this node is an XML_ATTRIBUTE_NODE
     * @hideDoc
     */
    public function getIsAttrAttribute(): bool
    {
        return $this->nodeType === XML_ATTRIBUTE_NODE;
    }

    /**
     * @return bool true if this node is an XML_TEXT_NODE
     * @hideDoc
     */
    public function getIsTextAttribute(): bool
    {
        return $this->nodeType === XML_TEXT_NODE;
    }

    /**
     * @return bool true if this node is an XML_CDATA_SECTION_NODE
     * @hideDoc
     */
    public function getIsCharacterDataAttribute(): bool
    {
        return $this->nodeType === XML_CDATA_SECTION_NODE;
    }

    /**
     * @return bool true if this node is an XML_ENTITY_REF_NODE
     * @hideDoc
     */
    public function getIsEntityReferenceAttribute(): bool
    {
        return $this->nodeType === XML_ENTITY_REF_NODE;
    }

    /**
     * @return bool true if this node is an XML_ENTITY_NODE
     * @hideDoc
     */
    public function getIsEntityAttribute(): bool
    {
        return $this->nodeType === XML_ENTITY_NODE;
    }

    /**
     * @return bool true if this node is an XML_PI_NODE
     * @hideDoc
     */
    public function getIsProcessingInstructionAttribute(): bool
    {
        return $this->nodeType === XML_PI_NODE;
    }

    /**
     * @return bool true if this node is an XML_COMMENT_NODE
     * @hideDoc
     */
    public function getIsCommentAttribute(): bool
    {
        return $this->nodeType === XML_COMMENT_NODE;
    }

    /**
     * @return bool true if this node is an XML_DOCUMENT_NODE
     * @hideDoc
     */
    public function getIsDocumentAttribute(): bool
    {
        return $this->nodeType === XML_DOCUMENT_NODE;
    }

    /**
     * @return bool true if this node is an XML_DOCUMENT_TYPE_NODE
     * @hideDoc
     */
    public function getIsDocumentTypeAttribute(): bool
    {
        return $this->nodeType === XML_DOCUMENT_TYPE_NODE;
    }

    /**
     * @return bool true if this node is an XML_DOCUMENT_FRAG_NODE
     * @hideDoc
     */
    public function getIsDocumentFragmentAttribute(): bool
    {
        return $this->nodeType === XML_DOCUMENT_FRAG_NODE;
    }

    /**
     * @return bool true if this node is an XML_NOTATION_NODE
     * @hideDoc
     */
    public function getIsNotationAttribute(): bool
    {
        return $this->nodeType === XML_NOTATION_NODE;
    }


    /**
     * @return string The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.
     * @hideDoc
     */
    public function getInnerTextAttribute(): string
    {
        return (string) $this->element->nodeValue;
    }

    /**
     * @return string The text content of this node and its descendants.
     * @hideDoc
     */
    public function getTextContentAttribute(): string
    {
        return (string) $this->element->textContent;
    }

    /**
     * @return string The Element property innerHTML gets or sets the HTML or XML markup contained within the element
     * @hideDoc
     */
    public function getInnerHTMLAttribute(): string
    {
        if (!$this->element->childNodes) {
            // @codeCoverageIgnoreStart
            return $this->innerText;
            // @codeCoverageIgnoreEnd
        }

        $res = '';
        foreach ($this->element->childNodes as $node) {
            $res .= $node->ownerDocument->saveHtml($node);
        }

        return str_replace(' ', '&nbsp;', $res);
    }

    /**
     * @param string $html
     * @return \DOMNode
     */
    protected function htmlToNode(string $html): DOMNode
    {
        $newNode = new DOMDocument();
        $newNode->loadHtml($html, Contender::DEFAULT_LIBXML_OPTION);
        $newNode = $newNode->getElementsByTagName('body')->item(0)->childNodes->item(0);

        return $this->document()->importNode($newNode, true);
    }

    /**
     * @param string $html
     * @hideDoc
     */
    public function setInnerHTMLAttribute(string $html): void
    {
        $newNode = $this->htmlToNode($html);

        while ($this->element->childNodes->length !== 0) {
            $this->element->removeChild($this->element->childNodes->item($this->element->childNodes->length - 1));
        }

        $this->element->appendChild($newNode);
    }

    /**
     * @param string $value
     * @hideDoc
     */
    public function setInnerXMLAttribute(string $value)
    {
        $this->setInnerHTMLAttribute($value);
    }

    /**
     * @return string The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
     * @hideDoc
     */
    public function getOuterHTMLAttribute(): string
    {
        if ($this instanceof Document) {
            $res = $this->element->saveHtml();
        } else {
            $res = $this->element->ownerDocument->saveHtml($this->element);
        }

        return str_replace(' ', '&nbsp;', $res);
    }

    /**
     * @return string The Element property innerXML gets or sets the HTML or XML markup contained within the element
     * @hideDoc
     */
    public function getInnerXMLAttribute(): string
    {
        if (!$this->element->childNodes) {
            // @codeCoverageIgnoreStart
            return $this->innerText;
            // @codeCoverageIgnoreEnd
        }

        $res = '';
        foreach ($this->element->childNodes as $node) {
            $res .= $node->ownerDocument->saveXML($node, LIBXML_NOXMLDECL);
        }

        return str_replace(' ', '&nbsp;', $res);
    }

    /**
     * @return string The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
     * @hideDoc
     */
    public function getOuterXMLAttribute(): string
    {
        if ($this instanceof Document) {
            $res = $this->element->saveXml();
        } else {
            $res = $this->element->ownerDocument->saveXml($this->element);
        }

        return $res;
    }

    /**
     * @return string Gets an XPath location path for the node
     * @hideDoc
     */
    public function getNodePathAttribute(): string
    {
        return $this->element->getNodePath();
    }

    /**
     * @return int Get line number for a node
     * @hideDoc
     */
    public function getLineNoAttribute(): int
    {
        return $this->element->getLineNo();
    }

    /**
     * @return \Contender\Elements\Collection That contains all children of this node. If there are no children, this is an empty {@link \Contender\Elements\Collection}.
     * @hideDoc
     */
    public function getChildrenAttribute(): Collection
    {
        if ($this->element->childNodes instanceof DOMNodeList) {
            return Factory::get($this->element->childNodes, $this);
        }

        return Collection::make();
    }

    /**
     * @return \Contender\Elements\Collection Aliases to children
     * @hideDoc
     */
    public function getChildNodesAttribute(): Collection
    {
        return $this->children;
    }

    /**
     * @return \Contender\Elements\Node Get a first child node.
     * @hideDoc
     */
    public function getFirstChildAttribute(): Node
    {
        return $this->children->first();
    }

    /**
     * @return \Contender\Elements\Node Get a last child node.
     * @hideDoc
     */
    public function getLastChildAttribute(): Node
    {
        return $this->children->last();
    }

    /**
     * @return static|null The first child of this node. If there is no such node, this returns NULL.
     * @hideDoc
     */
    public function getFirstElementChildAttribute(): ?self
    {
        return $this->createNode($this->element->firstChild);
    }

    /**
     * @return static|null The parent of this node. If there is no such node, this returns NULL.
     * @hideDoc
     */
    public function getParentNodeAttribute(): ?self
    {
        return $this->createNode($this->element->parentNode);
    }

    /**
     * @return static|null The last child of this node. If there is no such node, this returns NULL.
     * @hideDoc
     */
    public function getLastElementChildAttribute(): ?self
    {
        return $this->createNode($this->element->lastChild);
    }

    /**
     * @return static|null The node immediately preceding this node. If there is no such node, this returns NULL.
     * @hideDoc
     */
    public function getPreviousElementSiblingAttribute(): ?self
    {
        return $this->createNode($this->element->previousSibling);
    }

    /**
     * @return static|null The node immediately following this node. If there is no such node, this returns NULL.
     * @hideDoc
     */
    public function getNextElementSiblingAttribute(): ?self
    {
        return $this->createNode($this->element->nextSibling);
    }

    /**
     * @return static|null Alias to next_element_sibling
     * @hideDoc
     */
    public function getNextSiblingAttribute(): ?self
    {
        return $this->getNextElementSiblingAttribute();
    }

    /**
     * @return int Gets the type of the node.
     * @hideDoc
     */
    public function getNodeTypeAttribute(): int
    {
        return $this->element->nodeType;
    }

    /**
     * @return string Returns the most accurate name for the current node type
     * @hideDoc
     */
    public function getNodeNameAttribute(): string
    {
        return $this->element->nodeName;
    }
}
