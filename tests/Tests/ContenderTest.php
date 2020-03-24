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
use Contender\Elements\Document;
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
 * @covers     \Contender\Elements\Document
 * @covers     \Contender\Elements\Node
 * @covers \Contender\Elements\Element
 * @covers     \Contender\Elements\Collection
 * @covers \Contender\Elements\Factory
 */
class ContenderTest extends TestCase
{
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
}
