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
use PHPUnit\Framework\TestCase;

class GetterTest extends TestCase
{
    public function test_getAttribute()
    {
        $parser = new Contender();

        /**
         * @var \Contender\Contender
         */
        $res = $parser->load(file_get_contents(__DIR__ . '/../../data/wikipedia.html'));

        $element = $res->querySelector('[title="reg"]');

        $this->assertEquals('/wiki/%E6%AD%A3%E8%A6%8F%E8%A1%A8%E7%8F%BE', $element->attr('href'));
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
        $res = $parser->load($html);

        $element = $res->querySelector($path);

        if (is_array($expect)) {
            foreach ($expect as $ck) {
                $this->assertStringContainsString($ck, $element->innerHTML);
            }
        } else {
            $this->assertStringContainsString($expect, $element->innerHTML);
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

    public function test_children()
    {
        $parser = new Contender();
        $res = $parser->load(file_get_contents(__DIR__ . '/../../data/wikipedia.html'));
        $main = $res->querySelectorAll('#toc > ul');

        $this->assertEquals(1, $main->count());

        $collection = $main->offsetGet(0)->children;

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(1)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(3)->innerHTML);
    }
}
