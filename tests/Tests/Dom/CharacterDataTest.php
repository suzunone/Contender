<?php
/**
 * CharacterDataTest.php
 *
 * Class CharacterDataTest
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
 * @since      2020/03/28
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\Text;
use PHPUnit\Framework\TestCase;

/**
 * Class CharacterDataTest
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
 * @since      2020/03/28
 * @covers \Contender\Dom\CharacterData
 */
class CharacterDataTest extends TestCase
{
    public function dataProvider()
    {
        return [
            [Contender::loadStr('<sample>FooBar</sample>')->find('sample')->first()->firstChild],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param \Contender\Dom\Text $text
     */
    public function testSubstringData(Text $text)
    {
        $this->assertEquals('oBa', $text->substringData(2, 3));
    }

    /**
     * @dataProvider dataProvider
     * @param \Contender\Dom\Text $text
     */
    public function testInsertData(Text $text)
    {
        $text->insertData(3, '○■■');
        $this->assertEquals('Foo○■■Bar', (string) $text);
    }

    /**
     * @dataProvider dataProvider
     * @param \Contender\Dom\Text $text
     */
    public function testDeleteData(Text $text)
    {
        $text->deleteData(3, 2);
        $this->assertEquals('Foor', (string) $text);
    }

    /**
     * @dataProvider dataProvider
     * @param \Contender\Dom\Text $text
     */
    public function testReplaceData(Text $text)
    {
        $text->replaceData(3, 2, 'o');
        $this->assertEquals('Fooor', (string) $text);
    }

    /**
     * @dataProvider dataProvider
     * @param \Contender\Dom\Text $text
     */
    public function testAppendData(Text $text)
    {
        $text->appendData(' Neko daisuki');
        $this->assertEquals('FooBar Neko daisuki', (string) $text);
    }
}
