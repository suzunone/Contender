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
use Contender\Elements\Node;
use DOMDocument;

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
 * @mixin \Contender\Elements\Node
 * @mixin \Contender\Elements\Document
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
 * @property-read self|null firstElementChildThe first child of this node. If there is no such node, this returns NULL.
 * @property-read self|null first_element_childThe first child of this node. If there is no such node, this returns NULL.
 * @property-read self|null parentNodeThe parent of this node. If there is no such node, this returns NULL.
 * @property-read self|null parent_nodeThe parent of this node. If there is no such node, this returns NULL.
 * @property-read self|null lastElementChildThe last child of this node. If there is no such node, this returns NULL.
 * @property-read self|null last_element_childThe last child of this node. If there is no such node, this returns NULL.
 * @property-read self|null previousElementSiblingThe node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read self|null previous_element_siblingThe node immediately preceding this node. If there is no such node, this returns NULL.
 * @property-read self|null nextElementSiblingThe node immediately following this node. If there is no such node, this returns NULL.
 * @property-read self|null next_element_siblingThe node immediately following this node. If there is no such node, this returns NULL.
 * @property-read self|null nextSiblingAlias to next_element_sibling
 * @property-read self|null next_siblingAlias to next_element_sibling
 * @property-read int nodeTypeGets the type of the node.
 * @property-read int node_typeGets the type of the node.
 * @property-read string nodeNameReturns the most accurate name for the current node type
 * @property-read string node_nameReturns the most accurate name for the current node type
 */
trait GetterTrait
{
    use MutationTrait;

    /**
     * @return bool true if this node is an XML_ELEMENT_NODE
     */
    public function getIsElementAttribute(): bool
    {
        return $this->element->nodeType === XML_ELEMENT_NODE;
    }

    /**
     * @return bool true if this node is an XML_ATTRIBUTE_NODE
     */
    public function getIsAttrAttribute(): bool
    {
        return $this->element->nodeType === XML_ATTRIBUTE_NODE;
    }

    /**
     * @return bool true if this node is an XML_TEXT_NODE
     */
    public function getIsTextAttribute(): bool
    {
        return $this->element->nodeType === XML_TEXT_NODE;
    }

    /**
     * @return bool true if this node is an XML_CDATA_SECTION_NODE
     */
    public function getIsCharacterDataAttribute(): bool
    {
        return $this->element->nodeType === XML_CDATA_SECTION_NODE;
    }

    /**
     * @return bool true if this node is an XML_ENTITY_REF_NODE
     */
    public function getIsEntityReferenceAttribute(): bool
    {
        return $this->element->nodeType === XML_ENTITY_REF_NODE;
    }

    /**
     * @return bool true if this node is an XML_ENTITY_NODE
     */
    public function getIsEntityAttribute(): bool
    {
        return $this->element->nodeType === XML_ENTITY_NODE;
    }

    /**
     * @return bool true if this node is an XML_PI_NODE
     */
    public function getIsProcessingInstructionAttribute(): bool
    {
        return $this->element->nodeType === XML_PI_NODE;
    }

    /**
     * @return bool true if this node is an XML_COMMENT_NODE
     */
    public function getIsCommentAttribute(): bool
    {
        return $this->element->nodeType === XML_COMMENT_NODE;
    }

    /**
     * @return bool true if this node is an XML_DOCUMENT_NODE
     */
    public function getIsDocumentAttribute(): bool
    {
        return $this->element->nodeType === XML_DOCUMENT_NODE;
    }

    /**
     * @return bool true if this node is an XML_DOCUMENT_TYPE_NODE
     */
    public function getIsDocumentTypeAttribute(): bool
    {
        return $this->element->nodeType === XML_DOCUMENT_TYPE_NODE;
    }

    /**
     * @return bool true if this node is an XML_DOCUMENT_FRAG_NODE
     */
    public function getIsDocumentFragmentAttribute(): bool
    {
        return $this->element->nodeType === XML_DOCUMENT_FRAG_NODE;
    }

    /**
     * @return bool true if this node is an XML_NOTATION_NODE
     */
    public function getIsNotationAttribute(): bool
    {
        return $this->element->nodeType === XML_NOTATION_NODE;
    }

    /**
     * @param $name
     * @return string
     */
    public function getAttribute($name)
    {
        return $this->element->getAttribute($name);
    }

    /**
     * @param $name
     * @param $value
     */
    public function setAttribute($name, $value)
    {
        $this->element->setAttribute($name, $value);
    }

    /**
     * @param $name
     * @return bool
     */
    public function removeAttribute($name)
    {
        return $this->element->removeAttribute($name);
    }

    /**
     * @param $name
     * @return bool
     */
    public function hasAttribute($name)
    {
        return $this->element->hasAttribute($name);
    }

