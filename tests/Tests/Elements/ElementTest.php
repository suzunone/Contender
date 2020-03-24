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
use Mockery\Mock;
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
 * @covers \Contender\Contender
 * @covers \Contender\Elements\Document
 * @covers \Contender\Elements\Node
 * @covers \Contender\Elements\Element
 * @covers \Contender\Elements\Collection
 * @covers \Contender\Elements\Traits\GetterTrait
 * @covers \Contender\Elements\Traits\MutationTrait
 * @covers \Contender\Elements\Traits\ElementTrait
 * @covers \Contender\Elements\Traits\NodeTrait
 */
class ElementTest extends TestCase
{

    public function test_getAttributeNames()
    {
        $document = Contender::loadStr('<div>
<a href="#aaa" class="touch btn-success btn btn-large" id="link1" title="here" aria-disabled="">
here</a></div>');

        $element = $document->getElementsByTagName('a')->first();

        if ($element->getAttributeNames()) {
            dump(iterator_to_array($element->getAttributeNames()));
        }
    }
}
