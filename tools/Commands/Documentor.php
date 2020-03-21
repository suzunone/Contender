<?php
/**
 * Documentor.php
 *
 * Class Documentor
 *
 * @category   Contender
 * @package    Tools\Contender\Commands
 * @subpackage Tools\Contender\Commands
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/22
 */

namespace Tools\Contender\Commands;

use ReflectionClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Documentor extends Command
{
    protected function configure()
    {
        $this
            ->setName('doc-md')
            ->setDescription('Generate Doc Markdown.')
            ->setHelp(
                <<<EOT
<info>Generate Getter Setter Doc Markdown.</info>
<comment>Markdown document gen.</comment>
EOT
            );
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        file_put_contents(dirname(__DIR__, 2).'/doc.md', '');
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

    protected function createDoc($clazz, $file)
    {
        $class_stub = file_get_contents(__DIR__ . '/stub/class.md');

        $ref = new ReflectionClass($clazz);


        $now_doc = $ref->getDocComment();

        $parsed = $this->parseDocBlock($now_doc);
        if (!isset($parsed['isdoc'])) {
            return;
        }

        $DummyConst = implode('', $this->constStub($ref));
        $DummyProperties = implode('', $this->propertyStub($ref, $parsed));
        $DummyMethods = implode('', $this->methodStub($ref, $parsed));


        $class_stub = str_replace(
            [
                'DummyName',
                'DummyClassDescription',
                'DummyConst',
                'DummyProperties',
                'DummyMethods',
            ],
            [
                $ref->name,
                $parsed['description'],
                $DummyConst,
                $DummyProperties,
                $DummyMethods,
            ],
            $class_stub
        );

        file_put_contents(dirname(__DIR__, 2).'/doc.md', $class_stub, FILE_APPEND);
    }


    protected function methodStub(ReflectionClass $refClass, array $class_doc)
    {
        $res = [];
        foreach ($refClass->getMethods() as $refMethod) {
            if (!$refMethod->isPublic()) {
                continue;
            }

            if ($refMethod->getDeclaringClass()->getName() !== $refClass->getName()) {
                continue;
            }
            if (mb_ereg('^[gs]et.*Attribute$', $refMethod->getName())) {
                continue;
            }

            $stub_contents = file_get_contents(__DIR__ . '/stub/method.md');

            $doc = $this->parseDocBlock($refMethod->getDocComment());
            if (isset($doc['hideDoc'])) {
                continue;
            }

            $resType = $refMethod->getReturnType();
            if ($resType !== null) {
                $resType = (string)$refMethod->getReturnType() . ($refMethod->getReturnType()->allowsNull() ? '|null' : '');
            } else {
                $resType = 'mixed';
            }

            if (isset($doc['return'][0])) {
                [$resType,] = explode(' ', $doc['return'][0]);
            }

            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $refMethod->getName(),
                // 'DummyValue' => json_encode($refMethod->getValue()),
                'DummyReturnValues' => $doc['return'][0] ?? $resType,
                'DummyType' => $resType,
                'DummyTitle' => $doc['title'],
                'DummyDescription' => $doc['description'],
                'DummySeeAlso' => $this->createSeeAlso($doc['see'] ?? []),
                'DummyParameters' => $this->createMethodParameter($refMethod, $doc['param'] ?? []),
                'DummyProperties' => $this->createMethodProperties($refMethod, $doc['param'] ?? []),
            ];

            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }

        return $res;

    }

    public function createMethodProperties(\ReflectionMethod $reflectionMethod, array $before_params)
    {
        $res = '';
        foreach ($reflectionMethod->getParameters() as $key => $parameter) {
            if ($key !== 0) {
                $res .= ', ';
            }
            $res .= (string)($parameter->getType() ?? 'mixed');
            $res .= ($parameter->allowsNull() ? '|null' : '');
            $res .= ' ';
            $res .= '$' . $parameter->getName();
        }


        return $res;
    }

    /**
     * @param \ReflectionMethod $reflectionMethod
     * @param array $before_params
     * @return string
     */
    protected function createMethodParameter(\ReflectionMethod $reflectionMethod, array $before_params)
    {
        $params = [];
        foreach ($before_params as $key => $value) {
            [$type, $param, $description] = preg_split('/ +/', $value, 3);
            $params[$param] = compact('type', 'param', 'description');
        }

        $res = '';
        foreach ($reflectionMethod->getParameters() as $parameter) {
            $name = '$' . $parameter->getName();
            if (!isset($params[$name])) {
                $params[$name] = [
                    'type' => (string)($parameter->getType() ?? 'mixed'),
                    'param' => $name,
                    'description' => '',
                ];

                $params[$name]['type'] .= ($parameter->allowsNull() ? '|null' : '');
            }
            $res .= "##### `{$params[$name]['type']}` {$params[$name]['param']}\n\n{$params[$name]['description']}\n\n";
        }

        return $res;
    }

    protected function createSeeAlso(array $doc)
    {
        if (empty($doc)) {
            return 'None';
        }

        $res = '';

        foreach ($doc as $str) {
            if (mb_ereg('^https?://', $str)) {
                $res .= " - [$str]({$str})\n";
            } else {
                $res .= " - [$str](#{$str})\n";
            }
        }

        return $res;
    }


    protected function constStub(ReflectionClass $refClass)
    {
        $res = [];
        foreach ($refClass->getReflectionConstants() as $refConst) {
            $stub_contents = file_get_contents(__DIR__ . '/stub/const.md');

            $doc = $this->parseDocBlock($refConst->getDocComment());
            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $refConst->getName(),
                'DummyValue' => json_encode($refConst->getValue()),
                'DummyType' => gettype($refConst->getValue()),
                'DummyTitle' => $doc['title'],
                'DummyDescription' => $doc['description'],
            ];

            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }

        return $res;

    }


    protected function propertyStub(ReflectionClass $refClass, array $class_doc)
    {
        $res = [];
        foreach ($refClass->getProperties() as $refProperty) {
            if (!$refProperty->isPublic()) {
                continue;
            }

            $stub_contents = file_get_contents(__DIR__ . '/stub/property.md');

            $doc = $this->parseDocBlock($refProperty->getDocComment());


            [$type,] = explode(' ', $doc['var'][0] ?? '', 2);
            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $refProperty->getName(),
                'DummyType' => $type ?: 'mixed',
                'DummyTitle' => $doc['title'],
                'DummyDescription' => $doc['description'],
                'DummyReadOnly' => '',
            ];

            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }

        foreach ($class_doc['property-read'] ?? [] as $item) {
            $stub_contents = file_get_contents(__DIR__ . '/stub/property.md');
            [$type, $name, $title] = explode(' ', $item, 3);


            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $name,
                'DummyType' => $type ?: 'mixed',
                'DummyTitle' => $title ?? '',
                'DummyDescription' => '',
                'DummyReadOnly' => '__read only__',
            ];

            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }

        foreach ($class_doc['property'] ?? [] as $item) {
            $stub_contents = file_get_contents(__DIR__ . '/stub/property.md');
            [$type, $name, $title] = preg_split('/ +/', $item, 3);


            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $name,
                'DummyType' => $type ?: 'mixed',
                'DummyTitle' => $title ?? '',
                'DummyDescription' => '',
                'DummyReadOnly' => '',
            ];

            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }


        return $res;

    }


    protected function parseDocBlock(string $string)
    {
        $doc_sep = explode("\n", $string);

        $res = [
            'title' => '',
            'description' => '',
            'method' => [],
            'property' => [],
            'property-read' => [],
        ];

        $no_annotation = true;
        foreach ($doc_sep as $key => $line) {
            if (mb_ereg('^ *\*/$', $line)) {
                continue;
            }
            if (mb_ereg('^ */\*\*$', $line)) {
                continue;
            }

            if (mb_eregi('^ *\* *@([a-z\-]*) (.*)$', $line, $match)) {
                $no_annotation = false;
                $res[$match[1]][] = trim($match[2]);
            } elseif (mb_eregi('^ *\* *@([a-z\-]*)$', $line, $match)) {
                $no_annotation = false;
                $res[$match[1]] = true;

            } elseif ($no_annotation && $key === 1 && mb_eregi('^ *\*(.*)$', $line, $match)) {
                $res['title'] = trim($match[1]);
            } elseif ($no_annotation && mb_eregi('^ *\*(.*)$', $line, $match)) {
                $res['description'] .= trim($match[1]);
            }

        }

        return $res;
    }
}