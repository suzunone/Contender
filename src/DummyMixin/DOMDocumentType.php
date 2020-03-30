<?php
/**
 * DOMDocumentType.php
 *
 * Class DOMDocumentType
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

/**
 * Class DOMDocumentType
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
class DOMDocumentType extends DOMNode
{
    /**
     * @var string
     * @since 5.0
     * The public identifier of the external subset.
     * @link  https://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.publicid
     */
    public $publicId;

    /**
     * @var string
     * @since 5.0
     * The system identifier of the external subset. This may be an absolute URI or not.
     * @link  https://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.systemid
     */
    public $systemId;

    /**
     * @var string
     * @since 5.0
     * The name of DTD; i.e., the name immediately following the DOCTYPE keyword.
     * @link  https://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.name
     */
    public $name;

    /**
     * @var \Contender\Dom\NamedNodeMap
     * @since 5.0
     * A {@link \Contender\Dom\NamedNodeMap} containing the general entities, both external and internal, declared in the DTD.
     * @link  https://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.entities
     */
    public $entities;

    /**
     * @var \Contender\Dom\NamedNodeMap
     * @since 5.0
     * A {@link \Contender\Dom\NamedNodeMap} containing the notations declared in the DTD.
     * @link  https://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.notations
     */
    public $notations;

    /**
     * @var string|null
     * @since 5.0
     * The internal subset as a string, or null if there is none. This is does not contain the delimiting square brackets.
     * @link  https://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.internalsubset
     */
    public $internalSubset;
}
