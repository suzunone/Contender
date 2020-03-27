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

namespace Contender\Elements\DummyMixin;
class DOMNode
{
    /**
     * @var string
     * Returns the most accurate name for the current node type
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.nodename
     */
    public $nodeName;

    /**
     * @var string
     * The value of this node, depending on its type
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.nodevalue
     */
    public $nodeValue;

    /**
     * @var string|null
     * The namespace URI of this node, or NULL if it is unspecified.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.namespaceuri
     */
    public $namespaceURI;

    /**
     * @var string|null
     * The namespace prefix of this node, or NULL if it is unspecified.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.prefix
     */
    public $prefix;

    /**
     * @var string
     * Returns the local part of the qualified name of this node.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.localname
     */
    public $localName;

    /**
     * @var string|null
     * The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.baseuri
     */
    public $baseURI;

    /**
     * @var string
     * This attribute returns the text content of this node and its descendants.
     * @link  https://php.net/manual/en/class.domnode.php#domnode.props.textcontent
     */
    public $textContent;

}