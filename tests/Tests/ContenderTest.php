<?php
/**
 * ContenderTest.php
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
 * @since      2020/03/13
 */

namespace Tests\Contender;

use Contender\Contender;
use Contender\Dom\Document;
use Contender\Dom\Element;
use PHPUnit\Framework\TestCase;

/**
 * Class ContenderTest
 *
 * @category   Contender
 * @package    Tests\Contender
 * @subpackage Tests\Contender
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/22
 * @covers     \Contender\Contender
 * @covers     \Contender\Service\Factory
 */
class ContenderTest extends TestCase
{
    use InvokeTrait;

    /**
     *
     */
    public function test_load_bigfile()
    {
        $header = [
            'http' => [
                'method'        => 'GET',
                'header'        => 'User-Agent: Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0.1',
                'ignore_errors' => true,
            ],
        ];
        $dom = Contender::loadUrl('https://www.aozora.gr.jp/cards/000148/files/789_14547.html', [
            Contender::OPTION_CONVERT_ENCODE,
        ], $header);

        $this->assertInstanceOf(Document::class, $dom);

        $collection = $dom->getElementsByClassName('main_text');

        $content = $collection->offsetGet(0);

        $this->assertStringContainsString('<ruby><rb>吾輩</rb><rp>（</rp><rt>わがはい</rt><rp>）</rp></ruby>は猫', $content->innerHTML);
    }

    public function loadUnescapedDataProvider()
    {
        return [
            'and' => ['<div>&</div>',
                '<div>&amp;</div>',
            ],
            'nbsp' => ['<div>&nbsp;</div>',
                '<div>&nbsp;</div>',
            ],
            'スペース' => [
                '<div> </div> ',
                '<div> </div> ',
            ],
        ];
    }

    /**
     * @dataProvider loadUnescapedDataProvider
     * @param $html
     * @param $expect
     */
    public function test_load_un_escaped($html, $expect)
    {
        $parser = new Contender();

        $dom = $parser->load($html);

        $this->assertEquals($expect, $dom->find('body')->innerHTML);
    }

    public function loadRemoveTagProvider()
    {
        $doc = <<<HTMLEND
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<link rel="shortcut icon" href="">
</head>
<body>
<script>
document.write('test');
</script>
<style>
body{
color: #0b2e13;
}
</style>
<div>
<style>
body{
font-size: 12px
}
</style>
サンプルのテキスト

<script>
document.write('あああ');
</script>
</div>
<!--
コメント
-->
</body>
</html>
HTMLEND;

        return [
            'style' => [
                $doc,
                ['<script>', '</script>', '<!--', '-->'],
                ['<style>', '</style>'],
                [
                    Contender::OPTION_REMOVE_STYLE_ENABLE,
                ],
            ],
            'script' => [
                $doc,
                ['<style>', '</style>', '<!--', '-->'],
                ['<script>', '</script>'],
                [
                    Contender::OPTION_REMOVE_SCRIPT_ENABLE,
                ],
            ],
            'comment' => [
                $doc,
                ['<style>', '</style>', '<script>', '</script>'],
                ['<!--', '-->'],
                [
                    Contender::OPTION_REMOVE_COMMENT_ENABLE,
                ],
            ],
            'all' => [
                $doc,
                ['サンプルのテキスト'],
                ['<style>', '</style>', '<script>', '</script>', '<!--', '-->'],
                [
                    Contender::OPTION_REMOVE_STYLE_ENABLE,
                    Contender::OPTION_REMOVE_SCRIPT_ENABLE,
                    Contender::OPTION_REMOVE_COMMENT_ENABLE,
                ],
            ],

        ];
    }

    /**
     * @dataProvider loadRemoveTagProvider
     * @param $html
     * @param $expects
     * @param $expect_ignores
     * @param $options
     */
    public function test_remove_tag($html, $expects, $expect_ignores, $options)
    {
        $dom = Contender::loadStr($html, $options);
        $ex_html = (string) $dom;
        foreach ($expects as $expect) {
            $this->assertStringContainsString($expect, $ex_html);
        }

        foreach ($expect_ignores as $expect) {
            $this->assertStringNotContainsStringIgnoringCase($expect, $ex_html);
        }
    }

    public function test_loadLocal()
    {
        $document = Contender::loadUrl(__DIR__ . '/../data/wikipedia.html');

        $element = $document->querySelector('[title="reg"]');

        $this->assertEquals('/wiki/%E6%AD%A3%E8%A6%8F%E8%A1%A8%E7%8F%BE', $element->attr('href'));
    }

    public function setOptionLibxmlDataProvider()
    {
        return [
            Contender::OPTION_COMPACT    => [Contender::OPTION_COMPACT, LIBXML_COMPACT],
            Contender::OPTION_NOBLANKS   => [Contender::OPTION_NOBLANKS, LIBXML_NOBLANKS],
            Contender::OPTION_NOCDATA    => [Contender::OPTION_NOCDATA, LIBXML_NOCDATA],
            Contender::OPTION_NOEMPTYTAG => [Contender::OPTION_NOEMPTYTAG, LIBXML_NOEMPTYTAG],
            Contender::OPTION_NOENT      => [Contender::OPTION_NOENT, LIBXML_NOENT],
            Contender::OPTION_NONET      => [Contender::OPTION_NONET, LIBXML_NONET],
        ];
    }

    /**
     * @dataProvider setOptionLibxmlDataProvider
     * @param $param
     * @param $option
     * @throws \ReflectionException
     */
    public function test_setOption_libxml($param, $option)
    {
        $contender = new Contender();
        $contender->setOption($param);

        $options = $this->invokeGetProperty($contender, 'options');

        $this->assertTrue(isset($options[$option]));
        $this->assertEquals($option, $options[$option]);
    }

