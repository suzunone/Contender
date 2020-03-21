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
     * if call attr('name')
     * Alias getAttr()
     *
     * if call attr('name', 'value')
     * Alias setAttr()
     *
     * @param ...$name
     * @return string|null
     */
    public function attr(...$name): ?string
    {
        if (count($name) === 1) {
            return $this->getAttr($name[0]);
        }

        $this->setAttr($name[0], $name[1]);

        return null;
    }

    /**
     * get tag attribute for element.
     *
     * @param string $name
     * @return mixed
     */
    public function getAttr(string $name)
    {
        return $this->element->getAttribute($name);
    }

    /**
     * set tag attribute for element.
     *
     * @param string $name
     * @param string $value
     */
    public function setAttr(string $name, string $value)
    {
        $this->element->setAttribute($name, $value);
    }

    /**
     * Create {@link \Contender\Elements\Node} From \DomNode
     *
     * @param \DOMNode|null $element
     * @return Node|null
     * @hideDoc
     */
    public function createNode(?DOMNode $element): ?Node
    {
        if ($element === null) {
            return $element;
        }

        return new Node($element);
    }
}
