<?php
/**
 * DOMCharacterData.php
 *
 * Class DOMCharacterData
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
 */

namespace Contender\DummyMixin;

/**
 * Class DOMCharacterData
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
class DOMCharacterData extends DOMNode
{
    /**
     * @var string
     * The contents of the node.
     * @link https://php.net/manual/en/class.domcharacterdata.php#domcharacterdata.props.data
     */
    public string $data;

    /**
     * @var int
     * @read-only
     * The length of the contents.
     * @link https://php.net/manual/en/class.domcharacterdata.php#domcharacterdata.props.length
     */
    public int $length;
}
