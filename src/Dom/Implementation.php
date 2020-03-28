<?php
/**
 * Implementation.php
 *
 * Class Implementation
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
 * @since      2020/03/28
 */

namespace Contender\Dom;

use Contender\Service\Factory;

/**
 * Class Implementation
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
 * @since      2020/03/28
 * @isdoc
 * @mixin \Contender\DummyMixin\DOMImplementation
 */
class Implementation
{
    /**
     * @var \DOMImplementation
     */
    protected $element;

    /**
     * Node constructor.
     *
     * @param \DOMImplementation $element
     * @return void
     */
    public function __construct(\DOMImplementation $element)
    {
        $this->element = $element;
    }

    /**
     * Test if the DOM implementation implements a specific feature
     * @link  https://php.net/manual/en/domimplementation.hasfeature.php
     * @param string $feature The feature to test.
     * @param string $version The version number of the feature to test. In level 2, this can be either 2.0 or 1.0.
     * @return bool true on success or false on failure.
     * @since 5.0
     */
    public function hasFeature($feature, $version)
    {
        return $this->element->hasFeature($feature, $version);
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
    public function createDocumentType($qualifiedName = null, $publicId = null, $systemId = null)
    {
        return Factory::get($this->element->createDocumentType($qualifiedName, $publicId, $systemId), $this);
    }

    /**
     * Creates a DOMDocument object of the specified type with its document element
     * @link  https://php.net/manual/en/domimplementation.createdocument.php
     * @param string $namespaceURI     [optional] The namespace URI of the document element to create.
     * @param string $qualifiedName    [optional]The qualified name of the document element to create.
     * @param \Contender\Dom\DocumentType $doctype [optional] The type of document to create or &null;.
     * @return \Contender\Dom\Document A new DOMDocument object. If namespaceURI, qualifiedName, and doctype are null, the returned DOMDocument is empty with no document element
     * @since 5.0
     */
    public function createDocument($namespaceURI = null, $qualifiedName = null, ?DocumentType $doctype = null)
    {
        return Factory::get($this->element->createDocument($namespaceURI, $qualifiedName, $doctype), $this);
    }
}
