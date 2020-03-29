<?php
/**
 * NamedNodeMapTest.php
 *
 * Class NamedNodeMapTest
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
 * @since      2020/03/29
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\Attr;
use Contender\Dom\Document;
use Contender\Dom\NamedNodeMap;
use PHPUnit\Framework\TestCase;

/**
 * Class NamedNodeMapTest
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
 * @since      2020/03/29
 * @covers     \Contender\Dom\NamedNodeMap
 * @covers     \Contender\Service\Factory
 * @covers     \Contender\Dom\Attr
 */
class NamedNodeMapTest extends TestCase
{
    public function dataProvider()
    {
        return [
            [
                Contender::loadStr('<div><a href="#aaa" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">here</a><p class="plain-text"></p><ul class="user-list"><li class="li-1"></li></ul></div>'),
            ],
        ];
    }

    /**
     * @param $document
     * @dataProvider dataProvider
     */
    public function testGetNamedItem(Document $document)
    {
        $element = $document->getElementsByTagName('a')->first();

        $this->assertNull($element->attributes->getNamedItem('href2'));

        $this->assertInstanceOf(NamedNodeMap::class, $element->attributes);
        $attr = $element->attributes->getNamedItem('href');
        $this->assertInstanceOf(Attr::class, $attr);
        $this->assertEquals('href', $attr->name);
        $this->assertEquals('#aaa', $attr->value);
        $this->assertEquals('<a href="#aaa" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">here</a>', $attr->ownerElement->outerXML);
    }
}
