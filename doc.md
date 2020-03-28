\Contender\Contender
==========================
Load Html to generate a <a href="#contenderdomdocument">\Contender\Dom\Document</a> object.


Easy to use
------------------------------------------
### Create <a href="#contenderdomdocument">\Contender\Dom\Document</a> from url

``` .php
$header = [
    'http' => [
    'method'        => 'GET',
    'header'        => 'User-Agent: Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0.1',
    'ignore_errors' => true,
    ],
];

$options = [
    Contender::OPTION_CONVERT_ENCODE
];

$document = Contender::loadUrl('https://www.google.com/', $options, $header);

```

### Create <a href="#contenderdomdocument">\Contender\Dom\Document</a> from html

``` .php

$document = Contender::loadStr('<div><p>Test Html</p></div>', []);
echo (string) $document;

```

Note that if you load incomplete HTML, the required elements are automatically completed.

#### result html
``` .html

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body><div><p>Test Html</p></div></body>
</html>

```




Class synopsis
----------------------------

```

Contender\Contender {

    /* Constants */
    const string OPTION_COMPACT = "LIBXML_COMPACT" ;
    const string OPTION_NOBLANKS = "LIBXML_NOBLANKS" ;
    const string OPTION_NOCDATA = "LIBXML_NOCDATA" ;
    const string OPTION_NOEMPTYTAG = "LIBXML_NOEMPTYTAG" ;
    const string OPTION_NOENT = "LIBXML_NOENT" ;
    const string OPTION_NONET = "LIBXML_NONET" ;
    const string OPTION_CONVERT_ENCODE = "CONVERT_ENCODE" ;
    const string OPTION_CONVERT_NO_ENCODE = "CONVERT_NO_ENCODE" ;
    const string OPTION_CONVERT_REPLACE_CHARSET = "OPTION_CONVERT_REPLACE_CHARSET" ;
    const string OPTION_CONVERT_NO_REPLACE_CHARSET = "OPTION_CONVERT_NO_REPLACE_CHARSET" ;
    const string OPTION_FORMAT_OUTPUT_ENABLE = "OPTION_FORMAT_OUTPUT_ENABLE" ;
    const string OPTION_FORMAT_OUTPUT_DISABLE = "OPTION_FORMAT_OUTPUT_DISABLE" ;
    const string OPTION_MINIFY_DISABLE = "OPTION_MINIFY_DISABLE" ;
    const string OPTION_MINIFY_ENABLE = "OPTION_MINIFY_ENABLE" ;
    const string OPTION_REMOVE_STYLE_ENABLE = "OPTION_REMOVE_STYLE_ENABLE" ;
    const string OPTION_REMOVE_STYLE_DISABLE = "OPTION_REMOVE_STYLE_DISABLE" ;
    const string OPTION_REMOVE_SCRIPT_ENABLE = "OPTION_REMOVE_SCRIPT_ENABLE" ;
    const string OPTION_REMOVE_SCRIPT_DISABLE = "OPTION_REMOVE_SCRIPT_DISABLE" ;
    const string OPTION_REMOVE_COMMENT_ENABLE = "OPTION_REMOVE_COMMENT_ENABLE" ;
    const string OPTION_REMOVE_COMMENT_DISABLE = "OPTION_REMOVE_COMMENT_DISABLE" ;
    const integer DEFAULT_LIBXML_OPTION = 4194402 ;

    /* Properties */
    public boolean $is_add_meta ;

    /* Methods */
    public __construct () : void
    public loadStr (string $html, [array $options = []]) : \Contender\Dom\Document
    public load (string $html, [array $options = []]) : \Contender\Dom\Document
    public setOptions (array $options) : self
    public setOption (string $option) : self
    public loadDomDocument (DOMDocument $document) : \Contender\Dom\Document
    public loadUrl (string $url, [array $options = []], [?array $context_option = null]) : \Contender\Dom\Document
    public loadFromUrl (string $url, [array $options = []], [?array $context_option = null]) : \Contender\Dom\Document

 }

```


Constants
----------------------------

### `string` \Contender\Contender::OPTION_COMPACT = "LIBXML_COMPACT"
Activate small nodes allocation optimization. This may speed up your application without needing to change the code.



### `string` \Contender\Contender::OPTION_NOBLANKS = "LIBXML_NOBLANKS"
Remove blank nodes



### `string` \Contender\Contender::OPTION_NOCDATA = "LIBXML_NOCDATA"
Merge CDATA as text nodes



### `string` \Contender\Contender::OPTION_NOEMPTYTAG = "LIBXML_NOEMPTYTAG"
Expand empty tags (e.g. `<br/>` to `<br></br>`)



### `string` \Contender\Contender::OPTION_NOENT = "LIBXML_NOENT"
Substitute entities



### `string` \Contender\Contender::OPTION_NONET = "LIBXML_NONET"
Disable network access when loading documents



### `string` \Contender\Contender::OPTION_CONVERT_ENCODE = "CONVERT_ENCODE"
Force to UTF -8 encoding



### `string` \Contender\Contender::OPTION_CONVERT_NO_ENCODE = "CONVERT_NO_ENCODE"




### `string` \Contender\Contender::OPTION_CONVERT_REPLACE_CHARSET = "OPTION_CONVERT_REPLACE_CHARSET"
Change charset`<meta>`tag when <a href="#string-contendercontenderoptionconvertencode--convertencode">\Contender\Contender::OPTION_CONVERT_ENCODE</a> option is enabled



### `string` \Contender\Contender::OPTION_CONVERT_NO_REPLACE_CHARSET = "OPTION_CONVERT_NO_REPLACE_CHARSET"




### `string` \Contender\Contender::OPTION_FORMAT_OUTPUT_ENABLE = "OPTION_FORMAT_OUTPUT_ENABLE"
Nicely formats output with indentation and extra space.



### `string` \Contender\Contender::OPTION_FORMAT_OUTPUT_DISABLE = "OPTION_FORMAT_OUTPUT_DISABLE"




### `string` \Contender\Contender::OPTION_MINIFY_DISABLE = "OPTION_MINIFY_DISABLE"
Do not minify html, then generating to <a href="#contenderdomdocument">\Contender\Dom\Document</a>



### `string` \Contender\Contender::OPTION_MINIFY_ENABLE = "OPTION_MINIFY_ENABLE"




### `string` \Contender\Contender::OPTION_REMOVE_STYLE_ENABLE = "OPTION_REMOVE_STYLE_ENABLE"
Remove `<style>`tags, then generating to <a href="#contenderdomdocument">\Contender\Dom\Document</a>



### `string` \Contender\Contender::OPTION_REMOVE_STYLE_DISABLE = "OPTION_REMOVE_STYLE_DISABLE"




### `string` \Contender\Contender::OPTION_REMOVE_SCRIPT_ENABLE = "OPTION_REMOVE_SCRIPT_ENABLE"
Remove `<script>`tags, then generating to <a href="#contenderdomdocument">\Contender\Dom\Document</a>



### `string` \Contender\Contender::OPTION_REMOVE_SCRIPT_DISABLE = "OPTION_REMOVE_SCRIPT_DISABLE"




### `string` \Contender\Contender::OPTION_REMOVE_COMMENT_ENABLE = "OPTION_REMOVE_COMMENT_ENABLE"
Remove comment tags, then generating to <a href="#contenderdomdocument">\Contender\Dom\Document</a>



### `string` \Contender\Contender::OPTION_REMOVE_COMMENT_DISABLE = "OPTION_REMOVE_COMMENT_DISABLE"




### `integer` \Contender\Contender::DEFAULT_LIBXML_OPTION = 4194402
Default libxml options


``` .php

 DEFAULT_LIBXML_OPTION = LIBXML_BIGLINES | LIBXML_NOERROR | LIBXML_NOXMLDECL | LIBXML_NOWARNING

```






Properties
----------------------------

### `bool` \Contender\Contender::$is_add_meta
Auto adding charset meta






Methods
----------------------------

### \Contender\Contender::__construct()
Contender constructor.




#### Parameters


#### Return Values
void


### See Also
None

### \Contender\Contender::loadStr(string $html, array $options)
Generate a <a href="#contenderdomdocument">\Contender\Dom\Document</a>  from a string(static call)




#### Parameters
##### `string` $html

The string containing the HTML.

##### `array` $options

Array multiple Contender option constants



#### Return Values
\Contender\Dom\Document


### See Also
 - <a href="#contendercontenderloadstring-html-array-options">\Contender\Contender::load()</a>
 - <a href="#contendercontenderloadurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadUrl()</a>


### \Contender\Contender::load(string $html, array $options)
Generate a <a href="#contenderdomdocument">\Contender\Dom\Document</a> from a string




