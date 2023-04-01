<?php
/**
 * DomDocument.php
 *
 * Class DomDocument
 *
 * @category   Contender
 * @package    Contender\DummyMixin
 * @subpackage Contender\DummyMixin
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/27
 */

namespace Contender\DummyMixin;

use Contender\Dom\DocumentType;
use Contender\Dom\Element;
use Contender\Dom\Implementation;

/**
 * Class DomDocument
 *
 * @category   Contender
 * @package    Contender\DummyMixin
 * @subpackage Contender\DummyMixin
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/28
 * @codeCoverageIgnore
 * @hideDoc
 */
class DomDocument extends DOMNode
{
    /**
     * @var string
     * @read-only
     * Deprecated. Actual encoding of the document, is a readonly equivalent to encoding.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.actualencoding
     * @deprecated
     */
    public string $actualEncoding;

    /**
     * @read-only
     * This is a convenience attribute that allows direct access to the child node that is the document element of the document.
     * @var \Contender\Dom\Element
     */
    public Element $documentElement;

    /**
     * @read-only
     * The Document Type Declaration associated with this document.
     * @var \Contender\Dom\DocumentType
     */
    public DocumentType $doctype;

    /**
     * @var string|null
     * The location of the document or NULL if undefined.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.documenturi
     */
    public ?string $documentURI;

    /**
     * @var string
     * Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.encoding
     */
    public string $encoding;

    /**
     * @var bool
     * Nicely formats output with indentation and extra space.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.formatoutput
     */
    public bool $formatOutput;

    /**
     * The {@link \Contender\Dom\Implementation} object that handles this document.
     * @var \Contender\Dom\Implementation
     */
    public Implementation $implementation;

    /**
     * @var bool
     * Do not remove redundant white space. Default to TRUE.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.preservewhitespace
     */
    public bool $preserveWhiteSpace = true;

    /**
     * @var bool
     * Proprietary. Enables recovery mode, i.e. trying to parse non-well formed documents.This attribute is not part of the DOM specification and is specific to libxml.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.recover
     */
    public bool $recover;

    /**
     * @var bool
     * Set it to TRUE to load external entities from a doctype declaration. This is useful for including character entities in your XML document.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.resolveexternals
     */
    public bool $resolveExternals;

    /**
     * @var bool
     * Deprecated. Whether or not the document is standalone, as specified by the XML declaration,corresponds to xmlStandalone.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.standalone
     * @deprecated
     */
    public bool $standalone;

    /**
     * @var bool
     * Throws <classname>DOMException</classname> on errors. Default to TRUE.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.stricterrorchecking
     */
    public bool $strictErrorChecking = true;

    /**
     * @var bool
     * Proprietary. Whether or not to substitute entities. This attribute is not part of the DOMspecification and is specific to libxml.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.substituteentities
     */
    public bool $substituteEntities;

    /**
     * @var bool
     * Loads and validates against the DTD. Default to FALSE.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.validateonparse
     */
    public bool $validateOnParse = false;

    /**
     * @var string
     * Deprecated. Version of XML, corresponds to xmlVersion
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.version
     */
    public string $version;

    /**
     * @read-only
     * @var string
     * An attribute specifying, as part of the XML declaration, the encoding of this document. This is NULL whenunspecified or when it is not known, such as when the Document was created in memory.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.xmlencoding
     */
    public string $xmlEncoding;

    /**
     * @var bool
     * An attribute specifying, as part of the XML declaration, whether this document is standalone.This is FALSE when unspecified.
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.xmlstandalone
     */
    public bool $xmlStandalone;

    /**
     * @var string
     * An attribute specifying, as part of the XML declaration, the version number of this document. If there is nodeclaration and if this document supports the "XML" feature, the value is "1.0".
     * @link  https://php.net/manual/class.domdocument.php#domdocument.props.xmlversion
     */
    public string $xmlVersion;
}
