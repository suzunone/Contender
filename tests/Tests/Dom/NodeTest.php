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

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use PHPUnit\Framework\TestCase;

/**
 * Class GetterTest
 *
 * @category   Contender
 * @package    Tests\Suzunone\Contender\Dom
 * @subpackage Tests\Suzunone\Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/22
 * @covers \Contender\Dom\Traits\NodeTrait
 * @covers \Contender\Dom\Node
 * @covers \Contender\Service\Factory
 */
class NodeTest extends TestCase
{
    public function test_toString()
    {
        $document = Contender::loadStr('<div>test</div>');
        $parent = $document->querySelector('div');

        $this->assertEquals('<div>test</div>', (string) $parent);
    }

    public function test_removeAttribute()
    {
        $document = Contender::loadStr('<style></style><strong>test</strong><style></style>');
        $document->querySelectorAll('style')->remove();

        $this->assertEquals('<strong>test</strong>', $document->querySelector('body')->innerHTML);
    }

    public function test_after_simple()
    {
        $document = Contender::loadStr('<div></div>');
        $parent = $document->querySelector('div');
        $child = $document->createElement('p');
        $parent->appendChild($child);

        $span = $document->createElement('span');
        $child->after($span);

        $this->assertEquals('<div><p></p><span></span></div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));

        $strong = $document->createElement('strong');
        $child->after($strong);

        $this->assertEquals('<div><p></p><strong></strong><span></span></div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));

        $child->after('Text');
        $this->assertEquals('<div><p></p>Text<strong></strong><span></span></div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));
    }

    public function test_after_multi()
    {
        $document = Contender::loadStr('<div></div>');
        $parent = $document->querySelector('div');
        $child = $document->createElement('p');
        $parent->appendChild($child);

        $span = $document->createElement('span');
        $child->after($span, 'Text');

        $this->assertEquals('<div><p></p><span></span>Text</div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));
    }

    public function test_before_simple()
    {
        $document = Contender::loadStr('<div></div>');
        $parent = $document->querySelector('div');
        $child = $document->createElement('p');
        $parent->appendChild($child);

        $span = $document->createElement('span');
        $child->before($span);

        $this->assertEquals('<div><span></span><p></p></div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));

        $strong = $document->createElement('strong');
        $child->before($strong);

        $this->assertEquals('<div><span></span><strong></strong><p></p></div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));

        $child->before('Text');
        $this->assertEquals('<div><span></span><strong></strong>Text<p></p></div>', str_replace("\n", '', $document->querySelector('body')->innerHTML));
    }

    public function test_after_none()
    {
        $document = Contender::loadStr('<div></div>');
        $parent = $document->querySelector('div');
        $child = $document->createElement('p');
        $parent->appendChild($child);

        $res = $child->after();
        $this->assertNull($res);
    }

    public function test_before_none()
    {
        $document = Contender::loadStr('<div></div>');
        $parent = $document->querySelector('div');
        $child = $document->createElement('p');
        $parent->appendChild($child);

        $res = $child->before();
        $this->assertNull($res);
    }

    public function test_innerXML()
    {
        $document = Contender::loadStr('<div>aaaa<br />bbbbb</div>');

        $element = $document->querySelector('div');

        $this->assertEquals('aaaa<br/>bbbbb', $element->innerXML);
        $this->assertEquals('aaaa<br>bbbbb', $element->innerHTML);

        $element->innerXML = 'cccc<br />ddd';

        $this->assertEquals('cccc<br/>ddd', $document->querySelector('div')->innerXML);
        $this->assertEquals('cccc<br>ddd', $document->querySelector('div')->innerHTML);
    }

    public function test_removeChild()
    {
        $document = Contender::loadStr('<div>aaaa<br/>bbbbb</div>');

        $element = $document->querySelector('div');
        $element->removeChild($element->firstChild);

        $this->assertEquals('<div><br/>bbbbb</div>', $document->getElementsByTagName('body')->first()->innerXML);
    }

    public function test_replaceChild()
    {
        $document = Contender::loadStr('<div>aaaa<br/>bbbbb</div>');

        $element = $document->querySelector('div');
        $element->replaceChild($document->createTextNode('ccccc'), $element->firstChild);

        $this->assertEquals('<div>ccccc<br/>bbbbb</div>', $document->getElementsByTagName('body')->first()->innerXML);
    }

    public function dataProvider()
    {
        return [
            ['<div><a href="#aaa">here</a><p class="plain-text"></p><ul class="user-list"><li class="li-1"></li></ul></div>'],
        ];
    }

    /**
     * @param $html
     * @dataProvider dataProvider
     */
    public function test_cloneNode($html)
    {
        $document = Contender::loadStr($html);
        $ul = $document->getElementsByTagName('ul')->first();
        $clone_ul = $ul->cloneNode();
        $document->getElementsByTagName('a')->first()->insertBefore($clone_ul);

        $this->assertEquals('<div><a href="#aaa">here<ul class="user-list"></ul></a><p class="plain-text"></p><ul class="user-list"><li class="li-1"></ul></div>', $document->getElementsByTagName('body')->first()->innerHTML);

        $document = Contender::loadStr($html);
        $ul = $document->getElementsByTagName('ul')->first();
        $clone_ul = $ul->cloneNode(true);
        $ul->before($clone_ul);

        $this->assertEquals('<div><a href="#aaa">here</a><p class="plain-text"></p><ul class="user-list"><li class="li-1"></ul><ul class="user-list"><li class="li-1"></ul></div>', $document->getElementsByTagName('body')->first()->innerHTML);
    }

    public function test_normalize()
    {
        $document = Contender::loadStr('<div></div>');
        $document->querySelector('div')->insertBefore($document->createTextNode('aaa'));
        $document->querySelector('div')->insertBefore($document->createTextNode(''));
        $document->querySelector('div')->insertBefore($document->createTextNode(''));
        $document->querySelector('div')->insertBefore($document->createTextNode(''));
        $document->querySelector('div')->insertBefore($document->createTextNode(''));
        $document->querySelector('div')->insertBefore($document->createTextNode(''));
        $document->querySelector('div')->insertBefore($document->createTextNode('bbb'));

        $this->assertCount(7, $document->getElementsByTagName('div')->first()->children);

        $document->getElementsByTagName('div')->first()->normalize();

        $this->assertCount(1, $document->getElementsByTagName('div')->first()->children);
    }

    public function test_hasChildNodes()
    {
        $document = Contender::loadStr('<div></div>');
        $this->assertFalse($document->getElementsByTagName('div')->first()->hasChildNodes());
        $document = Contender::loadStr('<div>nekodaisuki</div>');
        $this->assertTrue($document->getElementsByTagName('div')->first()->hasChildNodes());
    }
}
