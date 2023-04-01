<?php
/**
 * DOMNode.php
 *
 * Class DOMNode
 *
 * @category   Contender
 * @subpackage ${NAMESPACE}
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/27
 */

namespace Contender\DummyMixin;

/**
 * Class DOMNode
 *
 * @category   Contender
 * @package    Contender\DummyMixin
 * @subpackage Contender\DummyMixin
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/28
 * @codeCoverageIgnore
 * @hideDoc
 */
class DOMNode
{
    /**
     * @var int
     * @read-only
     * Gets the type of the node. One of the predefined XML_xxx_NODE constants
     */
    public int $nodeType;
    /**
     * @var string
     * @read-only
     * Returns the most accurate name for the current node type
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.nodename
     */
    public string $nodeName;

    /**
     * @var string
     * The value of this node, depending on its type
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.nodevalue
     */
    public string $nodeValue;

    /**
     * @var string|null
     * @read-only
     * The namespace URI of this node, or NULL if it is unspecified.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.namespaceuri
     */
    public ?string $namespaceURI;

    /**
     * @var string|null
     * The namespace prefix of this node, or NULL if it is unspecified.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.prefix
     */
    public ?string $prefix;

    /**
     * @var string
     * @read-only
     * Returns the local part of the qualified name of this node.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.localname
     */
    public string $localName;

    /**
     * @var string|null
     * @read-only
     * The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.baseuri
     */
    public ?string $baseURI;

    /**
     * @var string
     * This attribute returns the text content of this node and its descendants.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.textcontent
     */
    public string $textContent;
}
