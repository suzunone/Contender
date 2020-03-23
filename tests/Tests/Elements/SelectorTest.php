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

use Contender\Elements\Collection;
use Contender\Elements\Node;
use PHPUnit\Framework\TestCase;
use Contender\Contender;

/**
 * Class SelectorTest
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
 * @covers \Contender\Elements\Document
 * @covers \Contender\Elements\Node
 * @covers \Contender\Elements\Collection
 * @covers \Contender\Elements\Traits\SelectorTrait
 * @covers \Contender\Elements\Traits\MutationTrait
 * @covers \Contender\Elements\Traits\ElementTrait
 * @covers \Contender\Elements\Traits\NodeTrait
 */
class SelectorTest extends TestCase
{
    public function test_querySelector()
    {
        $parser = new Contender();

        /**
         * @var \Contender\Contender
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
        $parser = new Contender();
        $res = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $collection = $res->querySelectorAll('.toclevel-1.tocsection-1, .toclevel-1.tocsection-2');

        $this->assertCount(2, $collection);
        $this->assertStringContainsString('手法', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString('法的問題', $collection->offsetGet(1)->innerHTML);
    }

    public function test_getElementById()
    {
        $document = Contender::loadStr('<div><p id="test">aaaaa</p></div>');

        $res = $document->getElementById('fooo');
        $this->assertNull($res);

        $res = $document->getElementById('test');
        $this->assertInstanceOf(Node::class, $res);

        $this->assertEquals('aaaaa', $res->innerText);
    }


    public function test_getElementsByClassName()
    {
        $document = Contender::loadStr('<div><p class="test">aaaaa</p><p class="test">bbbbb</p></div>');

        $res = $document->getElementsByClassName('fooo');
        $this->assertCount(0, $res);

        $res = $document->getElementsByClassName('test');
        $this->assertInstanceOf(Collection::class, $res);

        $this->assertEquals('aaaaa', $res->innerHTML);
    }

    public function test_getElementsByName()
    {
        $document = Contender::loadStr('<div><a name="test">aaaaa</a><a name="test">bbbbb</a></div>');

        $res = $document->getElementsByName('fooo');
        $this->assertCount(0, $res);

        $res = $document->getElementsByName('test');
        $this->assertInstanceOf(Collection::class, $res);

        $this->assertEquals('aaaaa', $res->innerHTML);
    }


    public function test_getElementsByTagName()
    {
        $document = Contender::loadStr('<div><p class="test">aaaaa</p><p class="test">bbbbb</p></div>');

        $res = $document->getElementsByTagName('a');
        $this->assertCount(0, $res);

        $res = $document->getElementsByTagName('p');

        $this->assertInstanceOf(Collection::class, $res);

        $this->assertCount(2, $res);

        $this->assertEquals('aaaaa', $res->innerHTML);


        // from Element
        $res = $document->getElementsByTagName('div')->offsetGet(0)->getElementsByTagName('p');

        $this->assertInstanceOf(Collection::class, $res);

        $this->assertCount(2, $res);

        $this->assertEquals('aaaaa', $res->innerHTML);
    }


}
