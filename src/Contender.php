<?php
/**
 * Contender.php
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
 * Class Contender
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
    /**
     * Activate small nodes allocation optimization. This may speed up your application without needing to change the code.
     */
    const OPTION_COMPACT = 'LIBXML_COMPACT';

    /**
     * Remove blank nodes
     */
    const OPTION_NOBLANKS = 'LIBXML_NOBLANKS';

    /**
     * Merge CDATA as text nodes
     */
    const OPTION_NOCDATA = 'LIBXML_NOCDATA';

    /**
     * Expand empty tags (e.g. <br/> to <br></br>)
     */
    const OPTION_NOEMPTYTAG = 'LIBXML_NOEMPTYTAG';

    /**
     * Substitute entities
     */
    const OPTION_NOENT = 'LIBXML_NOENT';

    /**
     * Disable network access when loading documents
     */
    const OPTION_NONET = 'LIBXML_NONET';

    /**
     * Force to UTF -8 encoding
     */
    const OPTION_CONVERT_ENCODE = 'CONVERT_ENCODE';
    const OPTION_CONVERT_NO_ENCODE = 'CONVERT_NO_ENCODE';

    /**
     * Change charset<meta>tag when {@link \Contender\Contender::OPTION_CONVERT_ENCODE} option is enabled
     */
    const OPTION_CONVERT_REPLACE_CHARSET = 'OPTION_CONVERT_REPLACE_CHARSET';
    const OPTION_CONVERT_NO_REPLACE_CHARSET = 'OPTION_CONVERT_NO_REPLACE_CHARSET';

    /**
     * Nicely formats output with indentation and extra space.
     */
    const OPTION_FORMAT_OUTPUT_ENABLE = 'OPTION_FORMAT_OUTPUT_ENABLE';
    const OPTION_FORMAT_OUTPUT_DISABLE = 'OPTION_FORMAT_OUTPUT_DISABLE';

    /**
     * Minify html, then generating to {@link \Contender\Elements\Document}(Default:Enabled)
     */
    const OPTION_MINIFY_ENABLE = 'OPTION_MINIFY_ENABLE';
    const OPTION_MINIFY_DISABLE = 'OPTION_MINIFY_DISABLE';

    /**
     * Remove <style>tags, then generating to {@link \Contender\Elements\Document}
     */
    const OPTION_REMOVE_STYLE_ENABLE = 'OPTION_REMOVE_STYLE_ENABLE';
    const OPTION_REMOVE_STYLE_DISABLE = 'OPTION_REMOVE_STYLE_DISABLE';

    /**
     * Remove <script>tags, then generating to {@link \Contender\Elements\Document}
     */
    const OPTION_REMOVE_SCRIPT_ENABLE = 'OPTION_REMOVE_SCRIPT_ENABLE';
    const OPTION_REMOVE_SCRIPT_DISABLE = 'OPTION_REMOVE_SCRIPT_DISABLE';

    /**
     * Remove <comment>tags, then generating to {@link \Contender\Elements\Document}
     */
    const OPTION_REMOVE_COMMENT_ENABLE = 'OPTION_REMOVE_COMMENT_ENABLE';
    const OPTION_REMOVE_COMMENT_DISABLE = 'OPTION_REMOVE_COMMENT_DISABLE';

    /**
     * Default libxml options
     */
    public const DEFAULT_LIBXML_OPTION = LIBXML_BIGLINES | LIBXML_NOERROR | LIBXML_NOXMLDECL | LIBXML_NOWARNING;

    protected $options = [];

    protected $is_encode = false;
    protected $is_replace_charset = true;
    protected $format_output = false;
    protected $is_minify = true;
    protected $is_style_remove = false;
    protected $is_script_remove = false;
    protected $is_comment_remove = false;

    /**
     * Contender constructor.
     */
    public function __construct()
    {
        libxml_use_internal_errors(true);
    }

    /**
     * Options for converting Html to ContenderDocument
     *
     * @param string $option Contender option const.
     * @return $this
     */
    public function setOption(string $option): self
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
            case self::OPTION_CONVERT_REPLACE_CHARSET:
                $this->is_replace_charset = true;
                break;
            case self::OPTION_CONVERT_NO_REPLACE_CHARSET:
                $this->is_replace_charset = false;
                break;
            case self::OPTION_FORMAT_OUTPUT_ENABLE:
                $this->format_output = true;
                break;
            case self::OPTION_FORMAT_OUTPUT_DISABLE:
                $this->format_output = false;
                break;
            case self::OPTION_MINIFY_ENABLE:
                $this->is_minify = true;
                break;
            case self::OPTION_MINIFY_DISABLE:
                $this->is_minify = false;
                break;
            case self::OPTION_REMOVE_STYLE_ENABLE:
                $this->is_style_remove = true;
                break;
            case self::OPTION_REMOVE_STYLE_DISABLE:
                $this->is_style_remove = false;
                break;
            case self::OPTION_REMOVE_SCRIPT_ENABLE:
                $this->is_script_remove = true;
                break;
            case self::OPTION_REMOVE_SCRIPT_DISABLE:
                $this->is_script_remove = false;
                break;

            case self::OPTION_REMOVE_COMMENT_ENABLE:
                $this->is_comment_remove = true;
                break;
            case self::OPTION_REMOVE_COMMENT_DISABLE:
                $this->is_comment_remove = false;
                break;
        }

        return $this;
    }

    /**
     * Calls {@link \Contender\Contender::setOption()} as an array
     *
     * @param array $options Array multiple Contender option constants
     * @return $this
     * @link \Contender\Contender::setOption()
     */
    public function setOptions(array $options): self
    {
        foreach ($options as $option) {
            $this->setOption($option);
        }

        return $this;
    }

    /**
     * Generate a {@link \Contender\Elements\Document} from a string
     *
     * @param string $html  The string containing the HTML.
     * @param array $options Array multiple Contender option constants
     * @return \Contender\Elements\Document
     */
    public function load(string $html, array $options = []): Document
    {
        $this->setOptions($options);
        if ($this->is_encode) {
            $html = $this->toUTF8($html);
        }

        $html = $this->completeHtmlTag($html);

        $doc = new DOMDocument();
        if ($this->is_encode) {
            $doc->encoding = 'UTF-8';
        }
        $doc->formatOutput = $this->format_output;
        $doc->substituteEntities = false;

        if ($this->is_minify) {
            $html = preg_replace('/[ \t]+/', ' ', $html);
        }

        $doc->loadHTML($html, $this->options());

        $doc = $this->cleanUpDom($doc);

        return new Document($doc);
    }

    /**
     * Complete <html> and <body> tags.
     * @param string $html
     * @return string
     */
    protected function completeHtmlTag(string $html): string
    {
        if (strpos($html, '</body>') === false) {
            $html = "<body>{$html}</body>";
        }

        if (strpos($html, '</html>') === false) {
            $internal_encoding = mb_internal_encoding();
            $html = /** @lang html */
                <<<HTML
<!DOCTYPE html>
<html>
<head>
<meta charset="{$internal_encoding}">
<meta http-equiv="Content-Type" content="text/html; charset={$internal_encoding}">
</head>
{$html}
</html>
HTML;
        }

        return $html;
    }

    /**
     * Clean dom according to configured options
     *
     * @param \DOMDocument $dom
     * @return \DOMDocument
     */
    protected function cleanUpDom(DOMDocument $dom): DOMDocument
    {
        if ($this->is_comment_remove) {
            $dom = $this->removeComment($dom);
        }
        if ($this->is_style_remove) {
            $dom = $this->removeStyle($dom);
        }
        if ($this->is_script_remove) {
            $dom = $this->removeScript($dom);
        }

        return $dom;
    }

    /**
     * Remove html comment
     *
     * @param \DOMDocument $dom
     * @return \DOMDocument
     */
    protected function removeComment(DOMDocument $dom): DOMDocument
    {
        return $this->removeFromXPath('//comment()', $dom);
    }

    /**
     * Remove <style> tags
     *
     * @param \DOMDocument $dom
     * @return \DOMDocument
     */
    protected function removeStyle(DOMDocument $dom): DOMDocument
    {
        return $this->removeFromXPath('//style', $dom);
    }

    /**
     * Remove <script> tags
     *
     * @param \DOMDocument $dom
     * @return \DOMDocument
     */
    protected function removeScript(DOMDocument $dom): DOMDocument
    {
        return $this->removeFromXPath('//script', $dom);
    }

    /**
     * Removes a DomNode by specifying an Xpath
     *
     * @param string $path
     * @param \DOMDocument $dom
     * @return \DOMDocument
     */
    protected function removeFromXPath(string $path, DOMDocument $dom): DOMDocument
    {
        $xpath = new \DOMXPath($dom);
        $items = $xpath->query($path);
        if ($items === false) {
            return $dom;
        }

        foreach ($items as $node) {
            $node->parentNode->removeChild($node);
        }

        return $dom;
    }

    /**
     * Generate a {@link \Contender\Elements\Document}  from a URL
     *
     * @param string $url The path to the HTML document.
     * @param array $options Array multiple Contender option constants
     * @param array|null $context_option Context options
     * @return \Contender\Elements\Document
     * @link https://www.php.net/manual/en/context.php
     */
    public function loadFromUrl(string $url, array $options = [], ?array $context_option = null)
    {
        $context = stream_context_create($context_option);

        $html = file_get_contents($url, false, $context);

        return $this->load($html, $options);
    }

    /**
     * Generate a {@link \Contender\Elements\Document}  from a string(static call)
     *
     * @param string $html The string containing the HTML.
     * @param array $options  Array multiple Contender option constants
     * @return \Contender\Elements\Document
     */
    public static function loadStr(string $html, array $options = []): Document
    {
        $contender = new self();

        return $contender->load($html, $options);
    }

    /**
     * Generate a {@link \Contender\Elements\Document}  from a URL(static call)
     *
     * @param string $url The path to the HTML document.
     * @param array $options Array multiple Contender option constants
     * @param array|null $context_option Context options
     * @return \Contender\Elements\Document
     * @link https://www.php.net/manual/en/context.php
     */
    public static function loadUrl(string $url, array $options = [], ?array $context_option = null): Document
    {
        $contender = new self();

        return $contender->loadFromUrl($url, $options, $context_option);
    }

    /**
     * Generate options for libxml
     *
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

    /**
     * Convert character codes to UTF-8
     *
     * @param string $html The string containing the HTML.
     * @return string
     */
    protected function toUTF8(string $html): string
    {
        $doc = new DOMDocument();
        $doc->loadHTML($html, self::DEFAULT_LIBXML_OPTION);
        $xpath = new \DOMXPath($doc);
        $items = $xpath->query('//head/meta[@charset]');
        $match = [];

        $is_add_meta = true;

        if (!$items || $items->count() === 0) {
            if (mb_ereg('<\?xml version="1.0" encoding="([^"]*)"\?>', $html, $match)) {
                $encode = $match[1];
            } else {
                $encode = mb_detect_encoding($html);
            }
        } else {
            //$is_add_meta = true;
            $item = $items->item(0);
            $encode = $item->getAttribute('charset');
        }
        $encode = strtolower($encode);
        if ($encode === 'utf8' || $encode === 'utf-8') {
            if ($is_add_meta) {
                $html = mb_ereg_replace('</head>', '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>', $html);
            }

            return $html;
        }

        if ($encode === 'sjis' || $encode === 'shift_jis' || $encode === 'shift-jis') {
            $encode = 'sjis-win';
        }

        if ($encode === '') {
            $encode = 'sjis-win,utf-8,euc-jp';
        }

        $html = mb_convert_encoding($html, 'utf8', $encode);
        if ($this->is_replace_charset) {
            $html = mb_eregi_replace('charset=[^ "\']+', 'charset=utf-8', $html);
            $html = mb_eregi_replace('encoding="[^"]*"', 'encoding="utf-8"', $html);
        }

        if ($is_add_meta) {
            $html = mb_ereg_replace('</head>', '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>', $html);
        }

        return $html;
    }
}
