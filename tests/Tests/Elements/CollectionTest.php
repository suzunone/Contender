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

use Contender\Contender;
use PHPUnit\Framework\TestCase;

/**
 * Class CollectionTest
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
 * @since      2020/03/22
 * @covers \Contender\Elements\Collection
 * @covers \Contender\Elements\Factory
 */
class CollectionTest extends TestCase
{
    public function test_onlyElement()
    {
        $parser = new Contender();
        $document = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $main = $document->querySelectorAll('#toc > ul');

        $this->assertEquals(1, $main->count());

        $collection = $main->offsetGet(0)->children->onlyElement();

        $this->assertStringContainsString(/** @lang text */ '<a href="#%E6%89%8B%E6%B3%95"><span class="tocnumber">1</span> <span class="toctext">手法</span></a>', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '<a href="#%E6%B3%95%E7%9A%84%E5%95%8F%E9%A1%8C"><span class="tocnumber">2</span> <span class="toctext">法的問題</span></a>', $collection->offsetGet(1)->innerHTML);
    }

    public function test_querySelectorAll()
    {
        $parser = new Contender();
        $document = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $main = $document->querySelectorAll('#toc > ul');

        $collection = $main->querySelectorAll('a');

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(1)->innerHTML);
    }

    public function test_querySelectorAll_from_children()
    {
        $parser = new Contender();
        $document = $parser->load(file_get_contents(__DIR__.'/../../data/wikipedia.html'));
        $main = $document->querySelectorAll('#toc > ul');

        $children = $main->offsetGet(0)->children;

        $collection = $children->querySelectorAll('a');

        $this->assertStringContainsString(/** @lang text */ '手法', $collection->offsetGet(0)->innerHTML);
        $this->assertStringContainsString(/** @lang text */ '法的問題', $collection->offsetGet(1)->innerHTML);
    }

    public function test_innerXML_innerHTML()
    {
        $document = Contender::loadStr('<div>aaaa<br />bbbbb</div>');

        $element = $document->querySelectorAll('div');

        $this->assertEquals('aaaa<br/>bbbbb', $element->innerXML);
        $this->assertEquals('aaaa<br>bbbbb', $element->innerHTML);

        $element->innerXML = 'cccc<br />ddd';

        $this->assertEquals('<p>cccc<br/>ddd</p>', $document->querySelector('div')->innerXML);
        $this->assertEquals('<p>cccc<br>ddd</p>', $document->querySelector('div')->innerHTML);


        $element->innerHTML = 'eeee<br />ffff';

        $this->assertEquals('<p>eeee<br/>ffff</p>', $document->querySelector('div')->innerXML);
        $this->assertEquals('<p>eeee<br>ffff</p>', $document->querySelector('div')->innerHTML);

        $this->assertTrue(isset($element->innerHTML));
        $this->assertTrue(isset($element->innerXML));
    }

    public function dataProvider()
    {
        return [
            ['<div><a href="#aaa" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">here</a><p class="plain-text"></p><ul class="user-list"><li class="li-1">list1</li></ul>foo + bar</div>'],
        ];
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_querySelector($html)
    {
        $document = Contender::loadStr($html);
        $collection = $document->querySelector('div')->children;
        $anchor = $collection->querySelector('a');
        $this->assertEquals('#aaa', $anchor->attr('href'));

    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_find($html)
    {
        $document = Contender::loadStr($html);
        $collection = $document->find('div');
        $this->assertCount(1, $collection->find('ul'));

    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_attr($html)
    {
        $document = Contender::loadStr($html);
        $collection = $document->getElementsByTagName('a');

        $this->assertEquals('#aaa', $collection->attr('href'));


        $collection->attr('href', '#bbb');
        $this->assertEquals('#bbb', $collection->attr('href'));

    }


    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_getAttribute_setAttribute($html)
    {
        $document = Contender::loadStr($html);
        $collection = $document->getElementsByTagName('a');

        $this->assertEquals('#aaa', $collection->getAttribute('href'));


        $collection->setAttribute('href', '#bbb');
        $this->assertEquals('#bbb', $collection->getAttribute('href'));
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_remove($html)
    {
        $document = Contender::loadStr($html);
        $add_element = $document->createElement('li');
        $add_element->appendChild($document->createTextNode('example'));
        $document->querySelector('ul')->appendChild($add_element);

        $this->assertStringContainsString('<li>example</li>', $document->outerXML);

        $document->getElementsByTagName('li')->remove();
        $this->assertStringNotContainsString('<li>', $document->outerXML);

    }


}
