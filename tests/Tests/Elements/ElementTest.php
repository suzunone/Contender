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

namespace Tests\Suzunone\Contender\Elements;

use Contender\Contender;
use Contender\Elements\NamedNodeMap;
use Contender\Elements\Node;
use PHPUnit\Framework\TestCase;

/**
 * Class GetterTest
 *
 * @category   Contender
 * @package    Tests\Suzunone\Contender\Elements
 * @subpackage Tests\Suzunone\Contender\Elements
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/22
 * @covers     \Contender\Contender
 * @covers     \Contender\Elements\Document
 * @covers     \Contender\Elements\Node
 * @covers     \Contender\Elements\Element
 * @covers     \Contender\Elements\Collection
 * @covers     \Contender\Elements\Traits\GetterTrait
 * @covers     \Contender\Elements\Traits\MutationTrait
 * @covers     \Contender\Elements\Traits\ElementTrait
 * @covers     \Contender\Elements\Traits\NodeTrait
 * @covers     \Contender\Elements\NamedNodeMap
 * @covers     \Contender\Elements\Factory
 */
class ElementTest extends TestCase
{
    public function dataProvider()
    {
        return [
            ['<div>
<a href="#aaa" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">
here</a></div>'],
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
        $this->assertInstanceOf(Node::class, $element->attributes->getNamedItem('href'));
        $this->assertNull($element->attributes->getNamedItem('href2'));
    }
}
