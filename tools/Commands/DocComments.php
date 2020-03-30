<?php
/**
 * DocComments.php
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

namespace Tools\Contender\Commands;

use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionProperty;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DocComments
 *
 * @category   GitCommand
 * @package    Tools\Contender\Commands
 * @subpackage Core
 * @author     akito<akito-artisan@five-foxes.com>
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Git Live
 * @license    MIT
 * @version    GIT: $Id$
 * @link       https://github.com/Git-Live/git-live
 * @see        https://github.com/Git-Live/git-live
 * @since      2020/03/15
 */
class DocComments extends Command
{
    protected function configure()
    {
        $this
            ->setName('doc-comments')
            ->setDescription('Generate Doc Comments.')
            ->setHelp(
                <<<EOT
<info>Generate Getter Setter Doc Comments.</info>
<comment>get**Attribute to @property doc comments.</comment>
EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $res = get_declared_classes();
        $autoloaderClassName = '';
        foreach ($res as $className) {
            if (strpos($className, 'ComposerAutoloaderInit') === 0) {
                $autoloaderClassName = $className; // ComposerAutoloaderInit323a579f2019d15e328dd7fec58d8284 for me
                break;
            }
        }
        $classLoader = $autoloaderClassName::getLoader();

        foreach ($classLoader->getClassMap() as $clazz => $file) {
            if (strpos($clazz, 'Contender') !== 0) {
                continue;
            }

            $this->createDoc($clazz, $file);
        }

        return 0;
    }

    public function methodToAnntate(\ReflectionMethod $reflectionMethod, bool $is_static = false)
    {
        $res = ' * @method';
        if ($is_static) {
            $res .= ' static';
        }

        $retType = $reflectionMethod->getReturnType();

        if ($retType instanceof \ReflectionType) {
            $res .= ' ' ;

            if (!$retType->isBuiltin()) {
                $res .= '\\';
            }

            $res .= (string) $retType;
            if ($retType->allowsNull()) {
                $res .= '|null';
            }
        } elseif (preg_match('/@return +([^\s]+)/u', $reflectionMethod->getDocComment(), $return_annotate_match)) {
            $res .= ' ' . $return_annotate_match[1];
        }

        $res .= ' ' . $reflectionMethod->getName() . '(';

        foreach ($reflectionMethod->getParameters() as $key => $parameter) {
            if ($key !== 0) {
                $res .= ',';
            }
            if ($parameter->getType()) {
                $res .= ' ';

                if ($parameter->getType()->allowsNull()) {
                    $res .= '?';
                }
                if (!$parameter->getType()->isBuiltin()) {
                    $res .= '\\';
                }
                $res .= (string) $parameter->getType();
            }

            $res .= ' $' . $parameter->getName();
        }

        $res .= ')';

        return $res;
    }

    protected function createDoc($clazz, $file)
    {
        $ref = new ReflectionClass($clazz);

        $now_doc = $ref->getDocComment();

        throw_if($now_doc === false, \Exception::class);

        $getter = [];
        $setter = [];
        $method_annotates = [];
        foreach ($ref->getMethods() as $method) {
            $match = [];
            if (preg_match('/^get([A-Z].*)Attribute$/u', $method->name, $match)) {
                $getter[$match[1]] = $method;
            } elseif (preg_match('/^set([A-Z].*)Attribute$/u', $method->name, $match)) {
                $setter[$match[1]] = $method;
            }

            if (strpos($method->getDocComment(), '@public-call') !== false) {
                $method_annotates[$method->getName().'()'] = $this->methodToAnntate($method, false);
            }
            if (strpos($method->getDocComment(), '@public-static-call') !== false) {
                $method_annotates[$method->getName().'()'] = $this->methodToAnntate($method, true);
            }
        }

        $annotates = [];
        foreach ($getter as $match => $method) {
            $snake = Str::snake($match);
            $camel = Str::camel($match);

            $document = $method->getDocComment();
            $default_comment = '';
            if (preg_match('/@return +[^\s]+( [^\n]*)/u', $document, $return_annotate_match)) {
                $default_comment = ' ' . trim($return_annotate_match[1]);
            }

            $annotate = ' * @property';
            if (!isset($setter[$match])) {
                $annotate .= '-read';
            }
            $type = $this->makeTypeHint($method, $ref);

            $annotate .= ' ' . $type . ' ';

            $annotates[$camel] = $annotate . $camel . $default_comment;
            if ($camel !== $snake) {
                $annotates[$snake] = $annotate . $snake . $default_comment;
            }
        }

        if (preg_match_all('/@mixin +(.*)/u', $now_doc, $mixins)) {
            foreach ($mixins[1] as $mixin) {
                $mixinClass = new ReflectionClass($mixin);
                foreach ($mixinClass->getProperties(ReflectionProperty::IS_PUBLIC) as $refPro) {
                    if (isset($annotates[$refPro->name])) {
                        continue;
                    }
                    $annotate = ' * @property';
                    mb_ereg('@var ([^\n]*)', $refPro->getDocComment(), $match);

                    if (mb_ereg('@read-only', $refPro->getDocComment())) {
                        $annotate .= '-read';
                    }

                    $annotate .= ' ';

                    $match = preg_split('/ +/', ($match[1] ?? ''));
                    $annotate .= (trim($match[0]) ?: 'mixin') . ' ' . $refPro->name . ' ';

                    mb_ereg(' \\* ([^@\n]+)', $refPro->getDocComment(), $match);

                    $annotates[$refPro->name] = $annotate . ($match[1] ?? '');
                }
                foreach ($mixinClass->getMethods() as $reflectionMethod) {
                    $method_annotates[$reflectionMethod->getName() . '()'] = $this->methodToAnntate($reflectionMethod, $reflectionMethod->isStatic());
                }
            }
        }

        ksort($annotates);
        ksort($method_annotates);

        $annotates = array_merge($annotates, $method_annotates);
        if (count($annotates) === 0) {
            return;
        }

        $replacement_doc = preg_replace('/ \* @(property|method)(-read)? .*?\n/u', '', $now_doc);
        $replacement_doc = mb_eregi_replace(' \* @method? .*?\n', '', $replacement_doc);
        $replacement_doc = str_replace("\n */", "\n" . implode("\n", $annotates) . "\n */", $replacement_doc);

        dump($file);
        file_put_contents($file, str_replace($now_doc, $replacement_doc, file_get_contents($file)));
    }

    /**
     * @param \ReflectionMethod $method
     * @param \ReflectionClass $clazz
     * @return mixed|string
     */
    public function makeTypeHint(\ReflectionMethod $method, ReflectionClass $clazz)
    {
        $document = $method->getDocComment();
        $default_type = 'mixed';
        if (preg_match('/@return +([^\s]+)/u', $document, $return_annotate_match)) {
            $default_type = $return_annotate_match[1];
        }

        $type = $method->getReturnType();
        if (!$type) {
            return $default_type;
        }

        if ($type->isBuiltin()) {
            $res = $type->getName() ?: $default_type;
        } elseif ($type->getName() === 'self') {
            if (!$clazz->isTrait()) {
                $res = '\\' . $clazz->getName();
            } else {
                $res = 'self';
            }
        } else {
            $res = '\\' . $type->getName();
        }

        if ($type->allowsNull()) {
            $res .= '|null';
        }

        return $res;
    }
}
