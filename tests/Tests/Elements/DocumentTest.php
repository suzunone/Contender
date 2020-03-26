<?php
/**
 * DocumentTest.php
 *
 * Class DocumentTest
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
 * @since      2020/03/26
 */

namespace Tests\Contender\Elements;

use Contender\Contender;
use PHPUnit\Framework\TestCase;

/**
 * Class DocumentTest
 *
 * @category   Contender
 * @package    Tests\Contender\Elements
 * @subpackage Tests\Contender\Elements
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/26
 * @covers \Contender\Elements\Document
 * @covers \Contender\Elements\Factory
 */
class DocumentTest extends TestCase
{
    public function dataProvider()
    {
        return [
            ['<div><a href="#aaa">here</a><p class="plain-text"></p><ul class="user-list"><li class="li-1"></li></ul></div>'],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateCDATASection($html)
    {
        $document = Contender::loadStr($html);
        $tag = $document->getElementsByTagName('div')->first();

        $tag->insertBefore($document->createCDATASection('Example Data'));

        $this->assertEquals('<div>
<a href="#aaa">here</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>
Example Data
</div>', $document->getElementsByTagName('body')->first()->innerHTML);

        $document = Contender::loadStr($html);
        $tag = $document->getElementsByTagName('ul')->first();
        $tag->before($document->createCDATASection('Example Data'));
        $this->assertEquals('<div>
<a href="#aaa">here</a><p class="plain-text"></p>
Example Data<ul class="user-list"><li class="li-1"></ul>
</div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateTextNode($html)
    {
        $document = Contender::loadStr($html);
        $tag = $document->getElementsByTagName('a')->first();

        $tag->insertBefore($document->createTextNode('Example Text Data'));

        $this->assertEquals('<div>
<a href="#aaa">hereExample Text Data</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>
</div>', $document->getElementsByTagName('body')->first()->innerHTML);

        $document = Contender::loadStr($html);
        $tag = $document->getElementsByTagName('a')->first();
        $tag->replaceChild($document->createTextNode('Example Text Data'), $tag->children->first());

        $this->assertEquals('<div>
<a href="#aaa">Example Text Data</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>
</div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateAttributeNS($html)
    {
        $document = Contender::loadStr($html);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateProcessingInstruction($html)
    {
        $document = Contender::loadStr($html);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateElement($html)
    {
        $document = Contender::loadStr($html);
        $element = $document->createElement('hr');
        $document->querySelector('div')->appendChild($element);

        $this->assertEquals('<div>
<a href="#aaa">here</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>
<hr>
</div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateAttribute($html)
    {
        $document = Contender::loadStr($html);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateComment($html)
    {
        $document = Contender::loadStr($html);
        $element = $document->createComment('comment is here');
        $document->querySelector('div')->appendChild($element);

        $this->assertEquals('<div>
<a href="#aaa">here</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>
<!--comment is here-->
</div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCreateEntityReference($html)
    {
        $document = Contender::loadStr($html);
        $element = $document->createEntityReference('nbsp');
        $document->querySelector('div')->appendChild($element);

        $this->assertEquals('<div>
<a href="#aaa">here</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>&nbsp;</div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    /**
     * @dataProvider dataProvider
     */
    public function test_createProcessingInstruction($html)
    {
        $PItext = "type='text/xsl' href='book.xsl'";
        $document = Contender::loadStr($html);
        $element = $document->createProcessingInstruction('xml-stylesheet', $PItext);
        $document->querySelector('div')->appendChild($element);

        $this->assertEquals('<div>
<a href="#aaa">here</a><p class="plain-text"></p>
<ul class="user-list"><li class="li-1"></ul>
<?xml-stylesheet type=\'text/xsl\' href=\'book.xsl\'>
</div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    public function test_createAttributeNS()
    {
        $source = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<root><tag></tag></root>
XML;

        $document = Contender::loadStr($source);
        $element = $document->createAttributeNS('NsURL', 'qualified:name');

        $this->assertStringContainsString('xmlns:qualified="NsURL"', $document->outerXML);

        $document = Contender::loadStr($source);
        $element = $document->createAttributeNS('NsURL', 'qualified:name');

        $document->getElementsByTagName('tag')->first()->appendChild($element);

        //$this->assertStringNotContainsString('xmlns:qualified="NsURL"', $document->outerXML);
        $this->assertStringContainsString('<tag qualified:name></tag>', $document->getElementsByTagName('root')->first()->innerHTML);

        // $document->querySelector('div')->appendChild($element);
    }

    /**
     * @dataProvider dataProvider
     * @covers \Contender\Elements\Attr
     */
    public function test_createAttribute($html)
    {
        $document = Contender::loadStr($html);
        $attr = $document->createAttribute('class');
        $attr->value = 'data';

        $document->find('div')->first()->appendChild($attr);
        $this->assertStringContainsString('<div class="data">', $document->innerHTML);
    }
}
