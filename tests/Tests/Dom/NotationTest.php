<?php
/**
 * NotationTest.php
 *
 * Class NotationTest
 *
 * @category   Contender
 * @package    Tests\Suzunone\Contender\Dom
 * @subpackage Tests\Suzunone\Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/04/07
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\Notation;
use PHPUnit\Framework\TestCase;

/**
 * Class NotationTest
 *
 * @category   Contender
 * @package    Tests\Suzunone\Contender\Dom
 * @subpackage Tests\Suzunone\Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/04/07
 * @covers \Contender\Dom\Notation
 * @covers \Contender\Service\Factory
 */
class NotationTest extends TestCase
{
    public function test_Entity()
    {
        $xml = Contender::loadStr('<!DOCTYPE code [
  <!ELEMENT code (#PCDATA)>
  <!NOTATION vrml PUBLIC "VRML 1.0">
  <!ATTLIST code lang NOTATION (vrml) #REQUIRED>
]>
<code lang="vrml">Some VRML instructions</code>', [Contender::OPTION_FROM_XML_ENABLE]);

        /**
         * @var \Contender\Dom\DocumentType $type
         */
        $type = $xml->children->first();

        $notation = $type->notations->first();
        $this->assertInstanceOf(Notation::class, $notation);
    }
}
