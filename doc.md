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

    /* Methods */
    public __construct () : void
    public setOption (string $option) : $this
    public setOptions (array $options) : $this
    public load (string $html, [array $options = []]) : \Contender\Elements\Document
    public loadFromUrl (string $url, [array $options = []], [?array $context_option = null]) : \Contender\Elements\Document
    public loadStr (string $html, [array $options = []]) : \Contender\Elements\Document
    public loadUrl (string $url, [array $options = []], [?array $context_option = null]) : \Contender\Elements\Document

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




Methods
----------------------------

### \Contender\Contender::__construct()
Contender constructor.




#### Parameters


#### Return Values
void


### See Also
None

### \Contender\Contender::setOption(string $option)
Options for converting Html to ContenderDocument




#### Parameters
##### `string` $option

Contender option const.



#### Return Values
$this


### See Also
None

### \Contender\Contender::setOptions(array $options)
Calls <a href="#contendercontendersetoptionstring-option">\Contender\Contender::setOption()</a> as an array




#### Parameters
##### `array` $options

Array multiple Contender option constants



#### Return Values
$this


### See Also
 - <a href="#contendercontendersetoptionstring-option">\Contender\Contender::setOption()</a>


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



\Contender\Elements\Collection
==========================
A collection of <a href="#contenderelementsnode">\Contender\Elements\Node</a> from <a href="#contenderelementsdocument">\Contender\Elements\Document</a>







Class synopsis
----------------------------

```

Contender\Elements\Collection {

    /* Properties */
    public string $innerHTML ;
    public string $inner_h_t_m_l ;
    public string $innerXML ;
    public string $inner_x_m_l ;

    /* Methods */
    public __construct ([?mixed $items = []]) : void
    public find (string $selectors) : \Contender\Elements\Collection
    public makeByDOMNodeList (DOMNodeList $element, Contender\Elements\ElementInterface $node) : \Contender\Elements\Collection
    public onlyElement () : \Contender\Elements\Collection
    public sortDom () : \Contender\Elements\Collection
    public querySelector (string $query) : \Contender\Elements\Node|null
    public querySelectorAll (string $selectors) : \Contender\Elements\Collection|Node[]
    public attr (?mixed $param = NULL) : string|null
    public getAttr (string $name) : mixed
    public setAttr (string $name, string $value) : mixed
    public remove () : \Contender\Elements\Collection

 }

```


Constants
----------------------------




Properties
----------------------------

### `string` \Contender\Elements\Collection::$innerHTML
1st of innerHTML



### `string` \Contender\Elements\Collection::$inner_h_t_m_l
1st of innerHTML



### `string` \Contender\Elements\Collection::$innerXML
1st of innerXML



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

### \Contender\Elements\Collection::find(string $selectors)
Call <a href="#contenderelementscollectionqueryselectorallstring-selectors">\Contender\Elements\Collection::querySelectorAll()</a> and <a href="#contenderelementscollectiononlyelement">\Contender\Elements\Collection::onlyElement()</a>




#### Parameters
##### `string` $selectors





#### Return Values
\Contender\Elements\Collection


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

### \Contender\Elements\Collection::onlyElement()
HTMLElement only Node




#### Parameters


#### Return Values
\Contender\Elements\Collection Filtered Collection


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

### \Contender\Elements\Collection::querySelectorAll(string $selectors)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> of <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None

### \Contender\Elements\Collection::attr(mixed|null $param)
if call attr('name')

Alias getAttr()

if call attr('name', 'value')
Alias setAttr()



#### Parameters
##### `mixed|null` $param





#### Return Values
string|null


### See Also
 - <a href="#contenderelementsnodeattrmixednull-name">\Contender\Elements\Node::attr()</a>


### \Contender\Elements\Collection::getAttr(string $name)
get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
 - <a href="#contenderelementsnodegetattrstring-name">\Contender\Elements\Node::getAttr()</a>


### \Contender\Elements\Collection::setAttr(string $name, string $value)
set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
mixed


