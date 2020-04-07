<?php
/**
 * EntityTest.php
 *
 * Class EntityTest
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
 * @since      2020/04/07
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\Entity;
use PHPUnit\Framework\TestCase;

/**
 * Class EntityTest
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
 * @since      2020/04/08
 * @covers \Contender\Dom\Entity
 * @covers \Contender\Contender
 * @covers \Contender\Service\Factory
 */
class EntityTest extends TestCase
{
    public function test_Entity()
    {
        $xml = Contender::loadStr('<!DOCTYPE author [
  <!ELEMENT author (#PCDATA)>
  <!ENTITY email "hogehoge@jone.smith">
  <!ENTITY js "Jone Smith &email;">
]>
<author>&js;</author>', [Contender::OPTION_FROM_XML_ENABLE]);

        /**
         * @var \Contender\Dom\DocumentType $type
         */
        $type = $xml->children->first();

        $this->assertInstanceOf(Entity::class, $type->entities->first());
        $this->assertEquals('<author>Jone Smith hogehoge@jone.smith</author>', $xml->children->last()->outerXML);
    }
}
