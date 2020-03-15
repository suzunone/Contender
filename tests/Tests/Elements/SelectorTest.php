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

use Contender\Elements\Node;
use PHPUnit\Framework\TestCase;
use Contender\DOM;

class SelectorTest extends TestCase
{
    public function test_querySelector()
    {
        $parser = new DOM();

        /**
         * @var \Contender\DOM
         */
        $res = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));

        $element = $res->querySelector('#mw-content-text');

        $this->assertInstanceOf(Node::class, $element);

        $element2 = $element->querySelector('a[title="reg"]');

        $this->assertInstanceOf(Node::class, $element2);

        $this->assertEquals('/wiki/%E6%AD%A3%E8%A6%8F%E8%A1%A8%E7%8F%BE', $element2->attr('href'));

        $element = $res->querySelector('.toclevel-1.tocsection-1');
        $this->assertInstanceOf(Node::class, $element);
        $this->assertEquals('<li class="toclevel-1 tocsection-1"><a href="#%E6%89%8B%E6%B3%95"><span class="tocnumber">1</span> <span class="toctext">手法</span></a></li>', $element->outerHTML);
    }

    public function test_querySelectorAll()
    {
        $parser = new DOM();
        $res = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $collection = $res->querySelectorAll('.toclevel-1.tocsection-1, .toclevel-1.tocsection-2');

        $this->assertCount(2, $collection);
        $this->assertStringContainsString('手法', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString('法的問題', $collection->offsetGet(1)->innerHTML);
    }
}