### See Also
 - <a href="#contenderelementsnodesetattrstring-name-string-value">\Contender\Elements\Node::setAttr()</a>


### \Contender\Elements\Collection::remove()
Removes the object from the tree it belongs to.




#### Parameters


#### Return Values
\Contender\Elements\Collection


### See Also
 - <a href="#contenderelementsnoderemove">\Contender\Elements\Node::remove()</a>



\Contender\Elements\Document
==========================
Access each element of Html, like window.document in Javascript.







Class synopsis
----------------------------

```

Contender\Elements\Document {

    /* Properties */
    public string $innerHTML ;
    public string $inner_h_t_m_l ;
    public string $innerXML ;
    public string $inner_x_m_l ;
    public bool $isElement ;
    public bool $is_element ;
    public bool $isAttr ;
    public bool $is_attr ;
    public bool $isText ;
    public bool $is_text ;
    public bool $isCharacterData ;
    public bool $is_character_data ;
    public bool $isEntityReference ;
    public bool $is_entity_reference ;
    public bool $isEntity ;
    public bool $is_entity ;
    public bool $isProcessingInstruction ;
    public bool $is_processing_instruction ;
    public bool $isComment ;
    public bool $is_comment ;
    public bool $isDocument ;
    public bool $is_document ;
    public bool $isDocumentType ;
    public bool $is_document_type ;
    public bool $isDocumentFragment ;
    public bool $is_document_fragment ;
    public bool $isNotation ;
    public bool $is_notation ;
    public string $innerText ;
    public string $inner_text ;
    public string $textContent ;
    public string $text_content ;
    public string $outerHTML ;
    public string $outer_h_t_m_l ;
    public string $outerXML ;
    public string $outer_x_m_l ;
    public string $nodePath ;
    public string $node_path ;
    public int $lineNo ;
    public int $line_no ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Node $firstChild ;
    public \Contender\Elements\Node $first_child ;
    public \Contender\Elements\Node $lastChild ;
    public \Contender\Elements\Node $last_child ;
    public \Contender\Elements\Document|null $firstElementChild ;
    public \Contender\Elements\Document|null $first_element_child ;
    public \Contender\Elements\Document|null $parentNode ;
    public \Contender\Elements\Document|null $parent_node ;
    public \Contender\Elements\Document|null $lastElementChild ;
    public \Contender\Elements\Document|null $last_element_child ;
    public \Contender\Elements\Document|null $previousElementSibling ;
    public \Contender\Elements\Document|null $previous_element_sibling ;
    public \Contender\Elements\Document|null $nextElementSibling ;
    public \Contender\Elements\Document|null $next_element_sibling ;
    public \Contender\Elements\Document|null $nextSibling ;
    public \Contender\Elements\Document|null $next_sibling ;
    public int $nodeType ;
    public int $node_type ;
    public string $nodeName ;
    public string $node_name ;

    /* Methods */
    public __construct (DOMDocument $element) : void
    public createElement (string $name, [?string $value = null]) : \Contender\Elements\Node
    public __toString () : string
    public getNextSiblingAttribute () : static|null
    public getElementById (string $query) : \Contender\Elements\Node|null
    public getElementsByClassName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public getElementsByName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public getElementsByTagName (string $tag_name) : \Contender\Elements\Collection
    public getAttributeNodeNS (string $namespaceURI, string $localName) : \Contender\Elements\Collection
    public querySelector (string $selectors) : \Contender\Elements\Node|null
    public querySelectorAll (string $selectors) : \Contender\Elements\Collection|Node[]
    public find (string $query) : \Contender\Elements\Collection
    public evaluateToCollection (string $query) : \Contender\Elements\Collection|Node[]
    public evaluate (string $query, [int $offset = 0]) : \Contender\Elements\Node|null
    public attr (?mixed $name = NULL) : string|null
    public getAttr (string $name) : mixed
    public setAttr (string $name, string $value) : mixed
    public appendChild (Contender\Elements\Node $node) : \Contender\Elements\Node
    public insertBefore (Contender\Elements\Node $node, [?Contender\Elements\Node $referenceNode = null]) : \Contender\Elements\Node
    public normalize () : mixed
    public nativeNode () : DOMNode

 }

```


