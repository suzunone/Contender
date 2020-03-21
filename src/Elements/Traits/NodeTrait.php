<?php
/**
 * NodeTrait.php
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Elements\Traits;

use DOMNode;
use Contender\Elements\Node;

/**
 * Trait NodeTrait
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */
trait NodeTrait
{
    /**
     * @param $name
     * @return string
     */
    public function attr(...$name): string
    {
        if (count($name) === 1) {
            return $this->element->getAttribute($name[0]);
        }

        $this->element->setAttribute($name[0], $name[1]);
    }

    /**
     * @param \DOMNode|null $element
     * @return Node|null
     */
    public function createNode(?DOMNode $element): ?Node
    {
        if ($element === null) {
            return $element;
        }
        return new Node($element);
    }
}
