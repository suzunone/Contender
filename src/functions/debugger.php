<?php
/**
 * debugger.php
 *
 * @category   GitCommand
 * @package    Git-Live
 * @subpackage Core
 * @author     akito<akito-artisan@five-foxes.com>
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Git Live
 * @license    MIT
 * @version    GIT: $Id$
 * @link       https://github.com/Git-Live/git-live
 * @see        https://github.com/Git-Live/git-live
 * @since      2020/03/14
 */
if (!function_exists('dump')) {
    function dump($val)
    {
        if (class_exists(\Symfony\Component\VarDumper\VarDumper::class, false)) {
            \Symfony\Component\VarDumper\VarDumper::dump($val);

            return;
        }

        var_dump($val);
    }
}

if (!function_exists('dd')) {
    function dd($val)
    {
        dump($val);
        die;
    }
}