    /**
     * @return string The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.
     */
    public function getInnerTextAttribute(): string
    {
        return (string)$this->element->nodeValue;
    }

    /**
     * @return string The text content of this node and its descendants.
     */
    public function getTextContentAttribute(): string
    {
        return (string)$this->element->textContent;
    }

    /**
     * @return string The Element property innerHTML gets or sets the HTML or XML markup contained within the element
     */
    public function getInnerHTMLAttribute(): string
    {
        if (!$this->element->childNodes) {
            return $this->innerText;
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
    protected function htmlToNode(string $html): \DOMNode
    {
        $newNode = new DOMDocument();
        $newNode->loadHtml($html, Contender::DEFAULT_LIBXML_OPTION);
        $newNode = $newNode->getElementsByTagName('body')->item(0)->childNodes->item(0);

        return $this->document()->importNode($newNode, true);
    }

    /**
     * @param string $html
     */
    public function setInnerHTMLAttribute(string $html): void
    {
        $newNode = $this->htmlToNode($html);

        while ($this->element->childNodes->length > 1) {
            $this->element->removeChild($this->element->childNodes->item($this->element->childNodes->length - 1));
        }

        $this->element->replaceChild($newNode, $this->element->childNodes->item(0));
    }

    /**
     * @param string $value
     */
    public function setInnerXMLAttribute(string $value)
    {
        $this->setInnerHTMLAttribute($value);
    }

    /**
     * @return string The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
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
     */
    public function getInnerXMLAttribute(): string
    {
        if (!$this->element->childNodes) {
            return $this->innerText;
        }
        $res = '';
        foreach ($this->element->childNodes as $node) {
            $res .= $node->ownerDocument->saveXML($node, LIBXML_NOXMLDECL);
        }

        return str_replace(' ', '&nbsp;', $res);
    }

    /**
     * @return string The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.
     */
    public function getOuterXMLAttribute(): string
    {
        if ($this instanceof Document) {
            $res = $this->element->saveXml();
        } else {
            $res = $this->element->ownerDocument->saveXml($this->element);
        }
    }

    /**
     * @return string Gets an XPath location path for the node
     */
    public function getNodePathAttribute(): string
    {
        return $this->element->getNodePath();
    }

    /**
     * @return int Get line number for a node
     */
    public function getLineNoAttribute(): int
    {
        return $this->element->getLineNo();
    }

    /**
     * @return \Contender\Elements\Collection That contains all children of this node. If there are no children, this is an empty {@link \Contender\Elements\Collection}.
     */
    public function getChildrenAttribute(): Collection
    {
        if ($this->element->childNodes instanceof \DOMNodeList) {
            return Collection::makeByDOMNodeList($this->element->childNodes, $this);
        }

        return Collection::make();
    }

    /**
     * @return \Contender\Elements\Collection Aliases to children
     */
    public function getChildNodesAttribute(): Collection
    {
        return $this->children;
    }

    /**
     * @return \Contender\Elements\Node Get a first child node.
     */
    public function getFirstChildAttribute(): Node
    {
        return $this->children->first();
    }

    /**
     * @return \Contender\Elements\Node Get a last child node.
     */
    public function getLastChildAttribute(): Node
    {
        return $this->children->last();
    }

    /**
     * @return static|null The first child of this node. If there is no such node, this returns NULL.
     */
    public function getFirstElementChildAttribute(): ?self
    {
        return $this->createNode($this->element->firstChild);
    }

    /**
     * @return static|null The parent of this node. If there is no such node, this returns NULL.
     */
    public function getParentNodeAttribute(): ?self
    {
        return $this->createNode($this->element->parentNode);
    }

    /**
     * @return static|null The last child of this node. If there is no such node, this returns NULL.
     */
    public function getLastElementChildAttribute(): ?self
    {
        return $this->createNode($this->element->lastChild);
    }

    /**
     * @return static|null The node immediately preceding this node. If there is no such node, this returns NULL.
     */
    public function getPreviousElementSiblingAttribute(): ?self
    {
        return $this->createNode($this->element->previousSibling);
    }

    /**
     * @return static|null The node immediately following this node. If there is no such node, this returns NULL.
     */
    public function getNextElementSiblingAttribute(): ?self
    {
        return $this->createNode($this->element->nextSibling);
    }

    /**
     * @return static|null Alias to next_element_sibling
     */
    public function getNextSiblingAttribute(): ?self
    {
        return $this->next_element_sibling;
    }

    /**
     * @return int Gets the type of the node.
     */
    public function getNodeTypeAttribute(): int
    {
        return $this->element->nodeType;
    }

    /**
     * @return string Returns the most accurate name for the current node type
     */
    public function getNodeNameAttribute(): string
    {
        return $this->element->nodeName;
    }
}
