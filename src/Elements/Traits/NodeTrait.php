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
 */
trait NodeTrait
{
    /**
     * if call attr('name')
     * Alias getAttr()
     *
     * if call attr('name', 'value')
     * Alias setAttr()
     *
     * @param ...$name
     * @return string|null
     */
    public function attr(...$name): ?string
    {
        if (count($name) === 1) {
            return $this->getAttr($name[0]);
        }

        $this->setAttr($name[0], $name[1]);

        return null;
    }

    /**
     * get tag attribute for element.
     *
     * @param string $name
     * @return mixed
     */
    public function getAttr(string $name)
    {
        return $this->element->getAttribute($name);
    }

    /**
     * set tag attribute for element.
     *
     * @param string $name
     * @param string $value
     */
    public function setAttr(string $name, string $value)
    {
        $this->element->setAttribute($name, $value);
    }

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

        return new Node($element);
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

        return new Node($res);
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

        return new Node($res);
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
        return new Node($this->element->cloneNode($deep));
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
        return $this->document()->hasChildNodes();
    }


    /**
     * Removes child from list of children
     *
     * @param \Contender\Elements\Node $oldnode
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild
     */
    public function removeChild(Node $oldnode):Node
    {
        return new Node($this->document()->removeChild($oldnode->nativeNode()));
    }

    /**
     * Replaces a child
     *
     * @param \Contender\Elements\Node $newnode
     * @param \Contender\Elements\Node $oldnode
     * @return \Contender\Elements\Node
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild
     */
    public function replaceChild(Node $newnode , Node $oldnode ):Node
    {
        return new Node($this->document()->replaceChild($newnode->nativeNode(), $oldnode->nativeNode()));
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
