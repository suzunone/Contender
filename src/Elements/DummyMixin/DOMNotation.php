<?php
/**
 * DOMNotation.php
 *
 * Class DOMNotation
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
 * @since      2020/03/28
 */

namespace Contender\Elements\DummyMixin;

/**
 * Class DOMNotation
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
 * @since      2020/03/28
 * @see \DOMNotation
 */
class DOMNotation extends DOMNode
{
    /**
     * @var string
     * @since 5.0
     *
     * @link https://php.net/manual/en/class.domnotation.php#domnotation.props.publicid
     */
    public $publicId;

    /**
     * @var string
     * @since 5.0
     *
     * @link https://php.net/manual/en/class.domnotation.php#domnotation.props.systemid
     */
    public $systemId;
}
