<?php
/**
 * DomAttr.php
 *
 * Class DomAttr
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
 * @since      2020/03/27
 */

namespace Contender\DummyMixin;

/**
 * Class DomAttr
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
class DomAttr extends DOMNode
{
    /**
     * @var string
     * @read-only
     * The name of the attribute
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.name
     */
    public string $name;

    /**
     * @var bool
     * @read-only
     * Not implemented yet, always is NULL
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.schematypeinfo
     */
    public bool $schemaTypeInfo;

    /**
     * @var bool
     * @read-only
     * Not implemented yet, always is NULL
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.specified
     */
    public bool $specified;

    /**
     * @var string
     * The value of the attribute
     * @link https://php.net/manual/en/class.domattr.php#domattr.props.value
     */
    public string $value;
}
