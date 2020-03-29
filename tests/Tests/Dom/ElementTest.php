<?php
/**
 * NodeTest.php
 *
 * @category   GitCommand
 * @package    Git-Live
 * @subpackage Core
 * @author     akito<akito-artisan@five-foxes.com>
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Git Live
 * @license    MIT
 * @version    GIT: $Id$
 * @link       https://github.com/Git-Live/git-live
 * @see        https://github.com/Git-Live/git-live
 * @since      2020/03/14
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\Attr;
use Contender\Dom\NamedNodeMap;
use Contender\Dom\Node;
use PHPUnit\Framework\TestCase;

/**
 * Class GetterTest
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
 * @since      2020/03/22
 * @covers     \Contender\Contender
 * @covers     \Contender\Dom\Node
 * @covers     \Contender\Dom\Element
 * @covers \Contender\Dom\Traits\ElementTrait
 */
class ElementTest extends TestCase
{
    public function dataProvider()
    {
        return [
            ['<div><a href="#aaa" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">here</a><p class="plain-text"></p><ul class="user-list"><li class="li-1"></li></ul></div>'],
        ];
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_getAttributeNames($html)
    {
        $document = Contender::loadStr($html);

        // enable
        $element = $document->getElementsByTagName('a')->first();

        $this->assertEquals('array', gettype($element->getAttributeNames()));

        $this->assertEquals([
            0 => 'href',
            1 => 'class',
            2 => 'id',
            3 => 'title',
            4 => 'aria-disabled',
        ], $element->getAttributeNames());
        $this->assertEquals($element->getAttributeNames(), iterator_to_array($element->getAttributeNamesGenerator()));

        // empty
        $element = $document->getElementsByTagName('div')->first();

        $this->assertEquals('array', gettype($element->getAttributeNames()));

        $this->assertEquals([
        ], $element->getAttributeNames());

        $this->assertEquals($element->getAttributeNames(), iterator_to_array($element->getAttributeNamesGenerator()));

        // empty2
        $element = $document->createElement('span');

        $this->assertEquals('array', gettype($element->getAttributeNames()));

        $this->assertEquals([
        ], $element->getAttributeNames());
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_attr($html)
    {
        $document = Contender::loadStr($html);

        // enable
        $element = $document->getElementsByTagName('a')->first();

        $this->assertEquals('#aaa', $element->attr('href'));

        $element->attr('href', '#bbb');
        $this->assertEquals('#bbb', $element->attr('href'));

        $this->assertEquals('<a href="#bbb" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">here</a>', $document->getElementsByTagName('a')->first()->outerXML);
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_hasAttribute($html)
    {
        $document = Contender::loadStr($html);

        $element = $document->getElementsByTagName('a')->first();

        $this->assertTrue($element->hasAttribute('href'));
        $this->assertFalse($element->hasAttribute('onClick'));
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_removeAttribute($html)
    {
        $document = Contender::loadStr($html);

        // enable
        $element = $document->getElementsByTagName('a')->first();
        $this->assertTrue($element->hasAttribute('href'));
        $element->removeAttribute('href');
        $this->assertFalse($element->hasAttribute('href'));
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_attaributes($html)
    {
        $document = Contender::loadStr($html);

        $element = $document->getElementsByTagName('div')->first();
        $this->assertInstanceOf(NamedNodeMap::class, $element->attributes);
        $this->assertCount(0, $element->attributes);
        $this->assertNull($element->attributes->getNamedItem('href2'));

        $element = $document->getElementsByTagName('a')->first();
        $this->assertInstanceOf(NamedNodeMap::class, $element->attributes);
        $this->assertCount(5, $element->attributes);
    }
}
