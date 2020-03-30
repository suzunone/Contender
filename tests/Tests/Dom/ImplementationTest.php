<?php
/**
 * ImplementationTest.php
 *
 * Class ImplementationTest
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
 * @since      2020/03/31
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Dom\Implementation;
use PHPUnit\Framework\TestCase;

/**
 * Class ImplementationTest
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
 * @since      2020/03/31
 * @covers     \Contender\Service\Factory
 * @covers     \Contender\Dom\Implementation
 * @covers     \Contender\Dom\Document
 * @covers     \Contender\Dom\Implementation\Driver
 */
class ImplementationTest extends TestCase
{
    public function dataProvider()
    {
        return [
            'Core'           => ['Core', false],
            'XML'            => ['XML', true],
            'HTML'           => ['HTML', false],
            'Views'          => ['Views', false],
            'Stylesheets'    => ['Stylesheets', false],
            'CSS'            => ['CSS', false],
            'CSS2'           => ['CSS2', false],
            'Events'         => ['Events', false],
            'UIEvents'       => ['UIEvents', false],
            'MouseEvents'    => ['MouseEvents', false],
            'MutationEvents' => ['MutationEvents', false],
            'HTMLEvents'     => ['HTMLEvents', false],
            'Range'          => ['Range', false],
            'Traversal'      => ['Traversal', false],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testHasFeature($feature, $expect)
    {
        $this->assertEquals($expect, Implementation::hasFeature($feature, '2.0'));

        $Implementation = new Implementation();
        $this->assertEquals($expect, $Implementation->hasFeature($feature, '2.0'));
    }

    public function testCreateHTMLDocument()
    {
        $document = Implementation::createHTMLDocument();

        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title></head></html>
', (string) $document);

        $document = Implementation::createHTMLDocument('Example Title:○○○');

        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Example Title:○○○</title></head></html>
', (string) $document);
    }

    public function testCreateDocument()
    {
    }
}
