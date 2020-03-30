<?php
/**
 * CommentTest.php
 *
 * Class CommentTest
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
 * @since      2020/03/30
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\Comment;
use PHPUnit\Framework\TestCase;

/**
 * Class CommentTest
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
 * @since      2020/03/30
 * @covers \Contender\Dom\Comment
 * @covers \Contender\Service\Factory
 */
class CommentTest extends TestCase
{
    public function test_factory()
    {
        $document = Contender::loadStr('<div><!-- hoge --></div>');
        $element = $document->querySelector('div');
        $this->assertInstanceOf(Comment::class, $element->firstChild);
    }
}