Constants
----------------------------




Properties
----------------------------

### `bool` \Contender\Elements\Document::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Document::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Document::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Document::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Document::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Document::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Document::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Document::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Document::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Document::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Document::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Document::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Document::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Document::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Document::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Document::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Document::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Document::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Document::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Document::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Document::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Document::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Document::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Document::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `string` \Contender\Elements\Document::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Document::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Document::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Document::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Document::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Document::$nodePath __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Document::$node_path __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Document::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Document::$line_no __read only__
Get line number for a node



### `\Contender\Elements\Collection` \Contender\Elements\Document::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Collection` \Contender\Elements\Document::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Document::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Node` \Contender\Elements\Document::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Node` \Contender\Elements\Document::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Node` \Contender\Elements\Document::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Node` \Contender\Elements\Document::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$parentNode __read only__
The parent of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$parent_node __read only__
The parent of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$nextSibling __read only__
Alias to next_element_sibling



### `\Contender\Elements\Document|null` \Contender\Elements\Document::$next_sibling __read only__
Alias to next_element_sibling



### `int` \Contender\Elements\Document::$nodeType __read only__
Gets the type of the node.



### `int` \Contender\Elements\Document::$node_type __read only__
Gets the type of the node.



### `string` \Contender\Elements\Document::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Document::$node_name __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Document::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Document::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element






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

### \Contender\Elements\Document::createElement(string $name, string|null $value)




#### Parameters
##### `string` $name



##### `string|null` $value





#### Return Values
\Contender\Elements\Node


### See Also
None

### \Contender\Elements\Document::__toString()




#### Parameters


#### Return Values
string


### See Also
None

### \Contender\Elements\Document::getNextSiblingAttribute()




#### Parameters


#### Return Values
static|null Alias to next_element_sibling


### See Also
None

### \Contender\Elements\Document::getElementById(string $query)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> object representing the element whose id property matches the specified string.




#### Parameters
##### `string` $query

tag id



#### Return Values
\Contender\Elements\Node|null Selected node


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

### \Contender\Elements\Document::querySelectorAll(string $selectors)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> of <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


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

### \Contender\Elements\Document::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> result if possible




#### Parameters
##### `string` $query

xpath



#### Return Values
\Contender\Elements\Collection|Node[]


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

### \Contender\Elements\Document::attr(mixed|null $name)
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

### \Contender\Elements\Document::getAttr(string $name)
get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
None

### \Contender\Elements\Document::setAttr(string $name, string $value)
set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
mixed


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
mixed


### See Also
 - <a href="https://www.php.net/manual/en/domnode.normalize.php">https://www.php.net/manual/en/domnode.normalize.php</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize">https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize</a>


### \Contender\Elements\Document::nativeNode()




#### Parameters


