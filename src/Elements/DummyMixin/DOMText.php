<?php
/**
 * DOMText.php
 *
 * Class DOMText
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

class DOMText extends DOMCharacterData
{
    /**
     * Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.
     * @link https://php.net/manual/en/class.domtext.php#domtext.props.wholeText
     * @var string
     */
    public $wholeText;
}
