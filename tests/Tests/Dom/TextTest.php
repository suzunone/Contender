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
 * @covers     \Contender\Dom\Text
 */
class TextTest extends TestCase
{

    /**
     * @return \Contender\Dom\Node|null
     */
    public function test_getTextAttribute()
    {
        $element = Contender::loadStr('<sample> FooBar</sample>')->find('sample')->first();
        $text = $element->firstChild;

        $this->assertInstanceOf(Text::class, $text);

        return $text;
    }

    /**
     * @param \Contender\Dom\Text $text
     * @depends test_getTextAttribute
     * @return \Contender\Dom\Text
     */
    public function test_splitText(Text $text)
    {
        $splitText = $text->splitText(4);
        $this->assertInstanceOf(Text::class, $splitText);

        $this->assertEquals('Bar', $splitText->data);
        $this->assertEquals(' Foo', $text->data);

        return $text;
    }


    /**
     * @param \Contender\Dom\Text $text
     * @depends test_splitText
     */
    public function test_isWhitespaceInElementContent(Text $text)
    {
        $isWhitespaceInElementContent = $text->isWhitespaceInElementContent();
        $this->assertFalse($isWhitespaceInElementContent);
        $text->splitText(1);
        $isWhitespaceInElementContent = $text->isWhitespaceInElementContent();
        $this->assertTrue($isWhitespaceInElementContent);
    }
}
