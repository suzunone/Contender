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

use Contender\Dom\Implementation\Driver;
use Contender\Service\Factory;
use DOMImplementation;

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
 * @method static \Contender\Dom\Document createDocument( $namespaceURI, $qualifiedName, ?\Contender\Dom\DocumentType $doctype)
 * @method static \Contender\Dom\DocumentType createDocumentType( $qualifiedName, $publicId, $systemId)
 * @method static \Contender\Dom\Document createHTMLDocument( ?string $title)
 * @method static bool hasFeature( $feature, $version)
 */
class Implementation
{
    /**
     * @var \Contender\Dom\Implementation\Driver
     */
    protected $Driver;

    /**
     * Implementation constructor.
     * @param \DOMImplementation|null $implementation
     */
    public function __construct(?DOMImplementation $implementation = null)
    {
        $this->Driver = new Driver($implementation);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @hideDoc
     */
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([new Driver(),  $name], $arguments);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @hideDoc
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->Driver,  $name], $arguments);
    }
}
