<?php
/**
 * EntityReferenceTest.php
 *
 * Class EntityReferenceTest
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
use Contender\Dom\EntityReference;
use PHPUnit\Framework\TestCase;

class EntityReferenceTest extends TestCase
{

    public function test_get()
    {
        $document = Contender::loadStr('<div></div>');

        $entityRef = $document->createEntityReference('amp');

        $document->querySelector('div')->insertBefore($entityRef);


        $this->assertInstanceOf(EntityReference::class, $entityRef);



        $this->assertEquals('&amp;', (string)$entityRef);

        $entityRef = $document->querySelector('div')->children[0];

        $this->assertInstanceOf(EntityReference::class, $entityRef);

    }

}
