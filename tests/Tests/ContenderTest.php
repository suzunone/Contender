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

    public function loadYnescapedDataProvider()
    {
        return [
            'and' => ['<div>&</div>',
                '<div>&amp;</div>',
            ],
            'nbsp' => ['<div>&nbsp;</div>',
                '<div>&nbsp;</div>',
            ],
        ];
    }

    /**
     * @dataProvider loadYnescapedDataProvider
     */
    public function test_load_un_escaped($html, $expect)
    {
        $parser = new Contender();

        $dom = $parser->load($html);

        $this->assertStringContainsString($expect, $dom->innerHTML);
    }
}
