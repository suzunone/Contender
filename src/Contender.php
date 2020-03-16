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
    const OPTION_COMPACT = 'LIBXML_COMPACT';
    const OPTION_NOBLANKS = 'LIBXML_NOBLANKS';
    const OPTION_NOCDATA = 'LIBXML_NOCDATA';
    const OPTION_NOEMPTYTAG = 'LIBXML_NOEMPTYTAG';
    const OPTION_NOENT = 'LIBXML_NOENT';
    const OPTION_NONET = 'LIBXML_NONET';
    const OPTION_CONVERT_ENCODE = 'CONVERT_ENCODE';
    const OPTION_CONVERT_NO_ENCODE = 'CONVERT_NO_ENCODE';

    public const DEFAULT_LIBXML_OPTION = LIBXML_BIGLINES | LIBXML_NOERROR | LIBXML_NOXMLDECL | LIBXML_NOWARNING;

    protected $options = [];

    protected $is_encode = true;

    public function __construct()
    {
        libxml_use_internal_errors(true);
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options): self
    {
        foreach ($options as $option) {
            $this->setOption($option);
        }

        return $this;
    }

    public function setOption($option): self
    {
        switch ($option) {
            case self::OPTION_COMPACT:
                $this->options[LIBXML_COMPACT] = LIBXML_COMPACT;
                break;
            case self::OPTION_NOBLANKS:
                $this->options[LIBXML_NOBLANKS] = LIBXML_NOBLANKS;
                break;
            case self::OPTION_NOCDATA:
                $this->options[LIBXML_NOCDATA] = LIBXML_NOCDATA;
                break;
            case self::OPTION_NOEMPTYTAG:
                $this->options[LIBXML_NOEMPTYTAG] = LIBXML_NOEMPTYTAG;
                break;
            case self::OPTION_NOENT:
                $this->options[LIBXML_NOENT] = LIBXML_NOENT;
                break;
            case self::OPTION_NONET:
                $this->options[LIBXML_NONET] = LIBXML_NONET;
                break;
            case self::OPTION_CONVERT_NO_ENCODE:
                $this->is_encode = false;
                break;
            case self::OPTION_CONVERT_ENCODE:
                $this->is_encode = true;
                break;
        }
    }

    /**
     * @param string $html
     * @param array $options
     * @return \Contender\Elements\Document
     */
    public function load(string $html, array $options = []): Document
    {
        $this->setOptions($options);
        if ($this->is_encode) {
            $html = $this->toUTF8($html);
        }

        $doc = new DOMDocument();

        $doc->loadHTML($html, $this->options());

        return new Document($doc);
    }

    public function loadFromUrl(string $url, array $options = [], ?array $context_option = null)
    {
        $context = stream_context_create($context_option);

        $html = file_get_contents($url, false, $context);

        return $this->load($html, $options);
    }

    /**
     * @return int
     */
    protected function options(): int
    {
        $option = self::DEFAULT_LIBXML_OPTION;

        foreach ($this->options as $val) {
            $option |= $val;
        }

        return $option;
    }

    protected function toUTF8(string $html)
    {
        $doc = new DOMDocument();
        $doc->loadHTML($html, self::DEFAULT_LIBXML_OPTION);
        $xpath = new \DOMXPath($doc);
        $items = $xpath->query('//meta[@charset]');
        if (!$items || $items->count() === 0) {
            $encode = mb_detect_encoding($html);
        } else {
            $item = $items->item(0);
            $encode = $item->getAttribute('charset');
        }
        $encode = strtolower($encode);
        if ($encode === 'utf8' || $encode === 'utf-8') {
            return $html;
        }

        if ($encode === 'sjis' || $encode === 'shift_jis' || $encode === 'shift-jis') {
            $encode = 'sjis-win';
        }

        if ($encode === '') {
            $encode = 'sjis-win, utf-8,euc-jp';
        }

        return mb_convert_encoding($html, 'utf8', $encode);
    }
}
