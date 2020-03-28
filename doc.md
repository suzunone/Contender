\Contender\Contender
==========================
Load Html to generate a <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object.


Easy to use
------------------------------------------
### Create <a href="#contenderelementsdocument">\Contender\Elements\Document</a> from url

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

### Create <a href="#contenderelementsdocument">\Contender\Elements\Document</a> from html

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
    public loadStr (string $html, [array $options = []]) : \Contender\Elements\Document
    public load (string $html, [array $options = []]) : \Contender\Elements\Document
    public setOptions (array $options) : self
    public setOption (string $option) : self
    public loadDomDocument (DOMDocument $document) : \Contender\Elements\Document
    public loadUrl (string $url, [array $options = []], [?array $context_option = null]) : \Contender\Elements\Document
    public loadFromUrl (string $url, [array $options = []], [?array $context_option = null]) : \Contender\Elements\Document

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
Do not minify html, then generating to <a href="#contenderelementsdocument">\Contender\Elements\Document</a>



### `string` \Contender\Contender::OPTION_MINIFY_ENABLE = "OPTION_MINIFY_ENABLE"




### `string` \Contender\Contender::OPTION_REMOVE_STYLE_ENABLE = "OPTION_REMOVE_STYLE_ENABLE"
Remove `<style>`tags, then generating to <a href="#contenderelementsdocument">\Contender\Elements\Document</a>



### `string` \Contender\Contender::OPTION_REMOVE_STYLE_DISABLE = "OPTION_REMOVE_STYLE_DISABLE"




### `string` \Contender\Contender::OPTION_REMOVE_SCRIPT_ENABLE = "OPTION_REMOVE_SCRIPT_ENABLE"
Remove `<script>`tags, then generating to <a href="#contenderelementsdocument">\Contender\Elements\Document</a>



### `string` \Contender\Contender::OPTION_REMOVE_SCRIPT_DISABLE = "OPTION_REMOVE_SCRIPT_DISABLE"




### `string` \Contender\Contender::OPTION_REMOVE_COMMENT_ENABLE = "OPTION_REMOVE_COMMENT_ENABLE"
Remove comment tags, then generating to <a href="#contenderelementsdocument">\Contender\Elements\Document</a>



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
Generate a <a href="#contenderelementsdocument">\Contender\Elements\Document</a>  from a string(static call)




#### Parameters
##### `string` $html

The string containing the HTML.

##### `array` $options

Array multiple Contender option constants



#### Return Values
\Contender\Elements\Document


### See Also
 - <a href="#contendercontenderloadstring-html-array-options">\Contender\Contender::load()</a>
 - <a href="#contendercontenderloadurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadUrl()</a>


### \Contender\Contender::load(string $html, array $options)
Generate a <a href="#contenderelementsdocument">\Contender\Elements\Document</a> from a string




#### Parameters
##### `string` $html

The string containing the HTML.

##### `array` $options

Array multiple Contender option constants



#### Return Values
\Contender\Elements\Document


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
Generate a <a href="#contenderelementsdocument">\Contender\Elements\Document</a>  from a DOMDocument




#### Parameters
##### `\DOMDocument` $document





#### Return Values
\Contender\Elements\Document


### See Also
 - <a href="https://www.php.net/manual/en/class.domdocument.php">https://www.php.net/manual/en/class.domdocument.php</a>


### \Contender\Contender::loadUrl(string $url, array $options, array|null $context_option)
Generate a <a href="#contenderelementsdocument">\Contender\Elements\Document</a>  from a URL(static call)




#### Parameters
##### `string` $url

The path to the HTML document.

##### `array` $options

Array multiple Contender option constants

##### `array|null` $context_option

Context options



#### Return Values
\Contender\Elements\Document


### See Also
 - <a href="https://www.php.net/manual/en/context.php">https://www.php.net/manual/en/context.php</a>
 - <a href="#contendercontenderloadstrstring-html-array-options">\Contender\Contender::loadStr()</a>
 - <a href="#contendercontenderloadfromurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadFromUrl()</a>


### \Contender\Contender::loadFromUrl(string $url, array $options, array|null $context_option)
Generate a <a href="#contenderelementsdocument">\Contender\Elements\Document</a>  from a URL




#### Parameters
##### `string` $url

The path to the HTML document.

##### `array` $options

Array multiple Contender option constants

##### `array|null` $context_option

Context options



#### Return Values
\Contender\Elements\Document


### See Also
 - <a href="https://www.php.net/manual/en/context.php">https://www.php.net/manual/en/context.php</a>
 - <a href="#contendercontenderloadstrstring-html-array-options">\Contender\Contender::loadStr()</a>
 - <a href="#contendercontenderloadurlstring-url-array-options-arraynull-contextoption">\Contender\Contender::loadUrl()</a>



\Contender\Elements\Attr
==========================
Class Attr





Class synopsis
----------------------------

```

Contender\Elements\Attr {

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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string $name ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Element $ownerElement ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Element $owner_element ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public bool $schemaTypeInfo ;
    public bool $specified ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public getNameAttribute () : string
    public getValueAttribute () : string
    public setValueAttribute (string $value) : void
    public getOwnerElementAttribute () : \Contender\Elements\Element

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\Attr::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Attr::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Attr::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Attr::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Attr::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Attr::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Attr::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Attr::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Attr::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Attr::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Attr::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Attr::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Attr::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Attr::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Attr::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Attr::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Attr::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Attr::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Attr::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Attr::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Attr::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Attr::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Attr::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Attr::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Attr::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Attr::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Attr::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Attr::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Attr::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Attr::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Attr::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Attr::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Attr::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Attr::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Attr::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Attr::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Attr::$localName __read only__
Returns the local part of the qualified name of this node.



### `string` \Contender\Elements\Attr::$name __read only__




### `string|null` \Contender\Elements\Attr::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Attr::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Attr::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Attr::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Attr::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Attr::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Attr::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Attr::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Attr::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Attr::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Element` \Contender\Elements\Attr::$ownerElement __read only__




### `\Contender\Elements\Document` \Contender\Elements\Attr::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Element` \Contender\Elements\Attr::$owner_element __read only__




### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Attr::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `bool` \Contender\Elements\Attr::$schemaTypeInfo __read only__
Not implemented yet, always is NULL



### `bool` \Contender\Elements\Attr::$specified __read only__
Not implemented yet, always is NULL



### `string` \Contender\Elements\Attr::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Attr::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Attr::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Attr::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Attr::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Attr::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Attr::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\Attr::$parameter




### `string|null` \Contender\Elements\Attr::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Elements\Attr::$value







Methods
----------------------------

### \Contender\Elements\Attr::getNameAttribute()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Elements\Attr::getValueAttribute()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Elements\Attr::setValueAttribute(string $value)




#### Parameters
##### `string` $value





#### Return Values
void


### See Also
None

### \Contender\Elements\Attr::getOwnerElementAttribute()




#### Parameters


#### Return Values
\Contender\Elements\Element


### See Also
None


