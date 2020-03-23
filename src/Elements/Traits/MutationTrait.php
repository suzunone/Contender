<?php
/**
 * MutationTrait.php
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Elements\Traits;

use Illuminate\Support\Str;

/**
 * Trait MutationTrait
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @hideDoc
 */
trait MutationTrait
{
    protected $attribute = [];

    /**
     * @param $name
     * @return mixed|string
     * @hideDoc
     */
    public function __get($name)
    {
        if (method_exists($this, $this->mutateGetAttributeName($name))) {
            return $this->mutateGetAttribute($name, $this->attribute[$name] ?? null);
        }

        return $this->getAttribute($name);
    }

    /**
     * @param $name
     * @param $value
     * @hideDoc
     */
    public function __set($name, $value)
    {
        if (method_exists($this, $this->mutateSetAttributeName($name))) {
            $this->mutateSetAttribute($name, $value);

            return;
        }

        $this->setAttribute($name, $value);
    }

    /**
     * @param $name
     * @return bool
     * @hideDoc
     */
    public function __isset($name)
    {
        return method_exists($this, $this->mutateGetAttributeName($name)) || $this->hasAttribute($name);
    }

    /**
     * @param $key
     * @return string
     */
    protected function mutateGetAttributeName($key): string
    {
        return 'get' . Str::studly($key) . 'Attribute';
    }

    /**
     * @param $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateGetAttribute($key, $value = null)
    {
        return $this->{$this->mutateGetAttributeName($key)}($value);
    }

    /**
     * @param $key
     * @return string
     */
    protected function mutateSetAttributeName($key): string
    {
        return 'set' . Str::studly($key) . 'Attribute';
    }

    /**
     * @param $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateSetAttribute($key, $value = null)
    {
        return $this->{$this->mutateSetAttributeName($key)}($value);
    }
}
