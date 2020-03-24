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
use Contender\Elements\Node;
use PHPUnit\Framework\TestCase;

/**
 * Class GetterTest
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
 * @covers \Contender\Elements\Element
 * @covers \Contender\Elements\Collection
 * @covers \Contender\Elements\Traits\GetterTrait
 * @covers \Contender\Elements\Traits\MutationTrait
 * @covers \Contender\Elements\Traits\ElementTrait
 * @covers \Contender\Elements\Traits\NodeTrait
 */
class NodeTest extends TestCase
{

    public function test_toString()
    {
        $document = Contender::loadStr('<div>test</div>');
        $parent = $document->querySelector('div');

        $this->assertEquals('<div>test</div>', (string)$parent);
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

        $this->assertEquals('<p>cccc<br/>ddd</p>', $document->querySelector('div')->innerXML);
        $this->assertEquals('<p>cccc<br>ddd</p>', $document->querySelector('div')->innerHTML);


    }
}
