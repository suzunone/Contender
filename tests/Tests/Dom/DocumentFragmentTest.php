<?php
/**
 * DocumentFragmentTest.php
 *
 * Class DocumentFragmentTest
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
 * @since      2020/03/29
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\DocumentFragment;
use PHPUnit\Framework\TestCase;

/**
 * Class DocumentFragmentTest
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
 * @since      2020/03/29
 * @covers \Contender\Dom\DocumentFragment
 * @covers \Contender\Service\Factory
 * @covers \Contender\Contender
 * @covers \Contender\Dom\Document
 */
class DocumentFragmentTest extends TestCase
{
    public function test_appendXML()
    {
        $document = Contender::loadStr('<div></div>');

        $fragment = $document->createDocumentFragment();
        $fragment->appendXML('<h1>Header</h1><section><p>section text</p><span>○△□</span></section>');

        $document->querySelector('div')->appendChild($fragment);

        $this->assertEquals('<body><div><h1>Header</h1><section><p>section text</p><span>○△□</span></section></div></body>', (string) $document->body);
    }
}
