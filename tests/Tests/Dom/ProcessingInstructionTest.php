<?php
/**
 * ProcessingInstructionTest.php
 *
 * Class ProcessingInstructionTest
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
use Contender\Dom\ProcessingInstruction;
use PHPUnit\Framework\TestCase;

/**
 * Class ProcessingInstructionTest
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
 * @covers \Contender\Dom\Document::createProcessingInstruction
 * @covers \Contender\Dom\ProcessingInstruction
 * @covers \Contender\Service\Factory
 */
class ProcessingInstructionTest extends TestCase
{
    public function test_getPropertiesAttribute()
    {
        $document = Contender::loadStr('');
        $res = $document->createProcessingInstruction('xml-stylesheet', 'href="style.css" type="text/css"');

        $this->assertInstanceOf(ProcessingInstruction::class, $res);
        $this->assertEquals('xml-stylesheet', $res->target);
        $this->assertEquals('href="style.css" type="text/css"', $res->data);
        $this->assertEquals('<?xml-stylesheet href="style.css" type="text/css">', (string) $res);
    }
}
