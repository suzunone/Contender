<?php
/** @noinspection ReturnTypeCanBeDeclaredInspection */
/** @noinspection PhpDocSignatureInspection */

/**
 * DOMImplementation.php
 *
 * Class DOMImplementation
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
 */

namespace Contender\DummyMixin;

use Contender\Dom\DocumentType;

/**
 * Class DOMImplementation
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
class DOMImplementation
{
    /**
     * Test if the DOM implementation implements a specific feature
     * @link  https://php.net/manual/en/domimplementation.hasfeature.php
     * @link  https://www.w3.org/TR/2000/REC-DOM-Level-2-Core-20001113/introduction.html#ID-Conformance
     * @param string $feature The feature to test.
     * @param string $version The version number of the feature to test. In level 2, this can be either 2.0 or 1.0.
     * @return void true on success or false on failure.
     * @since 5.0
     */
    public static function hasFeature(string $feature, string $version): void
    {
    }

    /**
     * Creates an empty DOMDocumentType object
     * @link  https://php.net/manual/en/domimplementation.createdocumenttype.php
     * @param string|null $qualifiedName [optional] The qualified name of the document type to create.
     * @param string|null $publicId      [optional] The external subset public identifier.
     * @param string|null $systemId      [optional] The external subset system identifier.
     * @return void A new DOMDocumentType node with its ownerDocument set to &null;.
     * @since 5.0
     */
    public static function createDocumentType(string $qualifiedName = null, string $publicId = null, string $systemId = null): void
    {
    }

    /**
     * The DOMImplementation.createHTMLDocument() method creates a new HTML
     *
     * @param string|null $title
     * @return void
     */
    public static function createHTMLDocument(string $title = null): void
    {
    }

    /**
     * Creates a DOMDocument object of the specified type with its document element
     * @link  https://php.net/manual/en/domimplementation.createdocument.php
     * @param string|null $namespaceURI                 [optional] The namespace URI of the document element to create.
     * @param string|null $qualifiedName                [optional]The qualified name of the document element to create.
     * @param \Contender\Dom\DocumentType $doctype [optional] The type of document to create or &null;.
     * @return void A new DOMDocument object. If namespaceURI, qualifiedName, and doctype are null, the returned DOMDocument is empty with no document element
     * @since 5.0
     */
    public static function createDocument(string $namespaceURI = null, string $qualifiedName = null, DocumentType $doctype = null): void
    {
    }
}
