<?php
/**
 * DOMProcessingInstruction.php
 *
 * Class DOMProcessingInstruction
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
 * @since      2020/03/29
 */

namespace Contender\DummyMixin;

/**
 * Class DOMProcessingInstruction
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
 * @since      2020/03/29
 * @codeCoverageIgnore
 * @hideDoc
 */
class DOMProcessingInstruction extends DOMNode
{
    /**
     * @since 5.0
     *
     * @read-only
     * @var string
     * @link https://php.net/manual/en/class.domprocessinginstruction.php#domprocessinginstruction.props.target
     */
    public $target;

    /**
     * @since 5.0
     *
     * @var string
     * @link https://php.net/manual/en/class.domprocessinginstruction.php#domprocessinginstruction.props.data
     */
    public $data;
}
