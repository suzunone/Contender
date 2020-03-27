<?php
/**
 * DomAttr.php
 *
 * Class DomAttr
 *
 * @category   Contender
 * @package    Contender\Elements\DummyMixin
 * @subpackage Contender\Elements\DummyMixin
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/27
 */

namespace Contender\Elements\DummyMixin;

class DomAttr extends DOMNode
{
    /**
     * @var string
     * The name of the attribute
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.name
     */
    public $name;

    /**
     * @var bool
     * Not implemented yet, always is NULL
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.schematypeinfo
     */
    public $schemaTypeInfo;

    /**
     * @var bool
     * Not implemented yet, always is NULL
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.specified
     */
    public $specified;

    /**
     * @var string
     * The value of the attribute
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.value
     */
    public $value;
}
