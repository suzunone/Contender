<?php
/**
 * CssSelector2XPathTrait.php
 *
 * @category   Contender
 * @package    Contender\Dom\Traits
 * @subpackage Contender\Dom\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Dom\Traits;

use Symfony\Component\CssSelector\CssSelectorConverter;

/**
 * Trait CssSelector2XPathTrait
 *
 * @category   Contender
 * @package    Contender\Dom\Traits
 * @subpackage Contender\Dom\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @hideDoc
 */
trait CssSelector2XPathTrait
{
    /**
     * @param string $css_selector
     * @param string $prefix
     * @return string
     * @hideDoc
     */
    public function cssSelector2XPath(string $css_selector, string $prefix = 'descendant-or-self::'): string
    {
        $converter = new CssSelectorConverter();

        return $converter->toXPath($css_selector, $prefix);
    }
}
