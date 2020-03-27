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

class DOMElement extends DOMNode
{
    /**
     * @var bool
     * Not implemented yet, always return NULL
     * @link  https://php.net/manual/en/class.domelement.php#domelement.props.schematypeinfo
     */
    public $schemaTypeInfo;

    /**
     * @var string
     * The element name
     * @link  https://php.net/manual/en/class.domelement.php#domelement.props.tagname
     */
    public $tagName;
}
