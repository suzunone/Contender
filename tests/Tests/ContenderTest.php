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

class ContenderTest extends TestCase
{
    public function test_load_bigfile()
    {
        $parser = new Contender();

        $dom = $parser->load(file_get_contents(__DIR__ . '/../data/789_14547.html'));

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
        $parser = new Contender();

        $dom = $parser->load($html, $options);
        $ex_html = (string) $dom;
        foreach ($expects as $expect) {
            $this->assertStringContainsString($expect, $ex_html);
        }

        foreach ($expect_ignores as $expect) {
            $this->assertStringNotContainsStringIgnoringCase($expect, $ex_html);
        }
    }
}