#### Parameters
##### `string` $html

The string containing the HTML.

##### `array` $options

Array multiple Contender option constants



#### Return Values
\Contender\Dom\Document


### See Also
 - <a href="#contendercontenderloadstrstring-html-array-options">\Contender\Contender::loadStr()</a>
 - <a href="#contendercontenderloadurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadUrl()</a>


### \Contender\Contender::setOptions(array $options)
Calls <a href="#contendercontendersetoptionstring-option">\Contender\Contender::setOption()</a> as an array




#### Parameters
##### `array` $options

Array multiple Contender option constants



#### Return Values
self


### See Also
 - <a href="#contendercontendersetoptionstring-option">\Contender\Contender::setOption()</a>


### \Contender\Contender::setOption(string $option)
Options for converting Html to ContenderDocument




#### Parameters
##### `string` $option

Contender option const.



#### Return Values
self


### See Also
None

### \Contender\Contender::loadDomDocument(DOMDocument $document)
Generate a <a href="#contenderdomdocument">\Contender\Dom\Document</a>  from a DOMDocument




#### Parameters
##### `\DOMDocument` $document





#### Return Values
\Contender\Dom\Document


### See Also
 - <a href="https://www.php.net/manual/en/class.domdocument.php">https://www.php.net/manual/en/class.domdocument.php</a>


### \Contender\Contender::loadUrl(string $url, array $options, array|null $context_option)
Generate a <a href="#contenderdomdocument">\Contender\Dom\Document</a>  from a URL(static call)




#### Parameters
##### `string` $url

The path to the HTML document.

##### `array` $options

Array multiple Contender option constants

##### `array|null` $context_option

Context options



#### Return Values
\Contender\Dom\Document


### See Also
 - <a href="https://www.php.net/manual/en/context.php">https://www.php.net/manual/en/context.php</a>
 - <a href="#contendercontenderloadstrstring-html-array-options">\Contender\Contender::loadStr()</a>
 - <a href="#contendercontenderloadfromurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadFromUrl()</a>


### \Contender\Contender::loadFromUrl(string $url, array $options, array|null $context_option)
Generate a <a href="#contenderdomdocument">\Contender\Dom\Document</a>  from a URL




#### Parameters
##### `string` $url

The path to the HTML document.

##### `array` $options

Array multiple Contender option constants

##### `array|null` $context_option

Context options



#### Return Values
\Contender\Dom\Document


### See Also
 - <a href="https://www.php.net/manual/en/context.php">https://www.php.net/manual/en/context.php</a>
 - <a href="#contendercontenderloadstrstring-html-array-options">\Contender\Contender::loadStr()</a>
 - <a href="#contendercontenderloadurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadUrl()</a>



\Contender\Dom\Attr
==========================
Class Attr





Class synopsis
----------------------------

```

Contender\Dom\Attr {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string $value ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string $name ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Element $ownerElement ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Element $owner_element ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public bool $schemaTypeInfo ;
    public bool $specified ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public getNameAttribute () : string
    public getValueAttribute () : string
    public setValueAttribute (string $value) : void
    public getOwnerElementAttribute () : \Contender\Dom\Element

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\Attr::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Attr::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Attr::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Attr::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Attr::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Attr::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Attr::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Attr::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Attr::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Attr::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Attr::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Attr::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Attr::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Attr::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Attr::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Attr::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Attr::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Attr::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Attr::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Attr::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Attr::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Attr::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Attr::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Attr::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Attr::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Attr::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Attr::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Attr::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Attr::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Attr::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Attr::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Attr::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Attr::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Attr::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Attr::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Attr::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Attr::$localName __read only__
Returns the local part of the qualified name of this node.



### `string` \Contender\Dom\Attr::$name __read only__




### `string|null` \Contender\Dom\Attr::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Attr::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Attr::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Attr::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Attr::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Attr::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Attr::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Attr::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Attr::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Attr::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Element` \Contender\Dom\Attr::$ownerElement __read only__




### `\Contender\Dom\Document` \Contender\Dom\Attr::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Element` \Contender\Dom\Attr::$owner_element __read only__




### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Attr::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `bool` \Contender\Dom\Attr::$schemaTypeInfo __read only__
Not implemented yet, always is NULL



### `bool` \Contender\Dom\Attr::$specified __read only__
Not implemented yet, always is NULL



### `string` \Contender\Dom\Attr::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Attr::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Attr::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Attr::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Attr::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Attr::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Attr::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\Attr::$parameter




### `string|null` \Contender\Dom\Attr::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Dom\Attr::$value







Methods
----------------------------

### \Contender\Dom\Attr::getNameAttribute()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Dom\Attr::getValueAttribute()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Dom\Attr::setValueAttribute(string $value)




#### Parameters
##### `string` $value





#### Return Values
void


### See Also
None

### \Contender\Dom\Attr::getOwnerElementAttribute()




#### Parameters


#### Return Values
\Contender\Dom\Element


### See Also
None


\Contender\Dom\CdataSection
==========================
Class CdataSection





Class synopsis
----------------------------

```

Contender\Dom\CdataSection {

    /* Properties */
    public string $data ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string $wholeText ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $length ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\CdataSection::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\CdataSection::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\CdataSection::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\CdataSection::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CdataSection::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CdataSection::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\CdataSection::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\CdataSection::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\CdataSection::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\CdataSection::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\CdataSection::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\CdataSection::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\CdataSection::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\CdataSection::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\CdataSection::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\CdataSection::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\CdataSection::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\CdataSection::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\CdataSection::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\CdataSection::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\CdataSection::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\CdataSection::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\CdataSection::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\CdataSection::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\CdataSection::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\CdataSection::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\CdataSection::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\CdataSection::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\CdataSection::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\CdataSection::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\CdataSection::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\CdataSection::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CdataSection::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CdataSection::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\CdataSection::$length __read only__
The length of the contents.



### `int` \Contender\Dom\CdataSection::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\CdataSection::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\CdataSection::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\CdataSection::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\CdataSection::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\CdataSection::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\CdataSection::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\CdataSection::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\CdataSection::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\CdataSection::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\CdataSection::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\CdataSection::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\CdataSection::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\CdataSection::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CdataSection::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\CdataSection::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\CdataSection::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\CdataSection::$data
The contents of the node.



### `string` \Contender\Dom\CdataSection::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CdataSection::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CdataSection::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CdataSection::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CdataSection::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\CdataSection::$parameter




### `string|null` \Contender\Dom\CdataSection::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Dom\CdataSection::$wholeText
Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.






Methods
----------------------------


\Contender\Dom\CharacterData
==========================
Class CharacterData





Class synopsis
----------------------------

```

