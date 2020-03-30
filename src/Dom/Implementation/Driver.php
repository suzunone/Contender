<?php

namespace Contender\Dom\Implementation;

use Contender\Dom\Document;
use Contender\Dom\DocumentType;
use Contender\Service\Factory;
use DOMImplementation;

/**
 * Driver.php
 *
 * Class Driver
 *
 * @category   Contender
 * @subpackage ${NAMESPACE}
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/31
 * @hideDoc
 */
class Driver
{
    protected $implementation;

    /**
     * Implementation constructor.
     * @param \DOMImplementation|null $implementation
     */
    public function __construct(?DOMImplementation $implementation = null)
    {
        $this->implementation = $implementation ?? new DOMImplementation();
    }

    /**
     * Test if the DOM implementation implements a specific feature
     * @link  https://php.net/manual/en/domimplementation.hasfeature.php
     * @link  https://www.w3.org/TR/2000/REC-DOM-Level-2-Core-20001113/introduction.html#ID-Conformance
     * @param string $feature The feature to test.
     * @param string $version The version number of the feature to test. In level 2, this can be either 2.0 or 1.0.
     * @return bool true on success or false on failure.
     * @since 5.0
     */
    public function hasFeature($feature, $version): bool
    {
        return $this->implementation->hasFeature($feature, $version);
    }

    /**
     * Creates an empty DOMDocumentType object
     * @link  https://php.net/manual/en/domimplementation.createdocumenttype.php
     * @param string $qualifiedName [optional] The qualified name of the document type to create.
     * @param string $publicId      [optional] The external subset public identifier.
     * @param string $systemId      [optional] The external subset system identifier.
     * @return \Contender\Dom\DocumentType A new DOMDocumentType node with its ownerDocument set to &null;.
     * @since 5.0
     */
    public function createDocumentType($qualifiedName = null, $publicId = null, $systemId = null): ?DocumentType
    {
        return Factory::get($this->implementation->createDocumentType($qualifiedName, $publicId, $systemId), null);
    }

    /**
     * The DOMImplementation.createHTMLDocument() method creates a new HTML
     *
     * @param string|null $title
     * @return \Contender\Dom\Document
     */
    public function createHTMLDocument(string $title = null): Document
    {
        $document = $this->createDocument(
            null,
            'html',
            $this->createDocumentType(
                'html',
                '-//W3C//DTD XHTML 1.0 Transitional//EN',
                'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'
            )
        );
        $document->encoding = 'UTF-8';

        $node = $document->createDocumentFragment();
        $node->appendXML('<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title></head>');
        $document->querySelector('html')->insertBefore($node);

        if ($title !== null) {
            $text = $document->createTextNode($title);
            $document->querySelector('title')->insertBefore($text);
        }

        return $document;
    }

    /**
     * Creates a DOMDocument object of the specified type with its document element
     * @link  https://php.net/manual/en/domimplementation.createdocument.php
     * @param string $namespaceURI                 [optional] The namespace URI of the document element to create.
     * @param string $qualifiedName                [optional]The qualified name of the document element to create.
     * @param \Contender\Dom\DocumentType $doctype [optional] The type of document to create or &null;.
     * @return \Contender\Dom\Document A new DOMDocument object. If namespaceURI, qualifiedName, and doctype are null, the returned DOMDocument is empty with no document element
     * @since 5.0
     */
    public function createDocument($namespaceURI = null, $qualifiedName = null, DocumentType $doctype = null): Document
    {
        $type = null;
        if ($doctype instanceof DocumentType) {
            $type = $doctype->nativeNode();
        }

        return Factory::get($this->implementation->createDocument($namespaceURI, $qualifiedName, $type), null);
    }
}
