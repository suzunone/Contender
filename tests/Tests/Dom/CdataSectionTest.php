<?php
/**
 * CdataSectionTest.php
 *
 * Class CdataSectionTest
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
 * @since      2020/03/30
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\CdataSection;
use PHPUnit\Framework\TestCase;

/**
 * Class CdataSectionTest
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
 * @since      2020/03/30
 * @covers \Contender\Dom\CdataSection
 * @covers \Contender\Service\Factory
 */
class CdataSectionTest extends TestCase
{
    public function test_get()
    {
        $document = Contender::loadStr('<div></div>');
        $cdata = $document->createCDATASection('○○○○○○○○○');

        $document->querySelector('div')->appendChild($cdata);

        $this->assertEquals('<div>○○○○○○○○○</div>', $document->body->innerHTML);
    }
}
