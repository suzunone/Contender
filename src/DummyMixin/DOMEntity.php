<?php
/**
 * DOMEntity.php
 *
 * Class DOMEntity
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
 * Class DOMEntity
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
 * @see        \DOMEntity
 * @codeCoverageIgnore
 * @hideDoc
 */
class DOMEntity extends DOMNode
{
    /**
     * @var string|null
     * @since 5.0
     * The public identifier associated with the entity if specified, and NULL otherwise.
     * @link  https://php.net/manual/en/class.domentity.php#domentity.props.publicid
     */
    public ?string $publicId;

    /**
     * @var string|null
     * @since 5.0
     * The system identifier associated with the entity if specified, and NULL otherwise. This may be an
     * absolute URI or not.
     * @link  https://php.net/manual/en/class.domentity.php#domentity.props.systemid
     */
    public ?string $systemId;

    /**
     * @var string|null
     * @since 5.0
     * For unparsed entities, the name of the notation for the entity. For parsed entities, this is NULL.
     * @link  https://php.net/manual/en/class.domentity.php#domentity.props.notationname
     */
    public ?string $notationName;

    /**
     * @var string|null
     * @since 5.0
     * An attribute specifying the encoding used for this entity at the time of parsing, when it is an external
     * parsed entity. This is NULL if it an entity from the internal subset or if it is not known.
     * @link  https://php.net/manual/en/class.domentity.php#domentity.props.actualencoding
     */
    public ?string $actualEncoding;

    /**
     * @var string|null
     * @since 5.0
     * An attribute specifying, as part of the text declaration, the encoding of this entity, when it is an external
     * parsed entity. This is NULL otherwise.
     * @link  https://php.net/manual/en/class.domentity.php#domentity.props.encoding
     */
    public ?string $encoding;

    /**
     * @var string|null
     * @since 5.0
     * An attribute specifying, as part of the text declaration, the version number of this entity, when it is an
     * external parsed entity. This is NULL otherwise.
     * @link  https://php.net/manual/en/class.domentity.php#domentity.props.version
     */
    public ?string $version;
}