#### Return Values
DOMNode


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
    public string $inner_h_t_m_l ;
    public string $innerXML ;
    public string $inner_x_m_l ;
    public bool $isElement ;
    public bool $is_element ;
    public bool $isAttr ;
    public bool $is_attr ;
    public bool $isText ;
    public bool $is_text ;
    public bool $isCharacterData ;
    public bool $is_character_data ;
    public bool $isEntityReference ;
    public bool $is_entity_reference ;
    public bool $isEntity ;
    public bool $is_entity ;
    public bool $isProcessingInstruction ;
    public bool $is_processing_instruction ;
    public bool $isComment ;
    public bool $is_comment ;
    public bool $isDocument ;
    public bool $is_document ;
    public bool $isDocumentType ;
    public bool $is_document_type ;
    public bool $isDocumentFragment ;
    public bool $is_document_fragment ;
    public bool $isNotation ;
    public bool $is_notation ;
    public string $innerText ;
    public string $inner_text ;
    public string $textContent ;
    public string $text_content ;
    public string $outerHTML ;
    public string $outer_h_t_m_l ;
    public string $outerXML ;
    public string $outer_x_m_l ;
    public string $nodePath ;
    public string $node_path ;
    public int $lineNo ;
    public int $line_no ;
    public \Contender\Elements\Collection $children ;
    public \Contender\Elements\Collection $childNodes ;
    public \Contender\Elements\Collection $child_nodes ;
    public \Contender\Elements\Node $firstChild ;
    public \Contender\Elements\Node $first_child ;
    public \Contender\Elements\Node $lastChild ;
    public \Contender\Elements\Node $last_child ;
    public \Contender\Elements\Node|null $firstElementChild ;
    public \Contender\Elements\Node|null $first_element_child ;
    public \Contender\Elements\Node|null $parentNode ;
    public \Contender\Elements\Node|null $parent_node ;
    public \Contender\Elements\Node|null $lastElementChild ;
    public \Contender\Elements\Node|null $last_element_child ;
    public \Contender\Elements\Node|null $previousElementSibling ;
    public \Contender\Elements\Node|null $previous_element_sibling ;
    public \Contender\Elements\Node|null $nextElementSibling ;
    public \Contender\Elements\Node|null $next_element_sibling ;
    public \Contender\Elements\Node|null $nextSibling ;
    public \Contender\Elements\Node|null $next_sibling ;
    public int $nodeType ;
    public int $node_type ;
    public string $nodeName ;
    public string $node_name ;

    /* Methods */
    public __construct (DOMNode $element) : void
    public __toString () : string
    public remove () : \Contender\Elements\Node|null
    public after (?mixed $elements = NULL) : \Contender\Elements\Node|null
    public before (?mixed $elements = NULL) : \Contender\Elements\Node
    public getNextSiblingAttribute () : static|null
    public getElementById (string $query) : \Contender\Elements\Node|null
    public getElementsByClassName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public getElementsByName (string $query) : \Contender\Elements\Collection|\Contender\Elements\Node[]
    public getElementsByTagName (string $tag_name) : \Contender\Elements\Collection
    public getAttributeNodeNS (string $namespaceURI, string $localName) : \Contender\Elements\Collection
    public querySelector (string $selectors) : \Contender\Elements\Node|null
    public querySelectorAll (string $selectors) : \Contender\Elements\Collection|Node[]
    public find (string $query) : \Contender\Elements\Collection
    public evaluateToCollection (string $query) : \Contender\Elements\Collection|Node[]
    public evaluate (string $query, [int $offset = 0]) : \Contender\Elements\Node|null
    public attr (?mixed $name = NULL) : string|null
    public getAttr (string $name) : mixed
    public setAttr (string $name, string $value) : mixed
    public appendChild (Contender\Elements\Node $node) : \Contender\Elements\Node
    public insertBefore (Contender\Elements\Node $node, [?Contender\Elements\Node $referenceNode = null]) : \Contender\Elements\Node
    public normalize () : mixed
    public nativeNode () : DOMNode

 }

