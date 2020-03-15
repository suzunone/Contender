<?php
/**
 * CollectionTest.php
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
 * @since      2020/03/15
 */

namespace Tests\Contender\Elements;

use Contender\DOM;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function test_onlyElement()
    {
        $parser = new DOM();
        $document = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $main = $document->querySelectorAll('#toc > ul');

        $this->assertEquals(1, $main->count());

        $collection = $main->offsetGet(0)->children->onlyElement();

        $this->assertStringContainsString(/** @lang text */ '<a href="#%E6%89%8B%E6%B3%95"><span class="tocnumber">1</span> <span class="toctext">手法</span></a>', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '<a href="#%E6%B3%95%E7%9A%84%E5%95%8F%E9%A1%8C"><span class="tocnumber">2</span> <span class="toctext">法的問題</span></a>', $collection->offsetGet(1)->innerHTML);
    }

    public function test_querySelectorAll()
    {
        $parser = new DOM();
        $document = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $main = $document->querySelectorAll('#toc > ul');

        $collection = $main->querySelectorAll('a');

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(1)->innerHTML);
    }

    public function test_querySelectorAll_from_children()
    {
        $parser = new DOM();
        $document = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $main = $document->querySelectorAll('#toc > ul');

        $children = $main->offsetGet(0)->children;

        $collection = $children->querySelectorAll('a');

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(1)->innerHTML);
    }
}
