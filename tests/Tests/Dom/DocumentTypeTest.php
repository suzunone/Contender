<?php
/**
 * CommentTest.php
 *
 * Class CommentTest
 *
 * @category   Contender
 * @package    Tests\Suzunone\Contender\Dom
 * @subpackage Tests\Suzunone\Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/30
 */

namespace Tests\Suzunone\Contender\Dom;

use Contender\Contender;
use Contender\Dom\DocumentType;
use PHPUnit\Framework\TestCase;

/**
 * Class CommentTest
 *
 * @category   Contender
 * @package    Tests\Suzunone\Contender\Dom
 * @subpackage Tests\Suzunone\Contender\Dom
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/30
 * @covers \Contender\Dom\DocumentType
 * @covers \Contender\Service\Factory
 */
class DocumentTypeTest extends TestCase
{
    public function test_factory()
    {
        $document = Contender::loadStr(
            <<<HTMLEND
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" >
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="content-style-type" content="text/css" />
</head>
<body>
</div>
</html>
HTMLEND
        );
        $element = $document->firstChild;
        $this->assertInstanceOf(DocumentType::class, $element);
    }
}