Contender\Dom\CharacterData {

    /* Properties */
    public string $data ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $length ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public substringData (?mixed $offset = NULL, ?mixed $count = NULL) : string
    public appendData (?mixed $data = NULL) : void
    public insertData (?mixed $offset = NULL, ?mixed $data = NULL) : void
    public deleteData (?mixed $offset = NULL, ?mixed $count = NULL) : void
    public replaceData (?mixed $offset = NULL, ?mixed $count = NULL, ?mixed $data = NULL) : void
    public __toString () : string

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\CharacterData::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\CharacterData::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\CharacterData::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\CharacterData::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CharacterData::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CharacterData::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\CharacterData::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\CharacterData::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\CharacterData::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\CharacterData::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\CharacterData::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\CharacterData::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\CharacterData::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\CharacterData::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\CharacterData::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\CharacterData::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\CharacterData::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\CharacterData::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\CharacterData::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\CharacterData::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\CharacterData::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\CharacterData::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\CharacterData::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\CharacterData::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\CharacterData::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\CharacterData::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\CharacterData::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\CharacterData::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\CharacterData::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\CharacterData::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\CharacterData::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\CharacterData::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CharacterData::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\CharacterData::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\CharacterData::$length __read only__
The length of the contents.



### `int` \Contender\Dom\CharacterData::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\CharacterData::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\CharacterData::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\CharacterData::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\CharacterData::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\CharacterData::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\CharacterData::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\CharacterData::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\CharacterData::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\CharacterData::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\CharacterData::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\CharacterData::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\CharacterData::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\CharacterData::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\CharacterData::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\CharacterData::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\CharacterData::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\CharacterData::$data
The contents of the node.



### `string` \Contender\Dom\CharacterData::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CharacterData::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CharacterData::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CharacterData::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\CharacterData::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\CharacterData::$parameter




### `string|null` \Contender\Dom\CharacterData::$prefix
The namespace prefix of this node, or NULL if it is unspecified.






Methods
----------------------------

### \Contender\Dom\CharacterData::substringData(mixed|null $offset, mixed|null $count)
Extracts a range of data from the node



#### Parameters
##### `int` $offset

Start offset of substring to extract.

##### `int` $count

The number of characters to extract.



#### Return Values
string The specified substring. If the sum of offset and count exceeds the length, then all 16-bit units to the end of the data are returned.


### See Also
 - <a href="https://php.net/manual/en/domcharacterdata.substringdata.php">https://php.net/manual/en/domcharacterdata.substringdata.php</a>


### \Contender\Dom\CharacterData::appendData(mixed|null $data)
Append the string to the end of the character data of the node



#### Parameters
##### `string` $data

The string to append.



#### Return Values
void


### See Also
 - <a href="https://php.net/manual/en/domcharacterdata.appenddata.php">https://php.net/manual/en/domcharacterdata.appenddata.php</a>


### \Contender\Dom\CharacterData::insertData(mixed|null $offset, mixed|null $data)
Insert a string at the specified 16-bit unit offset



#### Parameters
##### `int` $offset

The character offset at which to insert.

##### `string` $data

The string to insert.



#### Return Values
void


### See Also
 - <a href="https://php.net/manual/en/domcharacterdata.insertdata.php">https://php.net/manual/en/domcharacterdata.insertdata.php</a>


### \Contender\Dom\CharacterData::deleteData(mixed|null $offset, mixed|null $count)
Remove a range of characters from the node



#### Parameters
##### `int` $offset

The offset from which to start removing.

##### `int` $count

The number of characters to delete. If the sum of offset and count exceeds the length, then all characters to the end of the data are deleted.



#### Return Values
void


### See Also
 - <a href="https://php.net/manual/en/domcharacterdata.deletedata.php">https://php.net/manual/en/domcharacterdata.deletedata.php</a>


### \Contender\Dom\CharacterData::replaceData(mixed|null $offset, mixed|null $count, mixed|null $data)
Replace a substring within the DOMCharacterData node



#### Parameters
##### `int` $offset

The offset from which to start replacing.

##### `int` $count

The number of characters to replace. If the sum of offset and count exceeds the length, then all characters to the end of the data are replaced.

##### `string` $data

The string with which the range must be replaced.



#### Return Values
void


### See Also
 - <a href="https://php.net/manual/en/domcharacterdata.replacedata.php">https://php.net/manual/en/domcharacterdata.replacedata.php</a>


### \Contender\Dom\CharacterData::__toString()




#### Parameters


#### Return Values
string


### See Also
None


\Contender\Dom\Comment
==========================
Class Comment





Class synopsis
----------------------------

```

Contender\Dom\Comment {

    /* Properties */
    public string|null $documentURI ;
    public string $encoding ;
    public bool $formatOutput ;
    public \Contender\Dom\Implementation $implementation ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public bool $preserveWhiteSpace ;
    public bool $recover ;
    public bool $resolveExternals ;
    public bool $standalone ;
    public bool $strictErrorChecking ;
    public bool $substituteEntities ;
    public bool $validateOnParse ;
    public string $version ;
    public bool $xmlStandalone ;
    public string $xmlVersion ;
    public string $actualEncoding ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \DOMConfiguration $config ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;
    public string $xmlEncoding ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Dom\Comment::$actualEncoding __read only__
Deprecated. Actual encoding of the document, is a readonly equivalent to encoding.



### `string|null` \Contender\Dom\Comment::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Comment::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Comment::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Comment::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\DOMConfiguration` \Contender\Dom\Comment::$config __read only__
Deprecated. Configuration used when {



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Comment::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Comment::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Comment::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Comment::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Comment::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Comment::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Comment::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Comment::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Comment::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Comment::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Comment::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Comment::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Comment::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Comment::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Comment::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Comment::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Comment::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Comment::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Comment::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Comment::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Comment::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Comment::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Comment::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Comment::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Comment::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Comment::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Comment::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Comment::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Comment::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Comment::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Comment::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Comment::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Comment::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\Comment::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Comment::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Comment::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Comment::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Comment::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Comment::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Comment::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Comment::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Comment::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Comment::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\Comment::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Comment::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Comment::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Comment::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Comment::$xmlEncoding __read only__
An attribute specifying, as part of the XML declaration, the encoding of this document. This is NULL whenunspecified or when it is not known, such as when the Document was created in memory.



### `string|null` \Contender\Dom\Comment::$documentURI
The location of the document or NULL if undefined.



### `string` \Contender\Dom\Comment::$encoding
Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.



### `bool` \Contender\Dom\Comment::$formatOutput
Nicely formats output with indentation and extra space.



### `\Contender\Dom\Implementation` \Contender\Dom\Comment::$implementation




### `string` \Contender\Dom\Comment::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Comment::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Comment::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Comment::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Comment::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\Comment::$parameter




### `string|null` \Contender\Dom\Comment::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `bool` \Contender\Dom\Comment::$preserveWhiteSpace
Do not remove redundant white space. Default to TRUE.



### `bool` \Contender\Dom\Comment::$recover
Proprietary. Enables recovery mode, i.e. trying to parse non-well formed documents.This attribute is not part of the DOM specification and is specific to libxml.



### `bool` \Contender\Dom\Comment::$resolveExternals
Set it to TRUE to load external entities from a doctype declaration. This is useful for including character entities in your XML document.



### `bool` \Contender\Dom\Comment::$standalone
Deprecated. Whether or not the document is standalone, as specified by the XML declaration,corresponds to xmlStandalone.



### `bool` \Contender\Dom\Comment::$strictErrorChecking
Throws <classname>DOMException</classname> on errors. Default to TRUE.



### `bool` \Contender\Dom\Comment::$substituteEntities
Proprietary. Whether or not to substitute entities. This attribute is not part of the DOMspecification and is specific to libxml.



### `bool` \Contender\Dom\Comment::$validateOnParse
Loads and validates against the DTD. Default to FALSE.



### `string` \Contender\Dom\Comment::$version
Deprecated. Version of XML, corresponds to xmlVersion



### `bool` \Contender\Dom\Comment::$xmlStandalone
An attribute specifying, as part of the XML declaration, whether this document is standalone.This is FALSE when unspecified.



### `string` \Contender\Dom\Comment::$xmlVersion
An attribute specifying, as part of the XML declaration, the version number of this document. If there is nodeclaration and if this document supports the "XML" feature, the value is "1.0".






Methods
----------------------------


\Contender\Dom\Document
==========================
Access each element of Html, like window.document in Javascript.







Class synopsis
----------------------------

```

Contender\Dom\Document {

    /* Properties */
    public string|null $documentURI ;
    public string $encoding ;
    public bool $formatOutput ;
    public \Contender\Dom\Implementation $implementation ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public bool $preserveWhiteSpace ;
    public bool $recover ;
    public bool $resolveExternals ;
    public bool $standalone ;
    public bool $strictErrorChecking ;
    public bool $substituteEntities ;
    public bool $validateOnParse ;
    public string $version ;
    public bool $xmlStandalone ;
    public string $xmlVersion ;
    public string $actualEncoding ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \DOMConfiguration $config ;
    public \Contender\Dom\Element $documentElement ;
    public \Contender\Dom\Element $document_element ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;
    public string $xmlEncoding ;

    /* Methods */
    public __construct (DOMDocument $element) : void
    public getDocumentElementAttribute () : \Contender\Dom\Element
    public createElement (string $name, [?string $value = null]) : \Contender\Dom\Element
    public createComment (string $value) : \Contender\Dom\Node
    public createTextNode (string $value) : \Contender\Dom\Node
    public createCDATASection (string $value) : \Contender\Dom\Node
    public createProcessingInstruction (string $target, [?string $data = null]) : \Contender\Dom\Node
    public createAttributeNS (string $namespaceURI, string $qualifiedName) : \Contender\Dom\Node
    public createAttribute (string $value) : \Contender\Dom\Attr
    public createEntityReference (string $value) : \Contender\Dom\Node
    public __toString () : string
    public appendChild (Contender\Dom\Node $node) : \Contender\Dom\Node
    public insertBefore (Contender\Dom\Node $node, [?Contender\Dom\Node $referenceNode = null]) : \Contender\Dom\Node
    public normalize () : void
    public cloneNode ([bool $deep = false]) : \Contender\Dom\Node
    public hasChildNodes () : bool
    public removeChild (Contender\Dom\Node $oldnode) : \Contender\Dom\Node
    public replaceChild (Contender\Dom\Node $newnode, Contender\Dom\Node $oldnode) : \Contender\Dom\Node
    public getOwnerDocumentAttribute () : \Contender\Dom\Document
    public getParameterAttribute (string $name) : mixed|string|int
    public setParameterAttribute (string $name, ?mixed $value = NULL) : void
    public hasParameterAttribute (string $name) : bool
    public getElementById (string $query) : \Contender\Dom\Element|null
    public getElementsByClassName (string $query) : \Contender\Dom\NodeList|\Contender\Dom\Node[]
    public querySelectorAll (string $selectors) : \Contender\Dom\NodeList|Node[]
    public evaluateToCollection (string $query) : \Contender\Dom\NodeList|Node[]
    public getElementsByName (string $query) : \Contender\Dom\NodeList|\Contender\Dom\Node[]
    public getElementsByTagName (string $tag_name) : \Contender\Dom\NodeList
    public getAttributeNodeNS (string $namespaceURI, string $localName) : \Contender\Dom\NodeList
    public querySelector (string $selectors) : \Contender\Dom\Node|null
    public evaluate (string $query, [int $offset = 0]) : \Contender\Dom\Node|null
    public find (string $query) : \Contender\Dom\NodeList

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Dom\Document::$actualEncoding __read only__
Deprecated. Actual encoding of the document, is a readonly equivalent to encoding.



### `string|null` \Contender\Dom\Document::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Document::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Document::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Document::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\DOMConfiguration` \Contender\Dom\Document::$config __read only__
Deprecated. Configuration used when {



### `\Contender\Dom\Element` \Contender\Dom\Document::$documentElement __read only__




### `\Contender\Dom\Element` \Contender\Dom\Document::$document_element __read only__




### `\Contender\Dom\Node|null` \Contender\Dom\Document::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Document::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Document::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Document::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Document::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Document::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Document::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Document::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Document::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Document::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Document::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Document::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Document::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Document::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Document::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Document::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Document::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Document::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Document::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Document::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Document::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Document::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Document::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Document::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Document::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Document::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Document::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Document::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Document::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Document::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Document::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Document::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Document::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Document::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\Document::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Document::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Document::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Document::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Document::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Document::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Document::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Document::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Document::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Document::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\Document::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Document::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Document::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Document::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Document::$xmlEncoding __read only__
An attribute specifying, as part of the XML declaration, the encoding of this document. This is NULL whenunspecified or when it is not known, such as when the Document was created in memory.



### `string|null` \Contender\Dom\Document::$documentURI
The location of the document or NULL if undefined.



### `string` \Contender\Dom\Document::$encoding
Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.



### `bool` \Contender\Dom\Document::$formatOutput
Nicely formats output with indentation and extra space.



### `\Contender\Dom\Implementation` \Contender\Dom\Document::$implementation




### `string` \Contender\Dom\Document::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Document::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Document::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Document::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Document::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\Document::$parameter




### `string|null` \Contender\Dom\Document::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `bool` \Contender\Dom\Document::$preserveWhiteSpace
Do not remove redundant white space. Default to TRUE.



### `bool` \Contender\Dom\Document::$recover
Proprietary. Enables recovery mode, i.e. trying to parse non-well formed documents.This attribute is not part of the DOM specification and is specific to libxml.



### `bool` \Contender\Dom\Document::$resolveExternals
Set it to TRUE to load external entities from a doctype declaration. This is useful for including character entities in your XML document.



### `bool` \Contender\Dom\Document::$standalone
Deprecated. Whether or not the document is standalone, as specified by the XML declaration,corresponds to xmlStandalone.



### `bool` \Contender\Dom\Document::$strictErrorChecking
Throws <classname>DOMException</classname> on errors. Default to TRUE.



### `bool` \Contender\Dom\Document::$substituteEntities
Proprietary. Whether or not to substitute entities. This attribute is not part of the DOMspecification and is specific to libxml.



### `bool` \Contender\Dom\Document::$validateOnParse
Loads and validates against the DTD. Default to FALSE.



### `string` \Contender\Dom\Document::$version
Deprecated. Version of XML, corresponds to xmlVersion



### `bool` \Contender\Dom\Document::$xmlStandalone
An attribute specifying, as part of the XML declaration, whether this document is standalone.This is FALSE when unspecified.



### `string` \Contender\Dom\Document::$xmlVersion
An attribute specifying, as part of the XML declaration, the version number of this document. If there is nodeclaration and if this document supports the "XML" feature, the value is "1.0".






Methods
----------------------------

### \Contender\Dom\Document::__construct(DOMDocument $element)
Node constructor.




#### Parameters
##### `\DOMDocument` $element





#### Return Values
void


### See Also
None

### \Contender\Dom\Document::getDocumentElementAttribute()




#### Parameters


#### Return Values
\Contender\Dom\Element


### See Also
None

### \Contender\Dom\Document::createElement(string $name, string|null $value)
Create new element node




#### Parameters
##### `string` $name

The tag name of the element.

##### `string|null` $value

The value of the element. By default, an empty element will be created. You can also set the value later with DOMElement->nodeValue.



#### Return Values
\Contender\Dom\Element


### See Also
None

### \Contender\Dom\Document::createComment(string $value)
Create new comment node




#### Parameters
##### `string` $value

The content of the comment.



#### Return Values
\Contender\Dom\Node


### See Also
None

### \Contender\Dom\Document::createTextNode(string $value)
Create new comment node




#### Parameters
##### `string` $value

The content of the text.



#### Return Values
\Contender\Dom\Node


### See Also
None

### \Contender\Dom\Document::createCDATASection(string $value)
Create new cdata node




#### Parameters
##### `string` $value

The content of the cdata.



#### Return Values
\Contender\Dom\Node


### See Also
None

### \Contender\Dom\Document::createProcessingInstruction(string $target, string|null $data)
Creates new PI node




#### Parameters
##### `string` $target

The target of the processing instruction.

##### `string|null` $data

The content of the processing instruction.



#### Return Values
\Contender\Dom\Node


### See Also
None

### \Contender\Dom\Document::createAttributeNS(string $namespaceURI, string $qualifiedName)
Create new attribute node with an associated namespace




#### Parameters
##### `string` $namespaceURI

The namespace URI of the elements to match on. The special value * matches all namespaces.

##### `string` $qualifiedName

The local name of the elements to match on. The special value * matches all local names.



#### Return Values
\Contender\Dom\Node


### See Also
None

### \Contender\Dom\Document::createAttribute(string $value)
Create new attribute




#### Parameters
##### `string` $value

The name of the attribute.



#### Return Values
\Contender\Dom\Attr


### See Also
None

### \Contender\Dom\Document::createEntityReference(string $value)
Create new entity reference node




#### Parameters
##### `string` $value

The content of the entity reference, e.g. the entity reference minusthe leading & and the trailing ; characters.



#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://php.net/manual/domdocument.createentityreference.php">https://php.net/manual/domdocument.createentityreference.php</a>


### \Contender\Dom\Document::__toString()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Dom\Document::appendChild(Contender\Dom\Node $node)
Adds a node to the end of the list of children of a specified parent node.




#### Parameters
##### `\Contender\Dom\Node` $node





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild</a>
 - <a href="#contenderdomdocumentcreateelementstring-name-stringnull-value">\Contender\Dom\Document::createElement()</a>


### \Contender\Dom\Document::insertBefore(Contender\Dom\Node $node, Contender\Dom\Node|null $referenceNode)
Inserts a node before a reference node as a child of a specified parent node.




#### Parameters
##### `\Contender\Dom\Node` $node



##### `\Contender\Dom\Node|null` $referenceNode





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore">https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore</a>
 - <a href="#contenderdomdocumentcreateelementstring-name-stringnull-value">\Contender\Dom\Document::createElement()</a>


### \Contender\Dom\Document::normalize()
Normalizes the node


Remove empty text nodes and merge adjacent text nodes in this node and all its children.



#### Parameters


#### Return Values
void


### See Also
 - <a href="https://www.php.net/manual/en/domnode.normalize.php">https://www.php.net/manual/en/domnode.normalize.php</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize">https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize</a>


### \Contender\Dom\Document::cloneNode(bool $deep)
Clones a node


Creates a copy of the node.



#### Parameters
##### `bool` $deep

Indicates whether to copy all descendant nodes. This parameter is defaulted to FALSE.



#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode">https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode</a>


### \Contender\Dom\Document::hasChildNodes()
Checks if node has children


This function checks if the node has children.



#### Parameters


#### Return Values
bool


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes">https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes</a>


### \Contender\Dom\Document::removeChild(Contender\Dom\Node $oldnode)
Removes child from list of children




#### Parameters
##### `\Contender\Dom\Node` $oldnode





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild</a>


### \Contender\Dom\Document::replaceChild(Contender\Dom\Node $newnode, Contender\Dom\Node $oldnode)
Replaces a child




#### Parameters
##### `\Contender\Dom\Node` $newnode



##### `\Contender\Dom\Node` $oldnode





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild</a>


### \Contender\Dom\Document::getOwnerDocumentAttribute()




#### Parameters


#### Return Values
\Contender\Dom\Document The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node


### See Also
None

### \Contender\Dom\Document::getParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
mixed|string|int


### See Also
None

### \Contender\Dom\Document::setParameterAttribute(string $name, mixed|null $value)




#### Parameters
##### `string` $name



##### `mixed|null` $value





#### Return Values
void


### See Also
None

### \Contender\Dom\Document::hasParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
bool


### See Also
None

### \Contender\Dom\Document::getElementById(string $query)
Returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> object representing the element whose id property matches the specified string.




#### Parameters
##### `string` $query

tag id



#### Return Values
\Contender\Dom\Element|null Selected node


### See Also
None

### \Contender\Dom\Document::getElementsByClassName(string $query)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> object of all child elements which have all of the given class name(s)




#### Parameters
##### `string` $query

tag class name



#### Return Values
\Contender\Dom\NodeList|\Contender\Dom\Node[]


### See Also
None

### \Contender\Dom\Document::querySelectorAll(string $selectors)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> of <a href="#contenderdomnode">\Contender\Dom\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Dom\NodeList|Node[]


### See Also
None

### \Contender\Dom\Document::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> result if possible




#### Parameters
##### `string` $query

xpath



#### Return Values
\Contender\Dom\NodeList|Node[]


### See Also
None

### \Contender\Dom\Document::getElementsByName(string $query)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> object of elements with a given name in the document.




#### Parameters
##### `string` $query

tag name attribute



#### Return Values
\Contender\Dom\NodeList|\Contender\Dom\Node[]


### See Also
None

### \Contender\Dom\Document::getElementsByTagName(string $tag_name)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> object of elements with the given tag name.




#### Parameters
##### `string` $tag_name

Dom tag name



#### Return Values
\Contender\Dom\NodeList


### See Also
None

### \Contender\Dom\Document::getAttributeNodeNS(string $namespaceURI, string $localName)
Returns the attribute node in namespace namespaceURI with local name localName for the current node.




#### Parameters
##### `string` $namespaceURI

The namespace URI.

##### `string` $localName

The local name.



#### Return Values
\Contender\Dom\NodeList


### See Also
None

### \Contender\Dom\Document::querySelector(string $selectors)
Returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Dom\Node|null


### See Also
None

### \Contender\Dom\Document::evaluate(string $query, int $offset)
Evaluates the given XPath expression and returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> result if possible




#### Parameters
##### `string` $query

xpath

##### `int` $offset





#### Return Values
\Contender\Dom\Node|null


### See Also
None

### \Contender\Dom\Document::find(string $query)
Call querySelectorAll() and <a href="#contenderdomnodelistonlyelement">\Contender\Dom\NodeList::onlyElement()</a>




#### Parameters
##### `string` $query





#### Return Values
\Contender\Dom\NodeList


### See Also
None


\Contender\Dom\DocumentType
==========================
Class DocumentType





Class synopsis
----------------------------

```

Contender\Dom\DocumentType {

    /* Properties */
    public \Contender\Dom\NamedNodeMap $entities ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string|null $internalSubset ;
    public string $name ;
    public string $nodeValue ;
    public \Contender\Dom\NamedNodeMap $notations ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string $publicId ;
    public string $systemId ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\DocumentType::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\DocumentType::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\DocumentType::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\DocumentType::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\DocumentType::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\DocumentType::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\DocumentType::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\DocumentType::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\DocumentType::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\DocumentType::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\DocumentType::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\DocumentType::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\DocumentType::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\DocumentType::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\DocumentType::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\DocumentType::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\DocumentType::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\DocumentType::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\DocumentType::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\DocumentType::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\DocumentType::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\DocumentType::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\DocumentType::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\DocumentType::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\DocumentType::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\DocumentType::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\DocumentType::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\DocumentType::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\DocumentType::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\DocumentType::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\DocumentType::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\DocumentType::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\DocumentType::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\DocumentType::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\DocumentType::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\DocumentType::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\DocumentType::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\DocumentType::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\DocumentType::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\DocumentType::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\DocumentType::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\DocumentType::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\DocumentType::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\DocumentType::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\DocumentType::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\DocumentType::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\DocumentType::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\DocumentType::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\DocumentType::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\DocumentType::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\DocumentType::$text_content __read only__
The text content of this node and its descendants.



### `\Contender\Dom\NamedNodeMap` \Contender\Dom\DocumentType::$entities
A {



### `string` \Contender\Dom\DocumentType::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\DocumentType::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\DocumentType::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\DocumentType::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string|null` \Contender\Dom\DocumentType::$internalSubset
The internal subset as a string, or null if there is none. This is does not contain the delimiting square brackets.



### `string` \Contender\Dom\DocumentType::$name
The name of DTD; i.e., the name immediately following the DOCTYPE keyword.



### `string` \Contender\Dom\DocumentType::$nodeValue
The value of this node, depending on its type



### `\Contender\Dom\NamedNodeMap` \Contender\Dom\DocumentType::$notations
A {



### `mixed|string|int` \Contender\Dom\DocumentType::$parameter




### `string|null` \Contender\Dom\DocumentType::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Dom\DocumentType::$publicId
The public identifier of the external subset.



### `string` \Contender\Dom\DocumentType::$systemId
The system identifier of the external subset. This may be an absolute URI or not.






Methods
----------------------------


\Contender\Dom\Element
==========================
Class Element





Class synopsis
----------------------------

```

Contender\Dom\Element {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public bool $schemaTypeInfo ;
    public string $tagName ;
    public \Contender\Dom\NamedNodeMap $attributes ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public attr (?mixed $name = NULL) : string|null
    public getAttribute (string $name) : mixed
    public setAttribute (string $name, string $value) : void
    public getAttributeNames () : array
    public getAttributeNamesGenerator () : \Generator|null
    public getAttributesAttribute () : \Contender\Dom\NamedNodeMap

 }

```


Constants
----------------------------




Properties
----------------------------

### `\Contender\Dom\NamedNodeMap` \Contender\Dom\Element::$attributes __read only__




### `string|null` \Contender\Dom\Element::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Element::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Element::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Element::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Element::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Element::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Element::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Element::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Element::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Element::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Element::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Element::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Element::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Element::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Element::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Element::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Element::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Element::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Element::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Element::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Element::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Element::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Element::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Element::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Element::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Element::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Element::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Element::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Element::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Element::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Element::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Element::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Element::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Element::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Element::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Element::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Element::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\Element::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Element::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Element::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Element::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Element::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Element::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Element::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Element::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Element::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Element::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\Element::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Element::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Element::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Element::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Element::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Element::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Element::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Element::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Element::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\Element::$parameter




### `string|null` \Contender\Dom\Element::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `bool` \Contender\Dom\Element::$schemaTypeInfo
Not implemented yet, always return NULL



### `string` \Contender\Dom\Element::$tagName
The element name






Methods
----------------------------

### \Contender\Dom\Element::attr(mixed|null $name)
if call attr('name')

Alias getAttribute()

if call attr('name', 'value')
Alias setAttribute()



#### Parameters
##### `mixed|null` $name





#### Return Values
string|null


### See Also
None

### \Contender\Dom\Element::getAttribute(string $name)
Get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
None

### \Contender\Dom\Element::setAttribute(string $name, string $value)
Set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
void


### See Also
None

### \Contender\Dom\Element::getAttributeNames()
Returns an array of strings that are attributes to an Element.


If you simply want to get the attribute and its value, it is faster to combine with <a href="#contenderdomelementgetattributestring-name">\Contender\Dom\Element::getAttribute()</a>, than to use the <a href="#contenderdomnamednodemap-contenderdomelementattributes-read-only">\Contender\Dom\Element::$attributes</a> property.



#### Parameters


#### Return Values
array


### See Also
 - <a href="#contenderdomelementgetattributenamesgenerator">\Contender\Dom\Element::getAttributeNamesGenerator()</a>


### \Contender\Dom\Element::getAttributeNamesGenerator()
Returns a Generator of strings that are attributes to an Element.




#### Parameters


#### Return Values
\Generator|null


### See Also
 - <a href="#contenderdomelementgetattributenames">\Contender\Dom\Element::getAttributeNames()</a>


### \Contender\Dom\Element::getAttributesAttribute()
Returns the Element's Attribute. Note that it returns <a href="#contenderdomnamednodemap">\Contender\Dom\NamedNodeMap</a> rather than an array.




#### Parameters


#### Return Values
\Contender\Dom\NamedNodeMap


### See Also
None


\Contender\Dom\Entity
==========================
Class Entity





Class synopsis
----------------------------

```

Contender\Dom\Entity {

    /* Properties */
    public string|null $actualEncoding ;
    public string|null $encoding ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public string|null $notationName ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string|null $publicId ;
    public string|null $systemId ;
    public string|null $version ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\Entity::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Entity::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Entity::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Entity::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Entity::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Entity::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Entity::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Entity::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Entity::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Entity::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Entity::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Entity::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Entity::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Entity::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Entity::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Entity::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Entity::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Entity::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Entity::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Entity::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Entity::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Entity::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Entity::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Entity::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Entity::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Entity::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Entity::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Entity::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Entity::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Entity::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Entity::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Entity::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Entity::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Entity::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Entity::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Entity::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Entity::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\Entity::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Entity::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Entity::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Entity::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Entity::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Entity::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Entity::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Entity::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Entity::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Entity::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\Entity::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Entity::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Entity::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Entity::$text_content __read only__
The text content of this node and its descendants.



### `string|null` \Contender\Dom\Entity::$actualEncoding
An attribute specifying the encoding used for this entity at the time of parsing, when it is an external



### `string|null` \Contender\Dom\Entity::$encoding
An attribute specifying, as part of the text declaration, the encoding of this entity, when it is an external



### `string` \Contender\Dom\Entity::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Entity::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Entity::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Entity::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Entity::$nodeValue
The value of this node, depending on its type



### `string|null` \Contender\Dom\Entity::$notationName
For unparsed entities, the name of the notation for the entity. For parsed entities, this is NULL.



### `mixed|string|int` \Contender\Dom\Entity::$parameter




### `string|null` \Contender\Dom\Entity::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string|null` \Contender\Dom\Entity::$publicId
The public identifier associated with the entity if specified, and NULL otherwise.



### `string|null` \Contender\Dom\Entity::$systemId
The system identifier associated with the entity if specified, and NULL otherwise. This may be an



### `string|null` \Contender\Dom\Entity::$version
An attribute specifying, as part of the text declaration, the version number of this entity, when it is an






Methods
----------------------------


\Contender\Dom\EntityReference
==========================
Class EntityReference





Class synopsis
----------------------------

```

Contender\Dom\EntityReference {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\EntityReference::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\EntityReference::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\EntityReference::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\EntityReference::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\EntityReference::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\EntityReference::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\EntityReference::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\EntityReference::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\EntityReference::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\EntityReference::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\EntityReference::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\EntityReference::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\EntityReference::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\EntityReference::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\EntityReference::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\EntityReference::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\EntityReference::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\EntityReference::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\EntityReference::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\EntityReference::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\EntityReference::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\EntityReference::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\EntityReference::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\EntityReference::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\EntityReference::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\EntityReference::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\EntityReference::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\EntityReference::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\EntityReference::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\EntityReference::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\EntityReference::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\EntityReference::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\EntityReference::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\EntityReference::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\EntityReference::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\EntityReference::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\EntityReference::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\EntityReference::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\EntityReference::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\EntityReference::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\EntityReference::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\EntityReference::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\EntityReference::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\EntityReference::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\EntityReference::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\EntityReference::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\EntityReference::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\EntityReference::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\EntityReference::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\EntityReference::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\EntityReference::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\EntityReference::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\EntityReference::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\EntityReference::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\EntityReference::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\EntityReference::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\EntityReference::$parameter




### `string|null` \Contender\Dom\EntityReference::$prefix
The namespace prefix of this node, or NULL if it is unspecified.






Methods
----------------------------


\Contender\Dom\Implementation
==========================
Class Implementation





Class synopsis
----------------------------

```

Contender\Dom\Implementation {

    /* Methods */
    public __construct (DOMImplementation $element) : void
    public hasFeature (?mixed $feature = NULL, ?mixed $version = NULL) : bool
    public createDocumentType ([?mixed $qualifiedName = null], [?mixed $publicId = null], [?mixed $systemId = null]) : \Contender\Dom\DocumentType
    public createDocument ([?mixed $namespaceURI = null], [?mixed $qualifiedName = null], [?Contender\Dom\DocumentType $doctype = null]) : \Contender\Dom\Document

 }

```


Constants
----------------------------




Properties
----------------------------




Methods
----------------------------

### \Contender\Dom\Implementation::__construct(DOMImplementation $element)
Node constructor.




#### Parameters
##### `\DOMImplementation` $element





#### Return Values
void


### See Also
None

### \Contender\Dom\Implementation::hasFeature(mixed|null $feature, mixed|null $version)
Test if the DOM implementation implements a specific feature



#### Parameters
##### `string` $feature

The feature to test.

##### `string` $version

The version number of the feature to test. In level 2, this can be either 2.0 or 1.0.



#### Return Values
bool true on success or false on failure.


### See Also
 - <a href="https://php.net/manual/en/domimplementation.hasfeature.php">https://php.net/manual/en/domimplementation.hasfeature.php</a>


### \Contender\Dom\Implementation::createDocumentType(mixed|null $qualifiedName, mixed|null $publicId, mixed|null $systemId)
Creates an empty DOMDocumentType object



#### Parameters
##### `string` $qualifiedName

[optional] The qualified name of the document type to create.

##### `string` $publicId

[optional] The external subset public identifier.

##### `string` $systemId

[optional] The external subset system identifier.



#### Return Values
\Contender\Dom\DocumentType A new DOMDocumentType node with its ownerDocument set to &null;.


### See Also
 - <a href="https://php.net/manual/en/domimplementation.createdocumenttype.php">https://php.net/manual/en/domimplementation.createdocumenttype.php</a>


### \Contender\Dom\Implementation::createDocument(mixed|null $namespaceURI, mixed|null $qualifiedName, Contender\Dom\DocumentType|null $doctype)
Creates a DOMDocument object of the specified type with its document element



#### Parameters
##### `string` $namespaceURI

[optional] The namespace URI of the document element to create.

##### `string` $qualifiedName

[optional]The qualified name of the document element to create.

##### `\Contender\Dom\DocumentType` $doctype

[optional] The type of document to create or &null;.



#### Return Values
\Contender\Dom\Document A new DOMDocument object. If namespaceURI, qualifiedName, and doctype are null, the returned DOMDocument is empty with no document element


### See Also
 - <a href="https://php.net/manual/en/domimplementation.createdocument.php">https://php.net/manual/en/domimplementation.createdocument.php</a>



\Contender\Dom\NamedNodeMap
==========================
Class NamedNodeMap





Class synopsis
----------------------------

```

Contender\Dom\NamedNodeMap {

    /* Methods */
    public __construct ([?mixed $items = []], [?DOMNamedNodeMap $map = null]) : mixed
    public getNamedItem (string $name) : \Contender\Dom\Attr|null
    public getNamedItemNS (string $namespaceURI, string $localName) : \Contender\Dom\Attr|null

 }

```


Constants
----------------------------




Properties
----------------------------




Methods
----------------------------

### \Contender\Dom\NamedNodeMap::__construct(mixed|null $items, DOMNamedNodeMap|null $map)
NamedNodeMap constructor.



#### Parameters
##### `array` $items



##### `\DOMNamedNodeMap|null` $map





#### Return Values
mixed


### See Also
None

### \Contender\Dom\NamedNodeMap::getNamedItem(string $name)
Retrieves a node specified by name




#### Parameters
##### `string` $name

The nodeName of the node to retrieve.



#### Return Values
\Contender\Dom\Attr|null


### See Also
None

### \Contender\Dom\NamedNodeMap::getNamedItemNS(string $namespaceURI, string $localName)
Retrieves a node specified by local name and namespace URI




#### Parameters
##### `string` $namespaceURI

The namespace URI of the node to retrieve.

##### `string` $localName

The local name of the node to retrieve.



#### Return Values
\Contender\Dom\Attr|null


### See Also
None


\Contender\Dom\Node
==========================
Each element accessed from the <a href="#contenderdomdocument">\Contender\Dom\Document</a>







Class synopsis
----------------------------

```

Contender\Dom\Node {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public __construct (DOMNode $element) : void
    public __toString () : string
    public remove () : \Contender\Dom\Node|null
    public after (?mixed $elements = NULL) : \Contender\Dom\Node|null
    public before (?mixed $elements = NULL) : \Contender\Dom\Node|null
    public appendChild (Contender\Dom\Node $node) : \Contender\Dom\Node
    public insertBefore (Contender\Dom\Node $node, [?Contender\Dom\Node $referenceNode = null]) : \Contender\Dom\Node
    public normalize () : void
    public cloneNode ([bool $deep = false]) : \Contender\Dom\Node
    public hasChildNodes () : bool
    public removeChild (Contender\Dom\Node $oldnode) : \Contender\Dom\Node
    public replaceChild (Contender\Dom\Node $newnode, Contender\Dom\Node $oldnode) : \Contender\Dom\Node
    public getOwnerDocumentAttribute () : \Contender\Dom\Document
    public getParameterAttribute (string $name) : mixed|string|int
    public setParameterAttribute (string $name, ?mixed $value = NULL) : void
    public hasParameterAttribute (string $name) : bool
    public getElementById (string $query) : \Contender\Dom\Element|null
    public getElementsByClassName (string $query) : \Contender\Dom\NodeList|\Contender\Dom\Node[]
    public querySelectorAll (string $selectors) : \Contender\Dom\NodeList|Node[]
    public evaluateToCollection (string $query) : \Contender\Dom\NodeList|Node[]
    public getElementsByName (string $query) : \Contender\Dom\NodeList|\Contender\Dom\Node[]
    public getElementsByTagName (string $tag_name) : \Contender\Dom\NodeList
    public getAttributeNodeNS (string $namespaceURI, string $localName) : \Contender\Dom\NodeList
    public querySelector (string $selectors) : \Contender\Dom\Node|null
    public evaluate (string $query, [int $offset = 0]) : \Contender\Dom\Node|null
    public find (string $query) : \Contender\Dom\NodeList

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\Node::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Node::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Node::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Node::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Node::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Node::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Node::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Node::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Node::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Node::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Node::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Node::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Node::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Node::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Node::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Node::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Node::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Node::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Node::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Node::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Node::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Node::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Node::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Node::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Node::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Node::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Node::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Node::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Node::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Node::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Node::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Node::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Node::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Node::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Node::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Node::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Node::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\Node::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Node::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Node::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Node::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Node::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Node::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Node::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Node::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Node::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Node::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\Node::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Node::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Node::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Node::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Node::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Node::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Node::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Node::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Node::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\Node::$parameter




### `string|null` \Contender\Dom\Node::$prefix
The namespace prefix of this node, or NULL if it is unspecified.






Methods
----------------------------

### \Contender\Dom\Node::__construct(DOMNode $element)
Node constructor.




#### Parameters
##### `\DOMNode` $element





#### Return Values
void


### See Also
None

### \Contender\Dom\Node::__toString()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Dom\Node::remove()
Removes the object from the tree it belongs to.




#### Parameters


#### Return Values
\Contender\Dom\Node|null


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/remove">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/remove</a>


### \Contender\Dom\Node::after(mixed|null $elements)
Inserts a set of <a href="#contenderdomnode">\Contender\Dom\Node</a> or String in the children list of this ChildNode's parent, just after this ChildNode. Strings are inserted as equivalent Text nodes.




#### Parameters
##### `mixed|null` $elements





#### Return Values
\Contender\Dom\Node|null


### See Also
 - <a href="#contenderdomdocumentcreateelementstring-name-stringnull-value">\Contender\Dom\Document::createElement()</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/after">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/after</a>


### \Contender\Dom\Node::before(mixed|null $elements)
Inserts a set of <a href="#contenderdomnode">\Contender\Dom\Node</a>  or String in the children list of this ChildNode's parent, just before this ChildNode. Strings are inserted as equivalent Text nodes.




#### Parameters
##### `mixed|null` $elements





#### Return Values
\Contender\Dom\Node|null


### See Also
 - <a href="#contenderdomdocumentcreateelementstring-name-stringnull-value">\Contender\Dom\Document::createElement()</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before</a>


### \Contender\Dom\Node::appendChild(Contender\Dom\Node $node)
Adds a node to the end of the list of children of a specified parent node.




#### Parameters
##### `\Contender\Dom\Node` $node





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild</a>
 - <a href="#contenderdomdocumentcreateelementstring-name-stringnull-value">\Contender\Dom\Document::createElement()</a>


### \Contender\Dom\Node::insertBefore(Contender\Dom\Node $node, Contender\Dom\Node|null $referenceNode)
Inserts a node before a reference node as a child of a specified parent node.




#### Parameters
##### `\Contender\Dom\Node` $node



##### `\Contender\Dom\Node|null` $referenceNode





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore">https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore</a>
 - <a href="#contenderdomdocumentcreateelementstring-name-stringnull-value">\Contender\Dom\Document::createElement()</a>


### \Contender\Dom\Node::normalize()
Normalizes the node


Remove empty text nodes and merge adjacent text nodes in this node and all its children.



#### Parameters


#### Return Values
void


### See Also
 - <a href="https://www.php.net/manual/en/domnode.normalize.php">https://www.php.net/manual/en/domnode.normalize.php</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize">https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize</a>


### \Contender\Dom\Node::cloneNode(bool $deep)
Clones a node


Creates a copy of the node.



#### Parameters
##### `bool` $deep

Indicates whether to copy all descendant nodes. This parameter is defaulted to FALSE.



#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode">https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode</a>


### \Contender\Dom\Node::hasChildNodes()
Checks if node has children


This function checks if the node has children.



#### Parameters


#### Return Values
bool


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes">https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes</a>


### \Contender\Dom\Node::removeChild(Contender\Dom\Node $oldnode)
Removes child from list of children




#### Parameters
##### `\Contender\Dom\Node` $oldnode





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild</a>


### \Contender\Dom\Node::replaceChild(Contender\Dom\Node $newnode, Contender\Dom\Node $oldnode)
Replaces a child




#### Parameters
##### `\Contender\Dom\Node` $newnode



##### `\Contender\Dom\Node` $oldnode





#### Return Values
\Contender\Dom\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild</a>


### \Contender\Dom\Node::getOwnerDocumentAttribute()




#### Parameters


#### Return Values
\Contender\Dom\Document The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node


### See Also
None

### \Contender\Dom\Node::getParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
mixed|string|int


### See Also
None

### \Contender\Dom\Node::setParameterAttribute(string $name, mixed|null $value)




#### Parameters
##### `string` $name



##### `mixed|null` $value





#### Return Values
void


### See Also
None

### \Contender\Dom\Node::hasParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
bool


### See Also
None

### \Contender\Dom\Node::getElementById(string $query)
Returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> object representing the element whose id property matches the specified string.




#### Parameters
##### `string` $query

tag id



#### Return Values
\Contender\Dom\Element|null Selected node


### See Also
None

### \Contender\Dom\Node::getElementsByClassName(string $query)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> object of all child elements which have all of the given class name(s)




#### Parameters
##### `string` $query

tag class name



#### Return Values
\Contender\Dom\NodeList|\Contender\Dom\Node[]


### See Also
None

### \Contender\Dom\Node::querySelectorAll(string $selectors)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> of <a href="#contenderdomnode">\Contender\Dom\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Dom\NodeList|Node[]


### See Also
None

### \Contender\Dom\Node::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> result if possible




#### Parameters
##### `string` $query

xpath



#### Return Values
\Contender\Dom\NodeList|Node[]


### See Also
None

### \Contender\Dom\Node::getElementsByName(string $query)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> object of elements with a given name in the document.




#### Parameters
##### `string` $query

tag name attribute



#### Return Values
\Contender\Dom\NodeList|\Contender\Dom\Node[]


### See Also
None

### \Contender\Dom\Node::getElementsByTagName(string $tag_name)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> object of elements with the given tag name.




#### Parameters
##### `string` $tag_name

Dom tag name



#### Return Values
\Contender\Dom\NodeList


### See Also
None

### \Contender\Dom\Node::getAttributeNodeNS(string $namespaceURI, string $localName)
Returns the attribute node in namespace namespaceURI with local name localName for the current node.




#### Parameters
##### `string` $namespaceURI

The namespace URI.

##### `string` $localName

The local name.



#### Return Values
\Contender\Dom\NodeList


### See Also
None

### \Contender\Dom\Node::querySelector(string $selectors)
Returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Dom\Node|null


### See Also
None

### \Contender\Dom\Node::evaluate(string $query, int $offset)
Evaluates the given XPath expression and returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> result if possible




#### Parameters
##### `string` $query

xpath

##### `int` $offset





#### Return Values
\Contender\Dom\Node|null


### See Also
None

### \Contender\Dom\Node::find(string $query)
Call querySelectorAll() and <a href="#contenderdomnodelistonlyelement">\Contender\Dom\NodeList::onlyElement()</a>




#### Parameters
##### `string` $query





#### Return Values
\Contender\Dom\NodeList


### See Also
None


\Contender\Dom\NodeList
==========================
A collection of <a href="#contenderdomnode">\Contender\Dom\Node</a> from <a href="#contenderdomdocument">\Contender\Dom\Document</a>







Class synopsis
----------------------------

```

Contender\Dom\NodeList {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;

    /* Methods */
    public __construct ([?mixed $items = []]) : void
    public makeByDOMNodeList (DOMNodeList $element, Contender\Dom\ElementInterface $node) : \Contender\Dom\NodeList
    public find (string $selectors) : \Contender\Dom\NodeList
    public onlyElement () : \Contender\Dom\NodeList
    public querySelectorAll (string $selectors) : \Contender\Dom\NodeList|Node[]
    public sortDom () : \Contender\Dom\NodeList
    public querySelector (string $query) : \Contender\Dom\Node|null
    public attr (?mixed $param = NULL) : string|null
    public getAttribute (string $name) : mixed
    public setAttribute (string $name, string $value) : void
    public remove () : \Contender\Dom\NodeList

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Dom\NodeList::$innerHTML
1st of innerHTML



### `string` \Contender\Dom\NodeList::$innerXML
1st of innerXML



### `string` \Contender\Dom\NodeList::$inner_h_t_m_l
1st of innerHTML



### `string` \Contender\Dom\NodeList::$inner_x_m_l
1st of innerXML






Methods
----------------------------

### \Contender\Dom\NodeList::__construct(mixed|null $items)
NodeList constructor.



#### Parameters
##### `array` $items





#### Return Values
void


### See Also
None

### \Contender\Dom\NodeList::makeByDOMNodeList(DOMNodeList $element, Contender\Dom\ElementInterface $node)




#### Parameters
##### `\DOMNodeList` $element



##### `\Contender\Dom\ElementInterface` $node





#### Return Values
\Contender\Dom\NodeList


### See Also
None

### \Contender\Dom\NodeList::find(string $selectors)
Call <a href="#contenderdomnodelistqueryselectorallstring-selectors">\Contender\Dom\NodeList::querySelectorAll()</a> and <a href="#contenderdomnodelistonlyelement">\Contender\Dom\NodeList::onlyElement()</a>




#### Parameters
##### `string` $selectors





#### Return Values
\Contender\Dom\NodeList


### See Also
None

### \Contender\Dom\NodeList::onlyElement()
HTMLElement only Node




#### Parameters


#### Return Values
\Contender\Dom\NodeList Filtered NodeList


### See Also
None

### \Contender\Dom\NodeList::querySelectorAll(string $selectors)
Returns a <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a> of <a href="#contenderdomnode">\Contender\Dom\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Dom\NodeList|Node[]


### See Also
None

### \Contender\Dom\NodeList::sortDom()
Sort <a href="#contenderdomnode">\Contender\Dom\Node</a> by line number and Xpath




#### Parameters


#### Return Values
\Contender\Dom\NodeList Sorted NodeList


### See Also
None

### \Contender\Dom\NodeList::querySelector(string $query)
Returns a <a href="#contenderdomnode">\Contender\Dom\Node</a> matching CSS selector.




#### Parameters
##### `string` $query

Valid CSS selector string



#### Return Values
\Contender\Dom\Node|null


### See Also
None

### \Contender\Dom\NodeList::attr(mixed|null $param)
if call attr('name')

Alias getAttribute()

if call attr('name', 'value')
Alias setAttribute()



#### Parameters
##### `mixed|null` $param





#### Return Values
string|null


### See Also
 - <a href="#contenderdomelementattrmixednull-name">\Contender\Dom\Element::attr()</a>


### \Contender\Dom\NodeList::getAttribute(string $name)
get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
 - <a href="#contenderdomelementgetattributestring-name">\Contender\Dom\Element::getAttribute()</a>


### \Contender\Dom\NodeList::setAttribute(string $name, string $value)
set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
void


### See Also
 - <a href="#contenderdomelementsetattributestring-name-string-value">\Contender\Dom\Element::setAttribute()</a>


### \Contender\Dom\NodeList::remove()
Removes the object from the tree it belongs to.




#### Parameters


#### Return Values
\Contender\Dom\NodeList


### See Also
 - <a href="#contenderdomnoderemove">\Contender\Dom\Node::remove()</a>



\Contender\Dom\Text
==========================
Class Text





Class synopsis
----------------------------

```

Contender\Dom\Text {

    /* Properties */
    public string $data ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string $wholeText ;
    public string|null $baseURI ;
    public \Contender\Dom\NodeList $childNodes ;
    public \Contender\Dom\NodeList $child_nodes ;
    public \Contender\Dom\NodeList $children ;
    public \Contender\Dom\Node|null $firstChild ;
    public \Contender\Dom\Element|null $firstElementChild ;
    public \Contender\Dom\Node|null $first_child ;
    public \Contender\Dom\Element|null $first_element_child ;
    public string $innerText ;
    public string $inner_text ;
    public bool $isAttr ;
    public bool $isCharacterData ;
    public bool $isComment ;
    public bool $isDocument ;
    public bool $isDocumentFragment ;
    public bool $isDocumentType ;
    public bool $isElement ;
    public bool $isEntity ;
    public bool $isEntityReference ;
    public bool $isNotation ;
    public bool $isProcessingInstruction ;
    public bool $isText ;
    public bool $is_attr ;
    public bool $is_character_data ;
    public bool $is_comment ;
    public bool $is_document ;
    public bool $is_document_fragment ;
    public bool $is_document_type ;
    public bool $is_element ;
    public bool $is_entity ;
    public bool $is_entity_reference ;
    public bool $is_notation ;
    public bool $is_processing_instruction ;
    public bool $is_text ;
    public \Contender\Dom\Node|null $lastChild ;
    public \Contender\Dom\Element|null $lastElementChild ;
    public \Contender\Dom\Node|null $last_child ;
    public \Contender\Dom\Element|null $last_element_child ;
    public int $length ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Dom\Node|null $nextElementSibling ;
    public \Contender\Dom\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Dom\Document $ownerDocument ;
    public \Contender\Dom\Document $owner_document ;
    public \Contender\Dom\Node|null $previousElementSibling ;
    public \Contender\Dom\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public splitText (?mixed $offset = NULL) : \Contender\Dom\Text
    public isWhitespaceInElementContent () : void

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Dom\Text::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Dom\NodeList` \Contender\Dom\Text::$childNodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Text::$child_nodes __read only__
Aliases to children



### `\Contender\Dom\NodeList` \Contender\Dom\Text::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderdomnodelist">\Contender\Dom\NodeList</a>.



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$firstChild __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Text::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$first_child __read only__
Get a first child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Text::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Text::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `string` \Contender\Dom\Text::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderdomnodetextcontent-read-only">\Contender\Dom\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Dom\Text::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Text::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Text::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Text::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Text::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Text::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Text::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Text::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Text::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Text::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Text::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Text::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Dom\Text::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Dom\Text::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Dom\Text::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Dom\Text::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Dom\Text::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Dom\Text::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Dom\Text::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Dom\Text::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Dom\Text::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Dom\Text::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Dom\Text::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Dom\Text::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$lastChild __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Text::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$last_child __read only__
Get a last child node.



### `\Contender\Dom\Element|null` \Contender\Dom\Text::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Dom\Text::$length __read only__
The length of the contents.



### `int` \Contender\Dom\Text::$lineNo __read only__
Get line number for a node



### `int` \Contender\Dom\Text::$line_no __read only__
Get line number for a node



### `string` \Contender\Dom\Text::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Dom\Text::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Text::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Dom\Text::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Dom\Text::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Dom\Text::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Dom\Text::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Text::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Text::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Dom\Text::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Dom\Document` \Contender\Dom\Text::$ownerDocument __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Document` \Contender\Dom\Text::$owner_document __read only__
The <a href="#contenderdomdocument">\Contender\Dom\Document</a> object associated with this node



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Dom\Node|null` \Contender\Dom\Text::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Dom\Text::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Text::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Dom\Text::$data
The contents of the node.



### `string` \Contender\Dom\Text::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Text::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Text::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Text::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Dom\Text::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Dom\Text::$parameter




### `string|null` \Contender\Dom\Text::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Dom\Text::$wholeText
Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.






Methods
----------------------------

### \Contender\Dom\Text::splitText(mixed|null $offset)
Breaks this node into two nodes at the specified offset




#### Parameters
##### `int` $offset

The offset at which to split, starting from 0.



#### Return Values
\Contender\Dom\Text The new node of the same type, which contains all the content at and after the offset.


### See Also
 - <a href="https://php.net/manual/en/domtext.splittext.php">https://php.net/manual/en/domtext.splittext.php</a>


### \Contender\Dom\Text::isWhitespaceInElementContent()
Indicates whether this text node contains whitespace



#### Parameters


#### Return Values
void true on success or false on failure.


### See Also
 - <a href="https://php.net/manual/en/domtext.iswhitespaceinelementcontent.php">https://php.net/manual/en/domtext.iswhitespaceinelementcontent.php</a>



