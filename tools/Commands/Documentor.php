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
    protected $ankers = [];


    /**
     * Configures the current command.
     */
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


    /**
     * Executes the current command.
     *
     * This method is not abstract because you can use this class
     * as a concrete class. In this case, instead of defining the
     * execute() method, you set the code to execute by passing
     * a Closure to the setCode() method.
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int 0 if everything went fine, or an exit code
     *
     * @see setCode()
     */
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

        $class_stub = '';

        foreach ($classLoader->getClassMap() as $clazz => $file) {
            if (strpos($clazz, 'Contender') !== 0) {
                continue;
            }

            $output->write($clazz);

            $class_stub .= $this->classStub($clazz, $file);
        }

        preg_match_all('/\{@link ([^\}]*)\}/', $class_stub, $match_link);
        $class_stub = $this->replaceLink($class_stub, $match_link[0], $match_link[1]);

        preg_match_all('/\{@see ([^\}]*)\}/', $class_stub, $match_see);
        $class_stub = $this->replaceLink($class_stub, $match_see[0], $match_see[1]);


        file_put_contents(dirname(__DIR__, 2) . '/doc.md', $class_stub);

        return 0;
    }


    protected function replaceLink(string $class_stub, array $match, array $links): string
    {
        $res = [];
        foreach ($match as $key => $tag) {
            $link = trim($links[$key]);
            $url = parse_url($link);
            if (isset($url['scheme'])) {
                $res[$tag] = '<a href="' . $link . '">' . $link . '</a>';
                continue;
            }

            $anchor = $this->ankers[$link] ?? $this->ankers["\\" . $link] ?? $this->ankers[ltrim($link, "\\")] ?? null;
            if ($anchor !== null) {
                $res[$tag] = '<a href="' . $anchor . '">' . $link . '</a>';
            } else {
                dump($link);
                $res[$tag] = $link;
            }
        }

        return str_replace(array_keys($res), array_values($res), $class_stub);
    }


    /**
     * Create Class Markdown document
     *
     * @param string $clazz
     * @return false|string|string[]|void
     * @throws \ReflectionException
     */
    protected function classStub($clazz)
    {
        $class_stub = file_get_contents(__DIR__ . '/stub/class.md');
        $DummyHead = file_get_contents(__DIR__ . '/stub/class_head.md');

        $ref = new ReflectionClass($clazz);


        $now_doc = $ref->getDocComment();

        $parsed = $this->parseDocBlock($now_doc);

        if (!isset($parsed['isdoc'])) {
            return;
        }

        $DummyConstants = implode('', $this->constStub($ref));
        $DummyProperties = implode('', $this->propertyStub($ref, $parsed));
        $DummyMethods = implode('', $this->methodStub($ref, $parsed));

        $arr = [
            'DummyName' => $ref->name,
            'DummyClassDescription' => $parsed['description'],
            'DummyConstants' => $DummyConstants,
            'DummyProperties' => $DummyProperties,
            'DummyMethods' => $DummyMethods,
            'DummyClassSynopsis' => $this->synopsisStub($ref),
        ];

        $DummyHead = str_replace(
            array_keys($arr), array_values($arr),
            $DummyHead
        );
        $arr['DummyHead'] = trim($DummyHead);
        $this->ankers[$arr['DummyName']] = $this->toAnchor($arr['DummyHead']);

        $class_stub = str_replace(
            array_keys($arr), array_values($arr),
            $class_stub
        );

        return $class_stub;
    }

    protected function synopsisStub(ReflectionClass $refClass)
    {
        $synopsis = $this->synopsisStubArray($refClass);
        $res = [];

        foreach ($synopsis['const'] as $value) {
            $res['Constants'][] = "const {$value['type']} {$value['name']} = {$value['value']} ;";
        }

        foreach ($synopsis['properties'] as $value) {
            $res['Properties'][] = "public {$value['type']} \${$value['name']} ;";
        }

        foreach ($synopsis['methods'] as $value) {
            $params = [];


            foreach ($value['parameter'] ?? [] as $parameter) {
                $sub = "{$parameter['type']} \${$parameter['name']}";
                if ($parameter['default_value_available']) {
                    $sub .= " = {$parameter['default_value']}";
                    if ($parameter['allowNull']) {
                        $sub = '?' . $sub;
                    }

                    $sub = "[$sub]";
                } elseif ($parameter['allowNull']) {
                    $sub .= " = NULL";
                    $sub = "?$sub";
                }

                $params[] = $sub;
            }

            $params = implode(', ', $params);
            $res['Methods'][] = "public {$value['name']} ({$params}) : {$value['type']}";
        }

        $stub = $refClass->getName() . ' {';
        foreach ($res as $key => $prop) {
            $stub .= "\n\n    /* {$key} */\n    " . implode("\n    ", $prop);
        }
        $stub .= "\n\n }";

        return $stub;

    }

    protected function synopsisStubArray(ReflectionClass $refClass)
    {
        $const = [];
        foreach ($refClass->getReflectionConstants() as $refConst) {
            if (!$refConst->isPublic()) {
                continue;
            }
            $const[] = [
                'name' => $refConst->getName(),
                'value' => json_encode($refConst->getValue()),
                'type' => gettype($refConst->getValue()),
            ];
        }

        $properties = [];
        foreach ($refClass->getProperties() as $reflectionProperty) {
            if (!$reflectionProperty->isPublic()) {

                continue;
            }
            $annotate = $this->parseDocBlock($reflectionProperty->getDocComment());
            $type = null;
            if (isset($annotate['return'][0])) {
                [$type,] = preg_split('/ +/', trim($annotate['return'][0]), 2);
            }

            $properties[] = [
                'isStatic' => $reflectionProperty->isStatic(),
                'value' => json_encode($reflectionProperty->getValue()),
                'type' => $type ?? ($reflectionProperty->getType() ? $reflectionProperty->getType() : gettype($reflectionProperty->getValue())),
                'name' => $reflectionProperty->getName(),
                'isReadOnly' => false,
            ];
        }

        $annotate = $this->parseDocBlock($refClass->getDocComment());

        foreach ($annotate['property'] as $property) {
            [$type, $name,] = preg_split('/ +/', $property, 3);

            $properties[] = [
                'isStatic' => false,
                'value' => '',
                'type' => $type,
                'name' => strpos('$', $name) === 0 ? substr($name, 1) : $name,
                'isReadOnly' => false,
            ];
        }

        foreach ($annotate['property-read'] as $property) {
            [$type, $name,] = preg_split('/ +/', $property, 3);

            $properties[] = [
                'isStatic' => false,
                'value' => '',
                'type' => $type,
                'name' => strpos('$', $name) === 0 ? substr($name, 1) : $name,
                'isReadOnly' => true,
            ];
        }


        $methods = [];
        foreach ($refClass->getMethods() as $refMethod) {
            $params = [];
            $m_annotate = $this->parseDocBlock($refMethod->getDocComment());

            if (!$refMethod->isPublic()) {
                continue;
            }

            if ($refMethod->getDeclaringClass()->getName() !== $refClass->getName()) {
                continue;
            }

            if (isset($m_annotate['hideDoc'])) {
                continue;
            }


            foreach ($m_annotate['param'] ?? [] as $key => $value) {
                [$type, $param, $description] = preg_split('/ +/', $value, 3);
                $params[$param] = compact('type', 'param', 'description');
            }


            $resType = $refMethod->getReturnType();
            if ($resType !== null) {
                $resType = (string)$refMethod->getReturnType() . ($refMethod->getReturnType()->allowsNull() ? '|null' : '');
            } else {
                $resType = 'mixed';
            }

            if (isset($m_annotate['return'][0])) {
                [$resType,] = preg_split('/ +/', $m_annotate['return'][0]);
            }

            $parameter = [];
            foreach ($refMethod->getParameters() as $key => $refParameter) {
                $param_type = $params[$refMethod->name]['type'] ?? null;

                $parameter[$key]['type'] = $param_type ?? (string)($refParameter->getType() ?? 'mixed');
                $parameter[$key]['allowNull'] = $refParameter->allowsNull();
                $parameter[$key]['name'] = $refParameter->getName();
                $parameter[$key]['default_value'] = $refParameter->isDefaultValueAvailable() ? json_encode($refParameter->getDefaultValue()) : null;
                $parameter[$key]['default_value_available'] = $refParameter->isDefaultValueAvailable();

            }

            $methods[] = [
                'isStatic' => $refMethod->isStatic(),
                'parameter' => $parameter,
                'type' => $resType,
                'name' => $refMethod->name,
                'isReadOnly' => false,
            ];


        }


        return compact('const', 'properties', 'methods');

    }


    /**
     * Create Method Markdown document
     *
     * @param \ReflectionClass $refClass
     * @param array $class_doc
     * @return array
     */
    protected function methodStub(ReflectionClass $refClass, array $class_doc): array
    {
        $res = [];
        foreach ($refClass->getMethods() as $refMethod) {
            if (!$refMethod->isPublic()) {
                continue;
            }

            if ($refMethod->getDeclaringClass()->getName() !== $refClass->getName()) {
                continue;
            }
            $doc = $this->parseDocBlock($refMethod->getDocComment());
            if (isset($doc['hideDoc'])) {
                continue;
            }

            $stub_contents = file_get_contents(__DIR__ . '/stub/method.md');
            $DummyHead = file_get_contents(__DIR__ . '/stub/method_head.md');


            $resType = $refMethod->getReturnType();
            if ($resType !== null) {
                $resType = (string)$refMethod->getReturnType() . ($refMethod->getReturnType()->allowsNull() ? '|null' : '');
            } else {
                $resType = 'mixed';
            }

            if (isset($doc['return'][0])) {
                [$resType,] = preg_split('/ +/', $doc['return'][0]);
            }

            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $refMethod->getName(),
                // 'DummyValue' => json_encode($refMethod->getValue()),
                'DummyReturnValues' => $doc['return'][0] ?? $resType,
                'DummyType' => $resType,
                'DummyTitle' => $doc['title'],
                'DummyDescription' => $doc['description'],
                'DummySeeAlso' => $this->createSeeAlso(array_merge($doc['see'] ?? [], $doc['link'] ?? [])),
                'DummyParameters' => $this->createMethodParameter($refMethod, $doc['param'] ?? []),
                'DummyProperties' => $this->createMethodProperties($refMethod, $doc['param'] ?? []),
            ];

            $DummyHead = str_replace(
                array_keys($arr), array_values($arr),
                $DummyHead
            );
            $arr['DummyHead'] = trim($DummyHead);
            $this->ankers[$arr['DummyClass'] . '::' . $arr['DummyName'] . '()'] = $this->toAnchor($arr['DummyHead']);

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
            $res .= " - {@link $str}\n";
        }

        return $res;
    }


    protected function constStub(ReflectionClass $refClass)
    {
        $res = [];
        foreach ($refClass->getReflectionConstants() as $refConst) {
            $stub_contents = file_get_contents(__DIR__ . '/stub/const.md');
            $DummyHead = file_get_contents(__DIR__ . '/stub/const_head.md');

            $doc = $this->parseDocBlock($refConst->getDocComment());
            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $refConst->getName(),
                'DummyValue' => json_encode($refConst->getValue()),
                'DummyType' => gettype($refConst->getValue()),
                'DummyTitle' => $doc['title'],
                'DummyDescription' => $doc['description'],
            ];

            $DummyHead = str_replace(
                array_keys($arr), array_values($arr),
                $DummyHead
            );
            $arr['DummyHead'] = trim($DummyHead);
            $this->ankers[$arr['DummyClass'] . '::' . $arr['DummyName']] = $this->toAnchor($arr['DummyHead']);

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
            $DummyHead = file_get_contents(__DIR__ . '/stub/property_head.md');

            $doc = $this->parseDocBlock($refProperty->getDocComment());


            [$type,] = preg_split('/ +/', $doc['var'][0] ?? '', 2);
            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $refProperty->getName(),
                'DummyType' => $type ?: 'mixed',
                'DummyTitle' => $doc['title'],
                'DummyDescription' => $doc['description'],
                'DummyReadOnly' => '',
            ];

            $DummyHead = str_replace(
                array_keys($arr), array_values($arr),
                $DummyHead
            );

            $arr['DummyHead'] = trim($DummyHead);
            $this->ankers[$arr['DummyClass'] . '::$' . $arr['DummyName']] = $this->toAnchor($arr['DummyHead']);

            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }

        foreach ($class_doc['property-read'] ?? [] as $item) {
            $stub_contents = file_get_contents(__DIR__ . '/stub/property.md');
            $DummyHead = file_get_contents(__DIR__ . '/stub/property_head.md');
            [$type, $name, $title] = explode(' ', $item, 3);


            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $name,
                'DummyType' => $type ?: 'mixed',
                'DummyTitle' => $title ?? '',
                'DummyDescription' => '',
                'DummyReadOnly' => '__read only__',
            ];
            $DummyHead = str_replace(
                array_keys($arr), array_values($arr),
                $DummyHead
            );

            $arr['DummyHead'] = trim($DummyHead);
            $this->ankers[$arr['DummyClass'] . '::$' . $arr['DummyName']] = $this->toAnchor($arr['DummyHead']);
            $res[] = str_replace(array_keys($arr), array_values($arr), $stub_contents);
        }

        foreach ($class_doc['property'] ?? [] as $item) {
            $stub_contents = file_get_contents(__DIR__ . '/stub/property.md');
            $DummyHead = file_get_contents(__DIR__ . '/stub/property_head.md');
            [$type, $name, $title] = preg_split('/ +/', $item, 3);


            $arr = [
                'DummyClass' => $refClass->name,
                'DummyName' => $name,
                'DummyType' => $type ?: 'mixed',
                'DummyTitle' => $title ?? '',
                'DummyDescription' => '',
                'DummyReadOnly' => '',
            ];
            $DummyHead = str_replace(
                array_keys($arr), array_values($arr),
                $DummyHead
            );

            $arr['DummyHead'] = trim($DummyHead);
            $this->ankers[$arr['DummyClass'] . '::$' . $arr['DummyName']] = $this->toAnchor($arr['DummyHead']);

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
                $res['description'] .= trim($match[1]) . "\n";
            }

        }

        return $res;
    }

    protected function toAnchor($str)
    {
        $res = mb_eregi_replace('[^a-z0-9 ]', '', trim($str));

        return strtolower('#' . str_replace(' ', '-', $res));
    }
}