<?php
/**
 * Kernel.php
 *
 * @category   GitCommand
 * @package    Git-Live
 * @subpackage Core
 * @author     akito<akito-artisan@five-foxes.com>
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Git Live
 * @license    MIT
 * @version    GIT: $
 * @link       https://github.com/Git-Live/git-live
 * @see        https://github.com/Git-Live/git-live
 * @since      2020/03/15
 */

namespace Tools\Contender;

use Tools\Contender\Commands\DocComments;

class Kernel
{
    public function app()
    {
        $app = [
            DocComments::class,
        ];

        return collect($app)
            ->mapWithKeys(function ($item) {
                return [(new $item())->getName() => function () use ($item) {
                    return new $item();
                }];
            })
            ->toArray();
    }
}