\Contender\Elements\CdataSection
==========================
Class CdataSection





Class synopsis
----------------------------

```

Contender\Elements\CdataSection {

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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $length ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\CdataSection::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\CdataSection::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\CdataSection::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\CdataSection::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CdataSection::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CdataSection::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\CdataSection::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\CdataSection::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\CdataSection::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\CdataSection::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\CdataSection::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\CdataSection::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\CdataSection::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\CdataSection::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\CdataSection::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\CdataSection::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\CdataSection::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\CdataSection::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\CdataSection::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\CdataSection::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\CdataSection::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\CdataSection::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\CdataSection::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\CdataSection::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\CdataSection::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\CdataSection::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\CdataSection::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\CdataSection::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\CdataSection::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\CdataSection::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\CdataSection::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\CdataSection::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CdataSection::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CdataSection::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\CdataSection::$length __read only__
The length of the contents.



### `int` \Contender\Elements\CdataSection::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\CdataSection::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\CdataSection::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\CdataSection::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\CdataSection::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\CdataSection::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\CdataSection::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\CdataSection::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\CdataSection::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\CdataSection::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\CdataSection::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\CdataSection::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\CdataSection::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\CdataSection::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CdataSection::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\CdataSection::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\CdataSection::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\CdataSection::$data
The contents of the node.



### `string` \Contender\Elements\CdataSection::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CdataSection::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CdataSection::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CdataSection::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CdataSection::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\CdataSection::$parameter




### `string|null` \Contender\Elements\CdataSection::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Elements\CdataSection::$wholeText
Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.






Methods
----------------------------


\Contender\Elements\CharacterData
==========================
Class CharacterData





Class synopsis
----------------------------

```

