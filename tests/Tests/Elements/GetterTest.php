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
use Contender\Elements\Node;
use Mockery\Mock;
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
 * @covers \Contender\Elements\Traits\GetterTrait
 * @covers \Contender\Elements\Traits\MutationTrait
 * @covers \Contender\Elements\Factory
 */
class GetterTest extends TestCase
{
    public function test_getParameterAttribute()
    {
        $document = Contender::loadUrl(__DIR__ . '/../../data/wikipedia.html');

        $element = $document->querySelector('[title="reg"]');

        $this->assertEquals('/wiki/%E6%AD%A3%E8%A6%8F%E8%A1%A8%E7%8F%BE', $element->attr('href'));
        $this->assertEquals('UTF-8', $document->encoding);
    }

    public function test_setParameterAttribute()
    {
        $html = '<div><p>□■□■□■□■□■□■□■□■</p><span>♪♪♪♪</span></div>';
        $document = Contender::loadStr($html);
        $document->formatOutput = false;

        $this->assertStringContainsString($html, (string)$document);
        $document->formatOutput = true;

        $this->assertStringNotContainsString($html, (string)$document);
    }

    public function test_hasParameterAttribute()
    {
        $html = '<div><p>□■□■□■□■□■□■□■□■</p><span>♪♪♪♪</span></div>';
        $document = Contender::loadStr($html);
        $this->assertTrue(isset($document->formatOutput));
        $this->assertTrue(isset($document->innerHTML));
        $this->assertFalse(isset($document->asfasdfaas));

    }




    public function innerhtmlDataProvider()
    {
        return [
            'シンプル' => [
                file_get_contents(__DIR__ . '/../../data/wikipedia.html'),
                '.mw-content-ltr',
                [
                    /** @lang text */ '<div class="mw-parser-output">',
                    /** @lang text */ '<p><b>ウェブスクレイピング</b>',
                ],
            ],
            'テキスト' => [
                file_get_contents(__DIR__ . '/../../data/wikipedia.html'),
                '#siteSub',
                '出典: フリー百科事典『ウィキペディア（Wikipedia）』',
            ],
            '複数' => [
                file_get_contents(__DIR__ . '/../../data/wikipedia.html'),
                '#toc',
                [
                    /** @lang text */ '<span class="toctext">手法</span>',
                    /** @lang text */ '<span class="toctext">法的問題</span>',
                    /** @lang text */ '<li class="toclevel-1 tocsection-3">',
                ],
            ],
            'none' => [
                '<div></div>',
                'div',
                [''],
            ],
        ];
    }

    /**
     * @dataProvider innerhtmlDataProvider
     */
    public function test_innerHtml($html, $path, $expect)
    {
        $parser = new Contender();

        /**
         * @var \Contender\Contender
         */
        $document = $parser->load($html);

        $element = $document->querySelector($path);

        if (is_array($expect)) {
            foreach ($expect as $ck) {
                $this->assertStringContainsString($ck, $element->innerHTML);
                $this->assertStringContainsString($ck, $document->innerHTML);
            }
        } else {
            $this->assertStringContainsString($expect, $element->innerHTML);
            $this->assertStringContainsString($expect, $document->innerHTML);
        }
    }

    public function test_outer()
    {
        $document = Contender::loadStr('<div><p></p></div>');
        $element = $document->getElementsByTagName('p')->first();
        $element->appendChild($document->createTextNode('ExampleText'));

        $this->assertStringContainsString('ExampleText', $element->outerHTML);
        $this->assertStringContainsString('<p>', $element->outerHTML);
        $this->assertStringNotContainsString('<p>', $element->innerHTML);

        $this->assertStringContainsString($element->outerHTML, $document->outerHTML);
        $this->assertStringContainsString('ExampleText', $element->outerXML);
        $this->assertStringContainsString($element->outerXML, $document->outerXML);
    }

    /**
     * @dataProvider innerhtmlDataProvider
     */
    public function test_innerXML($html, $path, $expect)
    {
        $parser = new Contender();

        /**
         * @var \Contender\Contender
         */
        $document = $parser->load($html);

        $element = $document->querySelector($path);

        if (is_array($expect)) {
            foreach ($expect as $ck) {
                $this->assertStringContainsString($ck, $element->innerXML);
                $this->assertStringContainsString($ck, $document->innerXML);
            }
        } else {
            $this->assertStringContainsString($expect, $element->innerXML);
            $this->assertStringContainsString($expect, $document->innerXML);
        }
    }

    /**
     * @dataProvider innerhtmlDataProvider
     */
    public function test_innerHtml_add($html, $path, $expect)
    {
        $parser = new Contender();

        /**
         * @var \Contender\Contender
         */
        $res = $parser->load($html);

        $element = $res->querySelector($path);
        $element->innerHTML = '<div>aaaa</div>';

        $this->assertEquals('<div>aaaa</div>', $element->innerHTML);
    }

    /**
     * @dataProvider innerhtmlDataProvider
     */
    public function test_innerXml_add($html, $path, $expect)
    {
        $parser = new Contender();

        /**
         * @var \Contender\Contender
         */
        $res = $parser->load($html);

        $element = $res->querySelector($path);
        $element->innerXML = '<div>aaaa</div>';

        $this->assertEquals('<div>aaaa</div>', $element->innerXML);
    }

    public function test_children_childNodes()
    {
        $parser = new Contender();
        $res = $parser->load(file_get_contents(__DIR__ . '/../../data/wikipedia.html'));
        $main = $res->querySelectorAll('#toc > ul');

        $this->assertEquals(1, $main->count());

        $collection = $main->offsetGet(0)->children;

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(1)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(3)->innerHTML);

        $collection = $main->offsetGet(0)->childNodes;

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(1)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(3)->innerHTML);
    }

    public function test_nodeType()
    {
        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_ELEMENT_NODE);
        $this->assertTrue($node->is_element);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_ATTRIBUTE_NODE);
        $this->assertTrue($node->is_attr);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_TEXT_NODE);
        $this->assertTrue($node->is_text);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_CDATA_SECTION_NODE);
        $this->assertTrue($node->is_character_data);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_ENTITY_REF_NODE);
        $this->assertTrue($node->is_entity_reference);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_ENTITY_NODE);
        $this->assertTrue($node->is_entity);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_PI_NODE);
        $this->assertTrue($node->is_processing_instruction);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_COMMENT_NODE);
        $this->assertTrue($node->is_comment);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_DOCUMENT_NODE);
        $this->assertTrue($node->is_document);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_DOCUMENT_TYPE_NODE);
        $this->assertTrue($node->is_document_type);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_DOCUMENT_FRAG_NODE);
        $this->assertTrue($node->is_document_fragment);

        $node = \Mockery::mock(Node::class)->makePartial();
        $node->shouldReceive('getNodeTypeAttribute')->andReturn(XML_NOTATION_NODE);
        $this->assertTrue($node->is_notation);
    }



}