    public function setOptionContenderParameterDataProvider()
    {
        return [
            Contender::OPTION_CONVERT_NO_ENCODE => [Contender::OPTION_CONVERT_NO_ENCODE, 'is_encode', false],
            Contender::OPTION_CONVERT_ENCODE    => [Contender::OPTION_CONVERT_ENCODE, 'is_encode', true],

            Contender::OPTION_CONVERT_REPLACE_CHARSET    => [Contender::OPTION_CONVERT_REPLACE_CHARSET, 'is_replace_charset', true],
            Contender::OPTION_CONVERT_NO_REPLACE_CHARSET => [Contender::OPTION_CONVERT_NO_REPLACE_CHARSET, 'is_replace_charset', false],

            Contender::OPTION_FORMAT_OUTPUT_ENABLE  => [Contender::OPTION_FORMAT_OUTPUT_ENABLE, 'format_output', true],
            Contender::OPTION_FORMAT_OUTPUT_DISABLE => [Contender::OPTION_FORMAT_OUTPUT_DISABLE, 'format_output', false],

            Contender::OPTION_MINIFY_ENABLE  => [Contender::OPTION_MINIFY_ENABLE, 'is_minify', true],
            Contender::OPTION_MINIFY_DISABLE => [Contender::OPTION_MINIFY_DISABLE, 'is_minify', false],

            Contender::OPTION_REMOVE_STYLE_ENABLE  => [Contender::OPTION_REMOVE_STYLE_ENABLE, 'is_style_remove', true],
            Contender::OPTION_REMOVE_STYLE_DISABLE => [Contender::OPTION_REMOVE_STYLE_DISABLE, 'is_style_remove', false],

            Contender::OPTION_REMOVE_SCRIPT_ENABLE  => [Contender::OPTION_REMOVE_SCRIPT_ENABLE, 'is_script_remove', true],
            Contender::OPTION_REMOVE_SCRIPT_DISABLE => [Contender::OPTION_REMOVE_SCRIPT_DISABLE, 'is_script_remove', false],

            Contender::OPTION_REMOVE_COMMENT_ENABLE  => [Contender::OPTION_REMOVE_COMMENT_ENABLE, 'is_comment_remove', true],
            Contender::OPTION_REMOVE_COMMENT_DISABLE => [Contender::OPTION_REMOVE_COMMENT_DISABLE, 'is_comment_remove', false],

            Contender::OPTION_FROM_XML_ENABLE  => [Contender::OPTION_FROM_XML_ENABLE, 'xml_load', true],
            Contender::OPTION_FROM_XML_DISABLE => [Contender::OPTION_FROM_XML_DISABLE, 'xml_load', false],
        ];
    }

    /**
     * @dataProvider setOptionContenderParameterDataProvider
     * @param $param
     * @param $key
     * @param $expect
     * @throws \ReflectionException
     */
    public function test_setOption_contender_Parameter($param, $key, $expect)
    {
        $contender = new Contender();
        $contender->setOption($param);

        $value = $this->invokeGetProperty($contender, $key);

        $this->assertEquals($expect, $value);
    }

    public function encodeDataProvider()
    {
        return [
            'single_byte' => [
                '<div class="metadata">aaa</div><div>aaa</div><div>aaa</div><div>aaa</div><div>aaa</div>',
                'div.metadata',
            ],
            'multi_byte' => [
                <<<HTMLEND
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" >
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="content-style-type" content="text/css" />
	<link rel="stylesheet" type="text/css" href="../../aozora.css" />
	<title>レオナルド・ダ・ヴインチ　Leonardo da Vinci 芥川龍之介訳 レオナルド・ダ・ヴインチの手記 —— Leonardo da Vinci ——</title>
	<script type="text/javascript" src="../../jquery-1.4.2.min.js"></script>
  <link rel="Schema.DC" href="http://purl.org/dc/elements/1.1/" />
	<meta name="DC.Title" content="レオナルド・ダ・ヴインチの手記" />
	<meta name="DC.Creator" content="レオナルド・ダ・ヴインチ　Leonardo da Vinci" />
	<meta name="DC.Publisher" content="青空文庫" />
</head>
<body>
<div class="metadata">
<h1 class="title">レオナルド・ダ・ヴインチの手記</h1>
<h2 class="original_title">—— Leonardo da Vinci ——</h2>
<h2 class="author">レオナルド・ダ・ヴインチ　Leonardo da Vinci</h2>
<h2 class="translator">芥川龍之介訳</h2>
<br />
<br />
</div>
</html>
HTMLEND,
                'div.metadata',

            ],
            'sjis-xhtml' => [
                file_get_contents(__DIR__ . '/../data/59231_67732.html'),
                'div.metadata',
            ],
        ];
    }

    /**
     * @dataProvider encodeDataProvider
     */
    public function test_encode($html, $query)
    {
        $document = Contender::loadStr($html, [Contender::OPTION_CONVERT_ENCODE, Contender::OPTION_CONVERT_REPLACE_CHARSET]);

        $this->assertEquals('UTF-8', $document->encoding);
        $element = $document->querySelector($query);
        $this->assertInstanceOf(Element::class, $element);

        $body = $document->find('body');
        $element = $body->querySelector($query);
        $this->assertInstanceOf(Element::class, $element);

        $body = $document->querySelector('body');
        $element = $body->querySelector($query);
        $this->assertInstanceOf(Element::class, $element);
    }
}