Contender\Elements\CharacterData {

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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $length ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public substringData (?mixed $offset = NULL, ?mixed $count = NULL) : string
    public appendData (?mixed $data = NULL) : void
    public insertData (?mixed $offset = NULL, ?mixed $data = NULL) : void
    public deleteData (?mixed $offset = NULL, ?mixed $count = NULL) : void
    public replaceData (?mixed $offset = NULL, ?mixed $count = NULL, ?mixed $data = NULL) : void

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\CharacterData::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\CharacterData::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\CharacterData::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\CharacterData::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CharacterData::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CharacterData::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\CharacterData::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\CharacterData::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\CharacterData::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\CharacterData::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\CharacterData::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\CharacterData::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\CharacterData::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\CharacterData::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\CharacterData::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\CharacterData::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\CharacterData::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\CharacterData::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\CharacterData::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\CharacterData::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\CharacterData::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\CharacterData::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\CharacterData::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\CharacterData::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\CharacterData::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\CharacterData::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\CharacterData::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\CharacterData::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\CharacterData::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\CharacterData::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\CharacterData::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\CharacterData::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CharacterData::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\CharacterData::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\CharacterData::$length __read only__
The length of the contents.



### `int` \Contender\Elements\CharacterData::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\CharacterData::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\CharacterData::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\CharacterData::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\CharacterData::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\CharacterData::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\CharacterData::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\CharacterData::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\CharacterData::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\CharacterData::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\CharacterData::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\CharacterData::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\CharacterData::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\CharacterData::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\CharacterData::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\CharacterData::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\CharacterData::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\CharacterData::$data
The contents of the node.



### `string` \Contender\Elements\CharacterData::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CharacterData::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CharacterData::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CharacterData::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\CharacterData::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\CharacterData::$parameter




### `string|null` \Contender\Elements\CharacterData::$prefix
The namespace prefix of this node, or NULL if it is unspecified.






Methods
----------------------------

### \Contender\Elements\CharacterData::substringData(mixed|null $offset, mixed|null $count)
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


### \Contender\Elements\CharacterData::appendData(mixed|null $data)
Append the string to the end of the character data of the node



#### Parameters
##### `string` $data

The string to append.



#### Return Values
void


### See Also
 - <a href="https://php.net/manual/en/domcharacterdata.appenddata.php">https://php.net/manual/en/domcharacterdata.appenddata.php</a>


### \Contender\Elements\CharacterData::insertData(mixed|null $offset, mixed|null $data)
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


### \Contender\Elements\CharacterData::deleteData(mixed|null $offset, mixed|null $count)
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


### \Contender\Elements\CharacterData::replaceData(mixed|null $offset, mixed|null $count, mixed|null $data)
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



\Contender\Elements\Collection
==========================
A collection of <a href="#contenderelementsnode">\Contender\Elements\Node</a> from <a href="#contenderelementsdocument">\Contender\Elements\Document</a>







Class synopsis
----------------------------

```

Contender\Elements\Collection {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;

    /* Methods */
    public __construct ([?mixed $items = []]) : void
    public makeByDOMNodeList (DOMNodeList $element, Contender\Elements\ElementInterface $node) : \Contender\Elements\Collection
    public find (string $selectors) : \Contender\Elements\Collection
    public onlyElement () : \Contender\Elements\Collection
    public querySelectorAll (string $selectors) : \Contender\Elements\Collection|Node[]
    public sortDom () : \Contender\Elements\Collection
    public querySelector (string $query) : \Contender\Elements\Node|null
    public attr (?mixed $param = NULL) : string|null
    public getAttribute (string $name) : mixed
    public setAttribute (string $name, string $value) : void
    public remove () : \Contender\Elements\Collection

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Elements\Collection::$innerHTML
1st of innerHTML



### `string` \Contender\Elements\Collection::$innerXML
1st of innerXML



### `string` \Contender\Elements\Collection::$inner_h_t_m_l
1st of innerHTML



### `string` \Contender\Elements\Collection::$inner_x_m_l
1st of innerXML






Methods
----------------------------

### \Contender\Elements\Collection::__construct(mixed|null $items)
Collection constructor.



#### Parameters
##### `array` $items





#### Return Values
void


### See Also
None

### \Contender\Elements\Collection::makeByDOMNodeList(DOMNodeList $element, Contender\Elements\ElementInterface $node)




#### Parameters
##### `\DOMNodeList` $element



##### `\Contender\Elements\ElementInterface` $node





#### Return Values
\Contender\Elements\Collection


### See Also
None

### \Contender\Elements\Collection::find(string $selectors)
Call <a href="#contenderelementscollectionqueryselectorallstring-selectors">\Contender\Elements\Collection::querySelectorAll()</a> and <a href="#contenderelementscollectiononlyelement">\Contender\Elements\Collection::onlyElement()</a>




#### Parameters
##### `string` $selectors





#### Return Values
\Contender\Elements\Collection


### See Also
None

### \Contender\Elements\Collection::onlyElement()
HTMLElement only Node




#### Parameters


#### Return Values
\Contender\Elements\Collection Filtered Collection


### See Also
None

### \Contender\Elements\Collection::querySelectorAll(string $selectors)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> of <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None

### \Contender\Elements\Collection::sortDom()
Sort <a href="#contenderelementsnode">\Contender\Elements\Node</a> by line number and Xpath




#### Parameters


#### Return Values
\Contender\Elements\Collection Sorted Collection


### See Also
None

### \Contender\Elements\Collection::querySelector(string $query)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $query

Valid CSS selector string



#### Return Values
\Contender\Elements\Node|null


### See Also
None

### \Contender\Elements\Collection::attr(mixed|null $param)
if call attr('name')

Alias getAttr()

if call attr('name', 'value')
Alias setAttr()



#### Parameters
##### `array` $param





#### Return Values
string|null


### See Also
 - <a href="#contenderelementselementattrmixednull-name">\Contender\Elements\Element::attr()</a>


### \Contender\Elements\Collection::getAttribute(string $name)
get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
 - <a href="#contenderelementselementgetattributestring-name">\Contender\Elements\Element::getAttribute()</a>


### \Contender\Elements\Collection::setAttribute(string $name, string $value)
set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
void


### See Also
 - <a href="#contenderelementselementsetattributestring-name-string-value">\Contender\Elements\Element::setAttribute()</a>


### \Contender\Elements\Collection::remove()
Removes the object from the tree it belongs to.




#### Parameters


#### Return Values
\Contender\Elements\Collection


### See Also
 - <a href="#contenderelementsnoderemove">\Contender\Elements\Node::remove()</a>



\Contender\Elements\Comment
==========================
Class Comment





Class synopsis
----------------------------

```

Contender\Elements\Comment {

    /* Properties */
    public string|null $documentURI ;
    public string $encoding ;
    public bool $formatOutput ;
    public mixin $implementation ;
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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \DOMConfiguration $config ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;
    public string $xmlEncoding ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Elements\Comment::$actualEncoding __read only__
Deprecated. Actual encoding of the document, is a readonly equivalent to encoding.



### `string|null` \Contender\Elements\Comment::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Comment::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Comment::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Comment::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\DOMConfiguration` \Contender\Elements\Comment::$config __read only__
Deprecated. Configuration used when {



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Comment::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Comment::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Comment::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Comment::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Comment::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Comment::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Comment::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Comment::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Comment::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Comment::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Comment::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Comment::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Comment::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Comment::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Comment::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Comment::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Comment::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Comment::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Comment::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Comment::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Comment::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Comment::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Comment::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Comment::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Comment::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Comment::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Comment::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Comment::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Comment::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Comment::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Comment::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Comment::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Comment::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\Comment::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Comment::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Comment::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Comment::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Comment::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Comment::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Comment::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Comment::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Comment::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Comment::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\Comment::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Comment::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Comment::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Comment::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Comment::$xmlEncoding __read only__
An attribute specifying, as part of the XML declaration, the encoding of this document. This is NULL whenunspecified or when it is not known, such as when the Document was created in memory.



### `string|null` \Contender\Elements\Comment::$documentURI
The location of the document or NULL if undefined.



### `string` \Contender\Elements\Comment::$encoding
Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.



### `bool` \Contender\Elements\Comment::$formatOutput
Nicely formats output with indentation and extra space.



### `mixin` \Contender\Elements\Comment::$implementation




### `string` \Contender\Elements\Comment::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Comment::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Comment::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Comment::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Comment::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\Comment::$parameter




### `string|null` \Contender\Elements\Comment::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `bool` \Contender\Elements\Comment::$preserveWhiteSpace
Do not remove redundant white space. Default to TRUE.



### `bool` \Contender\Elements\Comment::$recover
Proprietary. Enables recovery mode, i.e. trying to parse non-well formed documents.This attribute is not part of the DOM specification and is specific to libxml.



### `bool` \Contender\Elements\Comment::$resolveExternals
Set it to TRUE to load external entities from a doctype declaration. This is useful for including character entities in your XML document.



### `bool` \Contender\Elements\Comment::$standalone
Deprecated. Whether or not the document is standalone, as specified by the XML declaration,corresponds to xmlStandalone.



### `bool` \Contender\Elements\Comment::$strictErrorChecking
Throws <classname>DOMException</classname> on errors. Default to TRUE.



### `bool` \Contender\Elements\Comment::$substituteEntities
Proprietary. Whether or not to substitute entities. This attribute is not part of the DOMspecification and is specific to libxml.



### `bool` \Contender\Elements\Comment::$validateOnParse
Loads and validates against the DTD. Default to FALSE.



### `string` \Contender\Elements\Comment::$version
Deprecated. Version of XML, corresponds to xmlVersion



### `bool` \Contender\Elements\Comment::$xmlStandalone
An attribute specifying, as part of the XML declaration, whether this document is standalone.This is FALSE when unspecified.



### `string` \Contender\Elements\Comment::$xmlVersion
An attribute specifying, as part of the XML declaration, the version number of this document. If there is nodeclaration and if this document supports the "XML" feature, the value is "1.0".






Methods
----------------------------


\Contender\Elements\Document
==========================
Access each element of Html, like window.document in Javascript.







Class synopsis
----------------------------

```

Contender\Elements\Document {

    /* Properties */
    public string|null $documentURI ;
    public string $encoding ;
    public bool $formatOutput ;
    public mixin $implementation ;
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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \DOMConfiguration $config ;
    public \Contender\Elements\Element $documentElement ;
    public \Contender\Elements\Element $document_element ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;
    public string $xmlEncoding ;

    /* Methods */
    public __construct (DOMDocument $element) : void
    public getDocumentElementAttribute () : \Contender\Elements\Element
    public createElement (string $name, [?string $value = null]) : \Contender\Elements\Element
    public createComment (string $value) : \Contender\Elements\Node
    public createTextNode (string $value) : \Contender\Elements\Node
    public createCDATASection (string $value) : \Contender\Elements\Node
    public createProcessingInstruction (string $target, [?string $data = null]) : \Contender\Elements\Node
    public createAttributeNS (string $namespaceURI, string $qualifiedName) : \Contender\Elements\Node
    public createAttribute (string $value) : \Contender\Elements\Attr
    public createEntityReference (string $value) : \Contender\Elements\Node
    public __toString () : string
    public appendChild (Contender\Elements\Node $node) : \Contender\Elements\Node
    public insertBefore (Contender\Elements\Node $node, [?Contender\Elements\Node $referenceNode = null]) : \Contender\Elements\Node
    public normalize () : void
    public cloneNode ([bool $deep = false]) : \Contender\Elements\Node
    public hasChildNodes () : bool
    public removeChild (Contender\Elements\Node $oldnode) : \Contender\Elements\Node
    public replaceChild (Contender\Elements\Node $newnode, Contender\Elements\Node $oldnode) : \Contender\Elements\Node
    public getOwnerDocumentAttribute () : \Contender\Elements\Document
    public getParameterAttribute (string $name) : mixed|string|int
    public setParameterAttribute (string $name, ?mixed $value = NULL) : void
    public hasParameterAttribute (string $name) : bool
    public getElementById (string $query) : \Contender\Elements\Element|null
    public getElementsByClassName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public querySelectorAll (string $selectors) : \Contender\Elements\Collection|Node[]
    public evaluateToCollection (string $query) : \Contender\Elements\Collection|Node[]
    public getElementsByName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public getElementsByTagName (string $tag_name) : \Contender\Elements\Collection
    public getAttributeNodeNS (string $namespaceURI, string $localName) : \Contender\Elements\Collection
    public querySelector (string $selectors) : \Contender\Elements\Node|null
    public evaluate (string $query, [int $offset = 0]) : \Contender\Elements\Node|null
    public find (string $query) : \Contender\Elements\Collection

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Elements\Document::$actualEncoding __read only__
Deprecated. Actual encoding of the document, is a readonly equivalent to encoding.



### `string|null` \Contender\Elements\Document::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Document::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Document::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Document::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\DOMConfiguration` \Contender\Elements\Document::$config __read only__
Deprecated. Configuration used when {



### `\Contender\Elements\Element` \Contender\Elements\Document::$documentElement __read only__




### `\Contender\Elements\Element` \Contender\Elements\Document::$document_element __read only__




### `\Contender\Elements\Node|null` \Contender\Elements\Document::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Document::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Document::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Document::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Document::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Document::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Document::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Document::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Document::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Document::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Document::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Document::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Document::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Document::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Document::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Document::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Document::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Document::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Document::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Document::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Document::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Document::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Document::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Document::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Document::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Document::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Document::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Document::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Document::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Document::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Document::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Document::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Document::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Document::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\Document::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Document::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Document::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Document::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Document::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Document::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Document::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\Document::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Document::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Document::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Document::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Document::$xmlEncoding __read only__
An attribute specifying, as part of the XML declaration, the encoding of this document. This is NULL whenunspecified or when it is not known, such as when the Document was created in memory.



### `string|null` \Contender\Elements\Document::$documentURI
The location of the document or NULL if undefined.



### `string` \Contender\Elements\Document::$encoding
Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.



### `bool` \Contender\Elements\Document::$formatOutput
Nicely formats output with indentation and extra space.



### `mixin` \Contender\Elements\Document::$implementation




### `string` \Contender\Elements\Document::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\Document::$parameter




### `string|null` \Contender\Elements\Document::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `bool` \Contender\Elements\Document::$preserveWhiteSpace
Do not remove redundant white space. Default to TRUE.



### `bool` \Contender\Elements\Document::$recover
Proprietary. Enables recovery mode, i.e. trying to parse non-well formed documents.This attribute is not part of the DOM specification and is specific to libxml.



### `bool` \Contender\Elements\Document::$resolveExternals
Set it to TRUE to load external entities from a doctype declaration. This is useful for including character entities in your XML document.



### `bool` \Contender\Elements\Document::$standalone
Deprecated. Whether or not the document is standalone, as specified by the XML declaration,corresponds to xmlStandalone.



### `bool` \Contender\Elements\Document::$strictErrorChecking
Throws <classname>DOMException</classname> on errors. Default to TRUE.



### `bool` \Contender\Elements\Document::$substituteEntities
Proprietary. Whether or not to substitute entities. This attribute is not part of the DOMspecification and is specific to libxml.



### `bool` \Contender\Elements\Document::$validateOnParse
Loads and validates against the DTD. Default to FALSE.



### `string` \Contender\Elements\Document::$version
Deprecated. Version of XML, corresponds to xmlVersion



### `bool` \Contender\Elements\Document::$xmlStandalone
An attribute specifying, as part of the XML declaration, whether this document is standalone.This is FALSE when unspecified.



### `string` \Contender\Elements\Document::$xmlVersion
An attribute specifying, as part of the XML declaration, the version number of this document. If there is nodeclaration and if this document supports the "XML" feature, the value is "1.0".






Methods
----------------------------

### \Contender\Elements\Document::__construct(DOMDocument $element)
Node constructor.




#### Parameters
##### `\DOMDocument` $element





#### Return Values
void


### See Also
None

### \Contender\Elements\Document::getDocumentElementAttribute()




#### Parameters


#### Return Values
\Contender\Elements\Element


### See Also
None

### \Contender\Elements\Document::createElement(string $name, string|null $value)
Create new element node




#### Parameters
##### `string` $name

The tag name of the element.

##### `string|null` $value

The value of the element. By default, an empty element will be created. You can also set the value later with DOMElement->nodeValue.



#### Return Values
\Contender\Elements\Element


### See Also
None

### \Contender\Elements\Document::createComment(string $value)
Create new comment node




#### Parameters
##### `string` $value

The content of the comment.



#### Return Values
\Contender\Elements\Node


### See Also
None

### \Contender\Elements\Document::createTextNode(string $value)
Create new comment node




#### Parameters
##### `string` $value

The content of the text.



#### Return Values
\Contender\Elements\Node


### See Also
None

### \Contender\Elements\Document::createCDATASection(string $value)
Create new cdata node




#### Parameters
##### `string` $value

The content of the cdata.



#### Return Values
\Contender\Elements\Node


### See Also
None

### \Contender\Elements\Document::createProcessingInstruction(string $target, string|null $data)
Creates new PI node




#### Parameters
##### `string` $target

The target of the processing instruction.

##### `string|null` $data

The content of the processing instruction.



#### Return Values
\Contender\Elements\Node


### See Also
None

### \Contender\Elements\Document::createAttributeNS(string $namespaceURI, string $qualifiedName)
Create new attribute node with an associated namespace




#### Parameters
##### `string` $namespaceURI

The namespace URI of the elements to match on. The special value * matches all namespaces.

##### `string` $qualifiedName

The local name of the elements to match on. The special value * matches all local names.



#### Return Values
\Contender\Elements\Node


### See Also
None

### \Contender\Elements\Document::createAttribute(string $value)
Create new attribute




#### Parameters
##### `string` $value

The name of the attribute.



#### Return Values
\Contender\Elements\Attr


### See Also
None

### \Contender\Elements\Document::createEntityReference(string $value)
Create new entity reference node




#### Parameters
##### `string` $value

The content of the entity reference, e.g. the entity reference minusthe leading & and the trailing ; characters.



#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://php.net/manual/domdocument.createentityreference.php">https://php.net/manual/domdocument.createentityreference.php</a>


### \Contender\Elements\Document::__toString()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Elements\Document::appendChild(Contender\Elements\Node $node)
Adds a node to the end of the list of children of a specified parent node.




#### Parameters
##### `\Contender\Elements\Node` $node





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild</a>
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>


### \Contender\Elements\Document::insertBefore(Contender\Elements\Node $node, Contender\Elements\Node|null $referenceNode)
Inserts a node before a reference node as a child of a specified parent node.




#### Parameters
##### `\Contender\Elements\Node` $node



##### `\Contender\Elements\Node|null` $referenceNode





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore">https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore</a>
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>


### \Contender\Elements\Document::normalize()
Normalizes the node


Remove empty text nodes and merge adjacent text nodes in this node and all its children.



#### Parameters


#### Return Values
void


### See Also
 - <a href="https://www.php.net/manual/en/domnode.normalize.php">https://www.php.net/manual/en/domnode.normalize.php</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize">https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize</a>


### \Contender\Elements\Document::cloneNode(bool $deep)
Clones a node


Creates a copy of the node.



#### Parameters
##### `bool` $deep

Indicates whether to copy all descendant nodes. This parameter is defaulted to FALSE.



#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode">https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode</a>


### \Contender\Elements\Document::hasChildNodes()
Checks if node has children


This function checks if the node has children.



#### Parameters


#### Return Values
bool


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes">https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes</a>


### \Contender\Elements\Document::removeChild(Contender\Elements\Node $oldnode)
Removes child from list of children




#### Parameters
##### `\Contender\Elements\Node` $oldnode





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild</a>


### \Contender\Elements\Document::replaceChild(Contender\Elements\Node $newnode, Contender\Elements\Node $oldnode)
Replaces a child




#### Parameters
##### `\Contender\Elements\Node` $newnode



##### `\Contender\Elements\Node` $oldnode





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild</a>


### \Contender\Elements\Document::getOwnerDocumentAttribute()




#### Parameters


#### Return Values
\Contender\Elements\Document The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node


### See Also
None

### \Contender\Elements\Document::getParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
mixed|string|int


### See Also
None

### \Contender\Elements\Document::setParameterAttribute(string $name, mixed|null $value)




#### Parameters
##### `string` $name



##### `mixed|null` $value





#### Return Values
void


### See Also
None

### \Contender\Elements\Document::hasParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
bool


### See Also
None

### \Contender\Elements\Document::getElementById(string $query)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> object representing the element whose id property matches the specified string.




#### Parameters
##### `string` $query

tag id



#### Return Values
\Contender\Elements\Element|null Selected node


### See Also
None

### \Contender\Elements\Document::getElementsByClassName(string $query)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> object of all child elements which have all of the given class name(s)




#### Parameters
##### `string` $query

tag class name



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None

### \Contender\Elements\Document::querySelectorAll(string $selectors)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> of <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None

### \Contender\Elements\Document::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> result if possible




#### Parameters
##### `string` $query

xpath



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None

### \Contender\Elements\Document::getElementsByName(string $query)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> object of elements with a given name in the document.




#### Parameters
##### `string` $query

tag name attribute



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None

### \Contender\Elements\Document::getElementsByTagName(string $tag_name)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> object of elements with the given tag name.




#### Parameters
##### `string` $tag_name

Elements tag name



#### Return Values
\Contender\Elements\Collection


### See Also
None

### \Contender\Elements\Document::getAttributeNodeNS(string $namespaceURI, string $localName)
Returns the attribute node in namespace namespaceURI with local name localName for the current node.




#### Parameters
##### `string` $namespaceURI

The namespace URI.

##### `string` $localName

The local name.



#### Return Values
\Contender\Elements\Collection


### See Also
None

### \Contender\Elements\Document::querySelector(string $selectors)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Node|null


### See Also
None

### \Contender\Elements\Document::evaluate(string $query, int $offset)
Evaluates the given XPath expression and returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> result if possible




#### Parameters
##### `string` $query

xpath

##### `int` $offset





#### Return Values
\Contender\Elements\Node|null


### See Also
None

### \Contender\Elements\Document::find(string $query)
Call querySelectorAll() and <a href="#contenderelementscollectiononlyelement">\Contender\Elements\Collection::onlyElement()</a>




#### Parameters
##### `string` $query





#### Return Values
\Contender\Elements\Collection


### See Also
None


\Contender\Elements\DocumentType
==========================
Class DocumentType





Class synopsis
----------------------------

```

Contender\Elements\DocumentType {

    /* Properties */
    public \Contender\Elements\NamedNodeMap $entities ;
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string|null $internalSubset ;
    public string $name ;
    public string $nodeValue ;
    public \Contender\Elements\NamedNodeMap $notations ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string $publicId ;
    public string $systemId ;
    public string|null $baseURI ;
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\DocumentType::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\DocumentType::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\DocumentType::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\DocumentType::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\DocumentType::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\DocumentType::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\DocumentType::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\DocumentType::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\DocumentType::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\DocumentType::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\DocumentType::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\DocumentType::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\DocumentType::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\DocumentType::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\DocumentType::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\DocumentType::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\DocumentType::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\DocumentType::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\DocumentType::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\DocumentType::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\DocumentType::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\DocumentType::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\DocumentType::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\DocumentType::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\DocumentType::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\DocumentType::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\DocumentType::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\DocumentType::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\DocumentType::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\DocumentType::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\DocumentType::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\DocumentType::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\DocumentType::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\DocumentType::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\DocumentType::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\DocumentType::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\DocumentType::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\DocumentType::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\DocumentType::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\DocumentType::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\DocumentType::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\DocumentType::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\DocumentType::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\DocumentType::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\DocumentType::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\DocumentType::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\DocumentType::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\DocumentType::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\DocumentType::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\DocumentType::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\DocumentType::$text_content __read only__
The text content of this node and its descendants.



### `\Contender\Elements\NamedNodeMap` \Contender\Elements\DocumentType::$entities
A {



### `string` \Contender\Elements\DocumentType::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\DocumentType::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\DocumentType::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\DocumentType::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string|null` \Contender\Elements\DocumentType::$internalSubset
The internal subset as a string, or null if there is none. This is does not contain the delimiting square brackets.



### `string` \Contender\Elements\DocumentType::$name
The name of DTD; i.e., the name immediately following the DOCTYPE keyword.



### `string` \Contender\Elements\DocumentType::$nodeValue
The value of this node, depending on its type



### `\Contender\Elements\NamedNodeMap` \Contender\Elements\DocumentType::$notations
A {



### `mixed|string|int` \Contender\Elements\DocumentType::$parameter




### `string|null` \Contender\Elements\DocumentType::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Elements\DocumentType::$publicId
The public identifier of the external subset.



### `string` \Contender\Elements\DocumentType::$systemId
The system identifier of the external subset. This may be an absolute URI or not.






Methods
----------------------------


\Contender\Elements\Element
==========================
Class Element





Class synopsis
----------------------------

```

Contender\Elements\Element {

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
    public \Contender\Elements\NamedNodeMap $attributes ;
    public string|null $baseURI ;
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public attr (?mixed $name = NULL) : string|null
    public getAttribute (string $name) : mixed
    public setAttribute (string $name, string $value) : void
    public getAttributeNames () : array
    public getAttributeNamesGenerator () : \Generator|null
    public getAttributesAttribute () : \Contender\Elements\NamedNodeMap

 }

```


Constants
----------------------------




Properties
----------------------------

### `\Contender\Elements\NamedNodeMap` \Contender\Elements\Element::$attributes __read only__




### `string|null` \Contender\Elements\Element::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Element::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Element::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Element::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Element::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Element::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Element::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Element::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Element::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Element::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Element::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Element::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Element::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Element::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Element::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Element::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Element::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Element::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Element::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Element::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Element::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Element::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Element::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Element::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Element::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Element::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Element::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Element::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Element::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Element::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Element::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Element::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Element::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Element::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Element::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Element::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Element::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\Element::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Element::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Element::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Element::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Element::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Element::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Element::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Element::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Element::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Element::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\Element::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Element::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Element::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Element::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Element::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Element::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Element::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Element::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Element::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\Element::$parameter




### `string|null` \Contender\Elements\Element::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `bool` \Contender\Elements\Element::$schemaTypeInfo
Not implemented yet, always return NULL



### `string` \Contender\Elements\Element::$tagName
The element name






Methods
----------------------------

### \Contender\Elements\Element::attr(mixed|null $name)
if call attr('name')

Alias getAttr()

if call attr('name', 'value')
Alias setAttr()



#### Parameters
##### `mixed|null` $name





#### Return Values
string|null


### See Also
None

### \Contender\Elements\Element::getAttribute(string $name)
Get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
None

### \Contender\Elements\Element::setAttribute(string $name, string $value)
Set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
void


### See Also
None

### \Contender\Elements\Element::getAttributeNames()
Returns an array of strings that are attributes to an Element.


If you simply want to get the attribute and its value, it is faster to combine with <a href="#contenderelementselementgetattributestring-name">\Contender\Elements\Element::getAttribute()</a>, than to use the <a href="#contenderelementsnamednodemap-contenderelementselementattributes-read-only">\Contender\Elements\Element::$attributes</a> property.



#### Parameters


#### Return Values
array


### See Also
 - <a href="#contenderelementselementgetattributenamesgenerator">\Contender\Elements\Element::getAttributeNamesGenerator()</a>


### \Contender\Elements\Element::getAttributeNamesGenerator()
Returns a Generator of strings that are attributes to an Element.




#### Parameters


#### Return Values
\Generator|null


### See Also
 - <a href="#contenderelementselementgetattributenames">\Contender\Elements\Element::getAttributeNames()</a>


### \Contender\Elements\Element::getAttributesAttribute()
Returns the Element's Attribute. Note that it returns <a href="#contenderelementsnamednodemap">\Contender\Elements\NamedNodeMap</a> rather than an array.




#### Parameters


#### Return Values
\Contender\Elements\NamedNodeMap


### See Also
None


\Contender\Elements\Entity
==========================
Class Entity





Class synopsis
----------------------------

```

Contender\Elements\Entity {

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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\Entity::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Entity::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Entity::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Entity::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Entity::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Entity::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Entity::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Entity::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Entity::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Entity::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Entity::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Entity::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Entity::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Entity::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Entity::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Entity::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Entity::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Entity::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Entity::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Entity::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Entity::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Entity::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Entity::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Entity::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Entity::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Entity::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Entity::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Entity::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Entity::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Entity::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Entity::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Entity::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Entity::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Entity::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Entity::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Entity::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Entity::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\Entity::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Entity::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Entity::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Entity::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Entity::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Entity::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Entity::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Entity::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Entity::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Entity::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\Entity::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Entity::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Entity::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Entity::$text_content __read only__
The text content of this node and its descendants.



### `string|null` \Contender\Elements\Entity::$actualEncoding
An attribute specifying the encoding used for this entity at the time of parsing, when it is an external



### `string|null` \Contender\Elements\Entity::$encoding
An attribute specifying, as part of the text declaration, the encoding of this entity, when it is an external



### `string` \Contender\Elements\Entity::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Entity::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Entity::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Entity::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Entity::$nodeValue
The value of this node, depending on its type



### `string|null` \Contender\Elements\Entity::$notationName
For unparsed entities, the name of the notation for the entity. For parsed entities, this is NULL.



### `mixed|string|int` \Contender\Elements\Entity::$parameter




### `string|null` \Contender\Elements\Entity::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string|null` \Contender\Elements\Entity::$publicId
The public identifier associated with the entity if specified, and NULL otherwise.



### `string|null` \Contender\Elements\Entity::$systemId
The system identifier associated with the entity if specified, and NULL otherwise. This may be an



### `string|null` \Contender\Elements\Entity::$version
An attribute specifying, as part of the text declaration, the version number of this entity, when it is an






Methods
----------------------------


\Contender\Elements\Implementation
==========================
Class Implementation





Class synopsis
----------------------------

```

Contender\Elements\Implementation {

    /* Methods */
    public __construct (DOMImplementation $element) : void
    public hasFeature (?mixed $feature = NULL, ?mixed $version = NULL) : bool
    public createDocumentType ([?mixed $qualifiedName = null], [?mixed $publicId = null], [?mixed $systemId = null]) : \Contender\Elements\DocumentType
    public createDocument ([?mixed $namespaceURI = null], [?mixed $qualifiedName = null], [?Contender\Elements\DocumentType $doctype = null]) : \Contender\Elements\Document

 }

```


Constants
----------------------------




Properties
----------------------------




Methods
----------------------------

### \Contender\Elements\Implementation::__construct(DOMImplementation $element)
Node constructor.




#### Parameters
##### `\DOMImplementation` $element





#### Return Values
void


### See Also
None

### \Contender\Elements\Implementation::hasFeature(mixed|null $feature, mixed|null $version)
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


### \Contender\Elements\Implementation::createDocumentType(mixed|null $qualifiedName, mixed|null $publicId, mixed|null $systemId)
Creates an empty DOMDocumentType object



#### Parameters
##### `string` $qualifiedName

[optional] The qualified name of the document type to create.

##### `string` $publicId

[optional] The external subset public identifier.

##### `string` $systemId

[optional] The external subset system identifier.



#### Return Values
\Contender\Elements\DocumentType A new DOMDocumentType node with its ownerDocument set to &null;.


### See Also
 - <a href="https://php.net/manual/en/domimplementation.createdocumenttype.php">https://php.net/manual/en/domimplementation.createdocumenttype.php</a>


### \Contender\Elements\Implementation::createDocument(mixed|null $namespaceURI, mixed|null $qualifiedName, Contender\Elements\DocumentType|null $doctype)
Creates a DOMDocument object of the specified type with its document element



#### Parameters
##### `string` $namespaceURI

[optional] The namespace URI of the document element to create.

##### `string` $qualifiedName

[optional]The qualified name of the document element to create.

##### `\Contender\Elements\DocumentType` $doctype

[optional] The type of document to create or &null;.



#### Return Values
\Contender\Elements\Document A new DOMDocument object. If namespaceURI, qualifiedName, and doctype are null, the returned DOMDocument is empty with no document element


### See Also
 - <a href="https://php.net/manual/en/domimplementation.createdocument.php">https://php.net/manual/en/domimplementation.createdocument.php</a>



\Contender\Elements\NamedNodeMap
==========================
Class NamedNodeMap





Class synopsis
----------------------------

```

Contender\Elements\NamedNodeMap {

    /* Methods */
    public __construct ([?mixed $items = []], [?DOMNamedNodeMap $map = null]) : mixed
    public getNamedItem (string $name) : \Contender\Elements\Attr|null
    public getNamedItemNS (string $namespaceURI, string $localName) : \Contender\Elements\Attr|null

 }

```


Constants
----------------------------




Properties
----------------------------




Methods
----------------------------

### \Contender\Elements\NamedNodeMap::__construct(mixed|null $items, DOMNamedNodeMap|null $map)
NamedNodeMap constructor.



#### Parameters
##### `array` $items



##### `\DOMNamedNodeMap|null` $map





#### Return Values
mixed


### See Also
None

### \Contender\Elements\NamedNodeMap::getNamedItem(string $name)
Retrieves a node specified by name




#### Parameters
##### `string` $name

The nodeName of the node to retrieve.



#### Return Values
\Contender\Elements\Attr|null


### See Also
None

### \Contender\Elements\NamedNodeMap::getNamedItemNS(string $namespaceURI, string $localName)
Retrieves a node specified by local name and namespace URI




#### Parameters
##### `string` $namespaceURI

The namespace URI of the node to retrieve.

##### `string` $localName

The local name of the node to retrieve.



#### Return Values
\Contender\Elements\Attr|null


### See Also
None


\Contender\Elements\Node
==========================
Each element accessed from the <a href="#contenderelementsdocument">\Contender\Elements\Document</a>







Class synopsis
----------------------------

```

Contender\Elements\Node {

    /* Properties */
    public string $innerHTML ;
    public string $innerXML ;
    public string $inner_h_t_m_l ;
    public string $inner_x_m_l ;
    public string $nodeValue ;
    public mixed|string|int $parameter ;
    public string|null $prefix ;
    public string|null $baseURI ;
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public __construct (DOMNode $element) : void
    public __toString () : string
    public remove () : \Contender\Elements\Node|null
    public after (?mixed $elements = NULL) : \Contender\Elements\Node|null
    public before (?mixed $elements = NULL) : \Contender\Elements\Node|null
    public appendChild (Contender\Elements\Node $node) : \Contender\Elements\Node
    public insertBefore (Contender\Elements\Node $node, [?Contender\Elements\Node $referenceNode = null]) : \Contender\Elements\Node
    public normalize () : void
    public cloneNode ([bool $deep = false]) : \Contender\Elements\Node
    public hasChildNodes () : bool
    public removeChild (Contender\Elements\Node $oldnode) : \Contender\Elements\Node
    public replaceChild (Contender\Elements\Node $newnode, Contender\Elements\Node $oldnode) : \Contender\Elements\Node
    public getOwnerDocumentAttribute () : \Contender\Elements\Document
    public getParameterAttribute (string $name) : mixed|string|int
    public setParameterAttribute (string $name, ?mixed $value = NULL) : void
    public hasParameterAttribute (string $name) : bool
    public getElementById (string $query) : \Contender\Elements\Element|null
    public getElementsByClassName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public querySelectorAll (string $selectors) : \Contender\Elements\Collection|Node[]
    public evaluateToCollection (string $query) : \Contender\Elements\Collection|Node[]
    public getElementsByName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public getElementsByTagName (string $tag_name) : \Contender\Elements\Collection
    public getAttributeNodeNS (string $namespaceURI, string $localName) : \Contender\Elements\Collection
    public querySelector (string $selectors) : \Contender\Elements\Node|null
    public evaluate (string $query, [int $offset = 0]) : \Contender\Elements\Node|null
    public find (string $query) : \Contender\Elements\Collection

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\Node::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Node::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Node::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Node::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Node::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Node::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Node::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Node::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Node::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Node::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Node::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Node::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Node::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Node::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Node::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Node::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Node::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Node::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Node::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Node::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Node::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Node::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Node::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Node::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Node::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Node::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Node::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Node::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Node::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Node::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Node::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Node::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Node::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Node::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Node::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Node::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Node::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\Node::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Node::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Node::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Node::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Node::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Node::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Node::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\Node::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Node::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Node::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Node::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\Node::$parameter




### `string|null` \Contender\Elements\Node::$prefix
The namespace prefix of this node, or NULL if it is unspecified.






Methods
----------------------------

### \Contender\Elements\Node::__construct(DOMNode $element)
Node constructor.




#### Parameters
##### `\DOMNode` $element





#### Return Values
void


### See Also
None

### \Contender\Elements\Node::__toString()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Elements\Node::remove()
Removes the object from the tree it belongs to.




#### Parameters


#### Return Values
\Contender\Elements\Node|null


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/remove">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/remove</a>


### \Contender\Elements\Node::after(mixed|null $elements)
Inserts a set of <a href="#contenderelementsnode">\Contender\Elements\Node</a> or String in the children list of this ChildNode's parent, just after this ChildNode. Strings are inserted as equivalent Text nodes.




#### Parameters
##### `mixed|null` $elements





#### Return Values
\Contender\Elements\Node|null


### See Also
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/after">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/after</a>


### \Contender\Elements\Node::before(mixed|null $elements)
Inserts a set of <a href="#contenderelementsnode">\Contender\Elements\Node</a>  or String in the children list of this ChildNode's parent, just before this ChildNode. Strings are inserted as equivalent Text nodes.




#### Parameters
##### `mixed|null` $elements





#### Return Values
\Contender\Elements\Node|null


### See Also
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before</a>


### \Contender\Elements\Node::appendChild(Contender\Elements\Node $node)
Adds a node to the end of the list of children of a specified parent node.




#### Parameters
##### `\Contender\Elements\Node` $node





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild</a>
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>


### \Contender\Elements\Node::insertBefore(Contender\Elements\Node $node, Contender\Elements\Node|null $referenceNode)
Inserts a node before a reference node as a child of a specified parent node.




#### Parameters
##### `\Contender\Elements\Node` $node



##### `\Contender\Elements\Node|null` $referenceNode





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore">https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore</a>
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>


### \Contender\Elements\Node::normalize()
Normalizes the node


Remove empty text nodes and merge adjacent text nodes in this node and all its children.



#### Parameters


#### Return Values
void


### See Also
 - <a href="https://www.php.net/manual/en/domnode.normalize.php">https://www.php.net/manual/en/domnode.normalize.php</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize">https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize</a>


### \Contender\Elements\Node::cloneNode(bool $deep)
Clones a node


Creates a copy of the node.



#### Parameters
##### `bool` $deep

Indicates whether to copy all descendant nodes. This parameter is defaulted to FALSE.



#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode">https://developer.mozilla.org/en-US/docs/Web/API/Node/cloneNode</a>


### \Contender\Elements\Node::hasChildNodes()
Checks if node has children


This function checks if the node has children.



#### Parameters


#### Return Values
bool


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes">https://developer.mozilla.org/en-US/docs/Web/API/Node/hasChildNodes</a>


### \Contender\Elements\Node::removeChild(Contender\Elements\Node $oldnode)
Removes child from list of children




#### Parameters
##### `\Contender\Elements\Node` $oldnode





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild</a>


### \Contender\Elements\Node::replaceChild(Contender\Elements\Node $newnode, Contender\Elements\Node $oldnode)
Replaces a child




#### Parameters
##### `\Contender\Elements\Node` $newnode



##### `\Contender\Elements\Node` $oldnode





#### Return Values
\Contender\Elements\Node


### See Also
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild">https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild</a>


### \Contender\Elements\Node::getOwnerDocumentAttribute()




#### Parameters


#### Return Values
\Contender\Elements\Document The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node


### See Also
None

### \Contender\Elements\Node::getParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
mixed|string|int


### See Also
None

### \Contender\Elements\Node::setParameterAttribute(string $name, mixed|null $value)




#### Parameters
##### `string` $name



##### `mixed|null` $value





#### Return Values
void


### See Also
None

### \Contender\Elements\Node::hasParameterAttribute(string $name)




#### Parameters
##### `string` $name





#### Return Values
bool


### See Also
None

### \Contender\Elements\Node::getElementById(string $query)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> object representing the element whose id property matches the specified string.




#### Parameters
##### `string` $query

tag id



#### Return Values
\Contender\Elements\Element|null Selected node


### See Also
None

### \Contender\Elements\Node::getElementsByClassName(string $query)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> object of all child elements which have all of the given class name(s)




#### Parameters
##### `string` $query

tag class name



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None

### \Contender\Elements\Node::querySelectorAll(string $selectors)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> of <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None

### \Contender\Elements\Node::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> result if possible




#### Parameters
##### `string` $query

xpath



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None

### \Contender\Elements\Node::getElementsByName(string $query)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> object of elements with a given name in the document.




#### Parameters
##### `string` $query

tag name attribute



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None

### \Contender\Elements\Node::getElementsByTagName(string $tag_name)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> object of elements with the given tag name.




#### Parameters
##### `string` $tag_name

Elements tag name



#### Return Values
\Contender\Elements\Collection


### See Also
None

### \Contender\Elements\Node::getAttributeNodeNS(string $namespaceURI, string $localName)
Returns the attribute node in namespace namespaceURI with local name localName for the current node.




#### Parameters
##### `string` $namespaceURI

The namespace URI.

##### `string` $localName

The local name.



#### Return Values
\Contender\Elements\Collection


### See Also
None

### \Contender\Elements\Node::querySelector(string $selectors)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Node|null


### See Also
None

### \Contender\Elements\Node::evaluate(string $query, int $offset)
Evaluates the given XPath expression and returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> result if possible




#### Parameters
##### `string` $query

xpath

##### `int` $offset





#### Return Values
\Contender\Elements\Node|null


### See Also
None

### \Contender\Elements\Node::find(string $query)
Call querySelectorAll() and <a href="#contenderelementscollectiononlyelement">\Contender\Elements\Collection::onlyElement()</a>




#### Parameters
##### `string` $query





#### Return Values
\Contender\Elements\Collection


### See Also
None


\Contender\Elements\Text
==========================
Class Text





Class synopsis
----------------------------

```

Contender\Elements\Text {

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
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Node|null $firstChild ;
    public \Contender\Elements\Element|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_child ;
    public \Contender\Elements\Element|null $first_element_child ;
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
    public \Contender\Elements\Node|null $lastChild ;
    public \Contender\Elements\Element|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_child ;
    public \Contender\Elements\Element|null $last_element_child ;
    public int $length ;
    public int $lineNo ;
    public int $line_no ;
    public string $localName ;
    public string|null $namespaceURI ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public string $nodeName ;
    public string $nodePath ;
    public int $nodeType ;
    public string $node_path ;
    public string $outerHTML ;
    public string $outerXML ;
    public string $outer_h_t_m_l ;
    public string $outer_x_m_l ;
    public \Contender\Elements\Document $ownerDocument ;
    public \Contender\Elements\Document $owner_document ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public string $textContent ;
    public string $text_content ;

    /* Methods */
    public splitText (?mixed $offset = NULL) : \Contender\Elements\Text
    public isWhitespaceInElementContent () : void

 }

```


Constants
----------------------------




Properties
----------------------------

### `string|null` \Contender\Elements\Text::$baseURI __read only__
The absolute base URI of this node or NULL if the implementation wasn't able to obtain an absolute URI.



### `\Contender\Elements\Collection` \Contender\Elements\Text::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Text::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Text::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Text::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Text::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Text::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Text::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `bool` \Contender\Elements\Text::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Text::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Text::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Text::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Text::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Text::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Text::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Text::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Text::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Text::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Text::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Text::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Text::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Text::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Text::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Text::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Text::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Text::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Text::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Text::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Text::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Text::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Text::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Text::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Text::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Element|null` \Contender\Elements\Text::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `int` \Contender\Elements\Text::$length __read only__
The length of the contents.



### `int` \Contender\Elements\Text::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Text::$line_no __read only__
Get line number for a node



### `string` \Contender\Elements\Text::$localName __read only__
Returns the local part of the qualified name of this node.



### `string|null` \Contender\Elements\Text::$namespaceURI __read only__
The namespace URI of this node, or NULL if it is unspecified.



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Text::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Text::$nodePath __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Text::$nodeType __read only__
Gets the type of the node. One of the predefined XML_xxx_NODE constants



### `string` \Contender\Elements\Text::$node_path __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Text::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Text::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Text::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Text::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `\Contender\Elements\Document` \Contender\Elements\Text::$ownerDocument __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Document` \Contender\Elements\Text::$owner_document __read only__
The <a href="#contenderelementsdocument">\Contender\Elements\Document</a> object associated with this node



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Text::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `string` \Contender\Elements\Text::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Text::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Text::$data
The contents of the node.



### `string` \Contender\Elements\Text::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Text::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Text::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Text::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Text::$nodeValue
The value of this node, depending on its type



### `mixed|string|int` \Contender\Elements\Text::$parameter




### `string|null` \Contender\Elements\Text::$prefix
The namespace prefix of this node, or NULL if it is unspecified.



### `string` \Contender\Elements\Text::$wholeText
Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.






Methods
----------------------------

### \Contender\Elements\Text::splitText(mixed|null $offset)
Breaks this node into two nodes at the specified offset




#### Parameters
##### `int` $offset

The offset at which to split, starting from 0.



#### Return Values
\Contender\Elements\Text The new node of the same type, which contains all the content at and after the offset.


### See Also
 - <a href="https://php.net/manual/en/domtext.splittext.php">https://php.net/manual/en/domtext.splittext.php</a>


### \Contender\Elements\Text::isWhitespaceInElementContent()
Indicates whether this text node contains whitespace



#### Parameters


#### Return Values
void true on success or false on failure.


### See Also
 - <a href="https://php.net/manual/en/domtext.iswhitespaceinelementcontent.php">https://php.net/manual/en/domtext.iswhitespaceinelementcontent.php</a>