```


Constants
----------------------------




Properties
----------------------------

### `bool` \Contender\Elements\Node::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Node::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### `bool` \Contender\Elements\Node::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Node::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### `bool` \Contender\Elements\Node::$isText __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Node::$is_text __read only__
true if this node is an XML_TEXT_NODE



### `bool` \Contender\Elements\Node::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Node::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### `bool` \Contender\Elements\Node::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Node::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### `bool` \Contender\Elements\Node::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Node::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### `bool` \Contender\Elements\Node::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Node::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### `bool` \Contender\Elements\Node::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Node::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### `bool` \Contender\Elements\Node::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Node::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### `bool` \Contender\Elements\Node::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Node::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### `bool` \Contender\Elements\Node::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Node::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### `bool` \Contender\Elements\Node::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### `bool` \Contender\Elements\Node::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### `string` \Contender\Elements\Node::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Node::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to <a href="#string-contenderelementsnodetextcontent-read-only">\Contender\Elements\Node::$textContent</a> instead of NULL.



### `string` \Contender\Elements\Node::$textContent __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Node::$text_content __read only__
The text content of this node and its descendants.



### `string` \Contender\Elements\Node::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### `string` \Contender\Elements\Node::$nodePath __read only__
Gets an XPath location path for the node



### `string` \Contender\Elements\Node::$node_path __read only__
Gets an XPath location path for the node



### `int` \Contender\Elements\Node::$lineNo __read only__
Get line number for a node



### `int` \Contender\Elements\Node::$line_no __read only__
Get line number for a node



### `\Contender\Elements\Collection` \Contender\Elements\Node::$children __read only__
That contains all children of this node. If there are no children, this is an empty <a href="#contenderelementscollection">\Contender\Elements\Collection</a>.



### `\Contender\Elements\Collection` \Contender\Elements\Node::$childNodes __read only__
Aliases to children



### `\Contender\Elements\Collection` \Contender\Elements\Node::$child_nodes __read only__
Aliases to children



### `\Contender\Elements\Node` \Contender\Elements\Node::$firstChild __read only__
Get a first child node.



### `\Contender\Elements\Node` \Contender\Elements\Node::$first_child __read only__
Get a first child node.



### `\Contender\Elements\Node` \Contender\Elements\Node::$lastChild __read only__
Get a last child node.



### `\Contender\Elements\Node` \Contender\Elements\Node::$last_child __read only__
Get a last child node.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$parentNode __read only__
The parent of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$parent_node __read only__
The parent of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$nextSibling __read only__
Alias to next_element_sibling



### `\Contender\Elements\Node|null` \Contender\Elements\Node::$next_sibling __read only__
Alias to next_element_sibling



### `int` \Contender\Elements\Node::$nodeType __read only__
Gets the type of the node.



### `int` \Contender\Elements\Node::$node_type __read only__
Gets the type of the node.



### `string` \Contender\Elements\Node::$nodeName __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Node::$node_name __read only__
Returns the most accurate name for the current node type



### `string` \Contender\Elements\Node::$innerHTML
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$inner_h_t_m_l
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$innerXML
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### `string` \Contender\Elements\Node::$inner_x_m_l
The Element property innerXML gets or sets the HTML or XML markup contained within the element






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
\Contender\Elements\Node


### See Also
 - <a href="#contenderelementsdocumentcreateelementstring-name-stringnull-value">\Contender\Elements\Document::createElement()</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before">https://developer.mozilla.org/en-US/docs/Web/API/ChildNode/before</a>


### \Contender\Elements\Node::getNextSiblingAttribute()




#### Parameters


#### Return Values
static|null Alias to next_element_sibling


### See Also
None

### \Contender\Elements\Node::getElementById(string $query)
Returns a <a href="#contenderelementsnode">\Contender\Elements\Node</a> object representing the element whose id property matches the specified string.




#### Parameters
##### `string` $query

tag id



#### Return Values
\Contender\Elements\Node|null Selected node


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

### \Contender\Elements\Node::querySelectorAll(string $selectors)
Returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> of <a href="#contenderelementsnode">\Contender\Elements\Node</a> matching CSS selector.




#### Parameters
##### `string` $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


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

### \Contender\Elements\Node::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a <a href="#contenderelementscollection">\Contender\Elements\Collection</a> result if possible




#### Parameters
##### `string` $query

xpath



#### Return Values
\Contender\Elements\Collection|Node[]


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

### \Contender\Elements\Node::attr(mixed|null $name)
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

### \Contender\Elements\Node::getAttr(string $name)
get tag attribute for element.




#### Parameters
##### `string` $name





#### Return Values
mixed


### See Also
None

### \Contender\Elements\Node::setAttr(string $name, string $value)
set tag attribute for element.




#### Parameters
##### `string` $name



##### `string` $value





#### Return Values
mixed


### See Also
None

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
mixed


### See Also
 - <a href="https://www.php.net/manual/en/domnode.normalize.php">https://www.php.net/manual/en/domnode.normalize.php</a>
 - <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize">https://developer.mozilla.org/en-US/docs/Web/API/Node/normalize</a>


### \Contender\Elements\Node::nativeNode()




#### Parameters


#### Return Values
DOMNode


### See Also
None


