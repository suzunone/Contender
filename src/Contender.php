<?php
/**
 * DOM.php
 *
 * @category   Contender
 * @package    Contender
 * @subpackage Contender
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender;

use Contender\Elements\Document;
use DOMDocument;

/**
 * Class DOM
 *
 * @category   Contender
 * @package    Contender
 * @subpackage Contender
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */
class Contender
{
    public const DEFAULT_OPTION = [
        LIBXML_BIGLINES,
        LIBXML_NOERROR,
        LIBXML_NOXMLDECL,
    ];

    public $options;

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @param $string
     * @return \Contender\Elements\Document
     */
    public function load($string)
    {
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();

        $doc->loadHTML($string, $this->options());

        return new Document($doc);
    }

    /**
     * @return int
     */
    protected function options(): int
    {
        $options = $this->options ?? self::DEFAULT_OPTION;

        $option = 0;

        foreach ($options as $val) {
            $option = $option | $val;
        }

        return $option;
    }
}
