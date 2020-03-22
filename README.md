Contender
============================================
Contender is a very simple, fast, and flexible HTMLParser.
You can scrape using Xpath or Css Selector.


Installation
---------------------------
### With Composer

``` .bash
 composer require contender/contender
```

``` .php
<?php
require 'vendor/autoload.php';

use Contender\Contender;

$document = Contender::loadStr(<<<HTMLPAGE
<div>
    <h1 id="header">Example Page</h1>
    <p>This is Contender example html-document.</p>
</div>
HTMLPAGE);

$node = $document->getElementById('header');

echo $node->innerHTML;

// Example Page

```

Documents
---------------------------------
 - [here](https://github.com/suzunone/Contender/blob/master/doc.md)