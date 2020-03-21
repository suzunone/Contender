Contender\Contender
==========================

Load Html to generate a {@link \Contender\Elements\Document} object.

Const
----------------------------

### string Contender\Contender::OPTION_COMPACT = "LIBXML_COMPACT"
Activate small nodes allocation optimization. This may speed up your application without needing to change the code.




### string Contender\Contender::OPTION_NOBLANKS = "LIBXML_NOBLANKS"
Remove blank nodes




### string Contender\Contender::OPTION_NOCDATA = "LIBXML_NOCDATA"
Merge CDATA as text nodes




### string Contender\Contender::OPTION_NOEMPTYTAG = "LIBXML_NOEMPTYTAG"
Expand empty tags (e.g. <br/> to <br></br>)




### string Contender\Contender::OPTION_NOENT = "LIBXML_NOENT"
Substitute entities




### string Contender\Contender::OPTION_NONET = "LIBXML_NONET"
Disable network access when loading documents




### string Contender\Contender::OPTION_CONVERT_ENCODE = "CONVERT_ENCODE"
Force to UTF -8 encoding




### string Contender\Contender::OPTION_CONVERT_NO_ENCODE = "CONVERT_NO_ENCODE"





### string Contender\Contender::OPTION_CONVERT_REPLACE_CHARSET = "OPTION_CONVERT_REPLACE_CHARSET"
Change charset<meta>tag when {@link \Contender\Contender::OPTION_CONVERT_ENCODE} option is enabled




### string Contender\Contender::OPTION_CONVERT_NO_REPLACE_CHARSET = "OPTION_CONVERT_NO_REPLACE_CHARSET"





### string Contender\Contender::OPTION_FORMAT_OUTPUT_ENABLE = "OPTION_FORMAT_OUTPUT_ENABLE"
Nicely formats output with indentation and extra space.




### string Contender\Contender::OPTION_FORMAT_OUTPUT_DISABLE = "OPTION_FORMAT_OUTPUT_DISABLE"





### string Contender\Contender::OPTION_MINIFY_DISABLE = "OPTION_MINIFY_DISABLE"
Do not minify html, then generating to {@link \Contender\Elements\Document}




### string Contender\Contender::OPTION_MINIFY_ENABLE = "OPTION_MINIFY_ENABLE"





### string Contender\Contender::OPTION_REMOVE_STYLE_ENABLE = "OPTION_REMOVE_STYLE_ENABLE"
Remove <style>tags, then generating to {@link \Contender\Elements\Document}




### string Contender\Contender::OPTION_REMOVE_STYLE_DISABLE = "OPTION_REMOVE_STYLE_DISABLE"





### string Contender\Contender::OPTION_REMOVE_SCRIPT_ENABLE = "OPTION_REMOVE_SCRIPT_ENABLE"
Remove <script>tags, then generating to {@link \Contender\Elements\Document}




### string Contender\Contender::OPTION_REMOVE_SCRIPT_DISABLE = "OPTION_REMOVE_SCRIPT_DISABLE"





### string Contender\Contender::OPTION_REMOVE_COMMENT_ENABLE = "OPTION_REMOVE_COMMENT_ENABLE"
Remove <comment>tags, then generating to {@link \Contender\Elements\Document}




### string Contender\Contender::OPTION_REMOVE_COMMENT_DISABLE = "OPTION_REMOVE_COMMENT_DISABLE"





### integer Contender\Contender::DEFAULT_LIBXML_OPTION = 4194402
Default libxml options







Properties
----------------------------




Methods
----------------------------

### Contender\Contender::__construct()
Contender constructor.



#### Parameters


#### Return Values
mixed


### See Also
None



### Contender\Contender::setOption(string $option)
Options for converting Html to ContenderDocument



#### Parameters
##### (string) $option

Contender option const.



#### Return Values
$this


### See Also
None



### Contender\Contender::setOptions(array $options)
Calls {@link \Contender\Contender::setOption()} as an array



#### Parameters
##### (array) $options

Array multiple Contender option constants



#### Return Values
$this


### See Also
None



### Contender\Contender::load(string $html, array $options)
Generate a {@link \Contender\Elements\Document} from a string



#### Parameters
##### (string) $html

The string containing the HTML.

##### (array) $options

Array multiple Contender option constants



#### Return Values
\Contender\Elements\Document


### See Also
None



### Contender\Contender::loadFromUrl(string $url, array $options, array|null $context_option)
Generate a {@link \Contender\Elements\Document}  from a URL



#### Parameters
##### (string) $url

The path to the HTML document.

##### (array) $options

Array multiple Contender option constants

##### (array|null) $context_option

Context options



#### Return Values
\Contender\Elements\Document


### See Also
None



### Contender\Contender::loadStr(string $html, array $options)
Generate a {@link \Contender\Elements\Document}  from a string(static call)



#### Parameters
##### (string) $html

The string containing the HTML.

##### (array) $options

Array multiple Contender option constants



#### Return Values
\Contender\Elements\Document


### See Also
None



### Contender\Contender::loadUrl(string $url, array $options, array|null $context_option)
Generate a {@link \Contender\Elements\Document}  from a URL(static call)



#### Parameters
##### (string) $url

The path to the HTML document.

##### (array) $options

Array multiple Contender option constants

##### (array|null) $context_option

Context options



#### Return Values
\Contender\Elements\Document


### See Also
None




Contender\Elements\Collection
==========================

A collection of {@link \Contender\Elements\Node} from {@link \Contender\Elements\Document}

Const
----------------------------




Properties
----------------------------

### string Contender\Elements\Collection::$innerHTML 
1st of innerHTML



### string Contender\Elements\Collection::$inner_h_t_m_l 
1st of innerHTML






Methods
----------------------------

### Contender\Elements\Collection::__construct(mixed|null $items)
Collection constructor.



#### Parameters
##### (array) $items





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::find(string $selectors)
Call {@link \Contender\Elements\Collection::querySelectorAll()} and {@link \Contender\Elements\Collection::onlyElement()}



#### Parameters
##### (string) $selectors





#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Collection::makeByDOMNodeList(DOMNodeList $element, Contender\Elements\ElementInterface $node)




#### Parameters
##### (\DOMNodeList) $element



##### (\Contender\Elements\ElementInterface) $node





#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Collection::onlyElement()
HTMLElement only Node



#### Parameters


#### Return Values
\Contender\Elements\Collection Filtered Collection


### See Also
None



### Contender\Elements\Collection::sortDom()
Sort {@link \Contender\Elements\Node} by line number and Xpath



#### Parameters


#### Return Values
\Contender\Elements\Collection Sorted Collection


### See Also
None



### Contender\Elements\Collection::querySelector(string $query)
Returns a {@link \Contender\Elements\Node} matching Css selector.



#### Parameters
##### (string) $query

Valid CSS selector string



#### Return Values
\Contender\Elements\Node|null


### See Also
None



### Contender\Elements\Collection::querySelectorAll(string $selectors)
Returns a {@link \Contender\Elements\Collection} of {@link \Contender\Elements\Node} matching Css selector.



#### Parameters
##### (string) $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None



### Contender\Elements\Collection::__get(mixed|null $key)




#### Parameters
##### (string) $key





#### Return Values
mixed|string


### See Also
None



### Contender\Elements\Collection::__set(mixed|null $key, mixed|null $value)




#### Parameters
##### (mixed|null) $key



##### (mixed|null) $value





#### Return Values
void|mixed


### See Also
None



### Contender\Elements\Collection::__isset(mixed|null $key)




#### Parameters
##### (mixed|null) $key





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::attr(mixed|null $param)




#### Parameters
##### (mixed|null) $param





#### Return Values
string


### See Also
None



### Contender\Elements\Collection::times(mixed|null $number, callable|null $callback)
Create a new collection by invoking the callback a given amount of times.



#### Parameters
##### (int) $number



##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::all()
Get all of the items in the collection.



#### Parameters


#### Return Values
array


### See Also
None



### Contender\Elements\Collection::lazy()
Get a lazy collection for the items in this collection.



#### Parameters


#### Return Values
\Illuminate\Support\LazyCollection


### See Also
None



### Contender\Elements\Collection::avg(mixed|null $callback)
Get the average value of a given key.



#### Parameters
##### (callable|string|null) $callback





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::median(mixed|null $key)
Get the median of a given key.



#### Parameters
##### (string|array|null) $key





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::mode(mixed|null $key)
Get the mode of a given key.



#### Parameters
##### (string|array|null) $key





#### Return Values
array|null


### See Also
None



### Contender\Elements\Collection::collapse()
Collapse the collection of items into a single array.



#### Parameters


#### Return Values
static


### See Also
None



### Contender\Elements\Collection::contains(mixed|null $key, mixed|null $operator, mixed|null $value)
Determine if an item exists in the collection.



#### Parameters
##### (mixed) $key



##### (mixed) $operator



##### (mixed) $value





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::crossJoin(mixed|null $lists)
Cross join with the given lists, returning all possible permutations.



#### Parameters
##### (mixed|null) $lists





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::diff(mixed|null $items)
Get the items in the collection that are not present in the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::diffUsing(mixed|null $items, callable $callback)
Get the items in the collection that are not present in the given items, using the callback.



#### Parameters
##### (mixed) $items



##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::diffAssoc(mixed|null $items)
Get the items in the collection whose keys and values are not present in the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::diffAssocUsing(mixed|null $items, callable $callback)
Get the items in the collection whose keys and values are not present in the given items, using the callback.



#### Parameters
##### (mixed) $items



##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::diffKeys(mixed|null $items)
Get the items in the collection whose keys are not present in the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::diffKeysUsing(mixed|null $items, callable $callback)
Get the items in the collection whose keys are not present in the given items, using the callback.



#### Parameters
##### (mixed) $items



##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::duplicates(mixed|null $callback, mixed|null $strict)
Retrieve duplicate items from the collection.



#### Parameters
##### (callable|null) $callback



##### (bool) $strict





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::duplicatesStrict(mixed|null $callback)
Retrieve duplicate items from the collection using strict comparison.



#### Parameters
##### (callable|null) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::except(mixed|null $keys)
Get all items except for those with the specified keys.



#### Parameters
##### (\Illuminate\Support\Collection|mixed) $keys





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::filter(callable|null $callback)
Run a filter over each of the items.



#### Parameters
##### (callable|null) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::first(callable|null $callback, mixed|null $default)
Get the first item from the collection passing the given truth test.



#### Parameters
##### (callable|null) $callback



##### (mixed) $default





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::flatten(mixed|null $depth)
Get a flattened array of the items in the collection.



#### Parameters
##### (int) $depth





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::flip()
Flip the items in the collection.



#### Parameters


#### Return Values
static


### See Also
None



### Contender\Elements\Collection::forget(mixed|null $keys)
Remove an item from the collection by key.



#### Parameters
##### (string|array) $keys





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::get(mixed|null $key, mixed|null $default)
Get an item from the collection by key.



#### Parameters
##### (mixed) $key



##### (mixed) $default





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::groupBy(mixed|null $groupBy, mixed|null $preserveKeys)
Group an associative array by a field or using a callback.



#### Parameters
##### (array|callable|string) $groupBy



##### (bool) $preserveKeys





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::keyBy(mixed|null $keyBy)
Key an associative array by a field or using a callback.



#### Parameters
##### (callable|string) $keyBy





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::has(mixed|null $key)
Determine if an item exists in the collection by key.



#### Parameters
##### (mixed) $key





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::implode(mixed|null $value, mixed|null $glue)
Concatenate values of a given key as a string.



#### Parameters
##### (string) $value



##### (string) $glue





#### Return Values
string


### See Also
None



### Contender\Elements\Collection::intersect(mixed|null $items)
Intersect the collection with the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::intersectByKeys(mixed|null $items)
Intersect the collection with the given items by key.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::isEmpty()
Determine if the collection is empty or not.



#### Parameters


#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::join(mixed|null $glue, mixed|null $finalGlue)
Join all items from the collection using a string. The final items can use a separate glue string.



#### Parameters
##### (string) $glue



##### (string) $finalGlue





#### Return Values
string


### See Also
None



### Contender\Elements\Collection::keys()
Get the keys of the collection items.



#### Parameters


#### Return Values
static


### See Also
None



### Contender\Elements\Collection::last(callable|null $callback, mixed|null $default)
Get the last item from the collection.



#### Parameters
##### (callable|null) $callback



##### (mixed) $default





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::pluck(mixed|null $value, mixed|null $key)
Get the values of a given key.



#### Parameters
##### (string|array) $value



##### (string|null) $key





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::map(callable $callback)
Run a map over each of the items.



#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::mapToDictionary(callable $callback)
Run a dictionary map over the items.

The callback should return an associative array with a single key/value pair.

#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::mapWithKeys(callable $callback)
Run an associative map over each of the items.

The callback should return an associative array with a single key/value pair.

#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::merge(mixed|null $items)
Merge the collection with the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::mergeRecursive(mixed|null $items)
Recursively merge the collection with the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::combine(mixed|null $values)
Create a collection by using this collection for keys and another for its values.



#### Parameters
##### (mixed) $values





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::union(mixed|null $items)
Union the collection with the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::nth(mixed|null $step, mixed|null $offset)
Create a new collection consisting of every n-th element.



#### Parameters
##### (int) $step



##### (int) $offset





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::only(mixed|null $keys)
Get the items with the specified keys.



#### Parameters
##### (mixed) $keys





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::pop()
Get and remove the last item from the collection.



#### Parameters


#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::prepend(mixed|null $value, mixed|null $key)
Push an item onto the beginning of the collection.



#### Parameters
##### (mixed) $value



##### (mixed) $key





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::push(mixed|null $value)
Push an item onto the end of the collection.



#### Parameters
##### (mixed) $value





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::concat(mixed|null $source)
Push all of the given items onto the collection.



#### Parameters
##### (iterable) $source





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::pull(mixed|null $key, mixed|null $default)
Get and remove an item from the collection.



#### Parameters
##### (mixed) $key



##### (mixed) $default





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::put(mixed|null $key, mixed|null $value)
Put an item in the collection by key.



#### Parameters
##### (mixed) $key



##### (mixed) $value





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::random(mixed|null $number)
Get one or a specified number of items randomly from the collection.



#### Parameters
##### (int|null) $number





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::reduce(callable $callback, mixed|null $initial)
Reduce the collection to a single value.



#### Parameters
##### (callable) $callback



##### (mixed) $initial





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::replace(mixed|null $items)
Replace the collection items with the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::replaceRecursive(mixed|null $items)
Recursively replace the collection items with the given items.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::reverse()
Reverse items order.



#### Parameters


#### Return Values
static


### See Also
None



### Contender\Elements\Collection::search(mixed|null $value, mixed|null $strict)
Search the collection for a given value and return the corresponding key if successful.



#### Parameters
##### (mixed) $value



##### (bool) $strict





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::shift()
Get and remove the first item from the collection.



#### Parameters


#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::shuffle(mixed|null $seed)
Shuffle the items in the collection.



#### Parameters
##### (int) $seed





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::skip(mixed|null $count)
Skip the first {$count} items.



#### Parameters
##### (int) $count





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::slice(mixed|null $offset, mixed|null $length)
Slice the underlying collection array.



#### Parameters
##### (int) $offset



##### (int) $length





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::split(mixed|null $numberOfGroups)
Split a collection into a certain number of groups.



#### Parameters
##### (int) $numberOfGroups





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::chunk(mixed|null $size)
Chunk the collection into chunks of the given size.



#### Parameters
##### (int) $size





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::sort(callable|null $callback)
Sort through each item with a callback.



#### Parameters
##### (callable|null) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::sortBy(mixed|null $callback, mixed|null $options, mixed|null $descending)
Sort the collection using the given callback.



#### Parameters
##### (callable|string) $callback



##### (int) $options



##### (bool) $descending





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::sortByDesc(mixed|null $callback, mixed|null $options)
Sort the collection in descending order using the given callback.



#### Parameters
##### (callable|string) $callback



##### (int) $options





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::sortKeys(mixed|null $options, mixed|null $descending)
Sort the collection keys.



#### Parameters
##### (int) $options



##### (bool) $descending





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::sortKeysDesc(mixed|null $options)
Sort the collection keys in descending order.



#### Parameters
##### (int) $options





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::splice(mixed|null $offset, mixed|null $length, mixed|null $replacement)
Splice a portion of the underlying collection array.



#### Parameters
##### (int) $offset



##### (int|null) $length



##### (mixed) $replacement





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::take(mixed|null $limit)
Take the first or last {$limit} items.



#### Parameters
##### (int) $limit





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::transform(callable $callback)
Transform each item in the collection using a callback.



#### Parameters
##### (callable) $callback





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::values()
Reset the keys on the underlying array.



#### Parameters


#### Return Values
static


### See Also
None



### Contender\Elements\Collection::zip(mixed|null $items)
Zip the collection together with one or more arrays.

e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);=> [[1, 4], [2, 5], [3, 6]]

#### Parameters
##### (mixed|null) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::pad(mixed|null $size, mixed|null $value)
Pad collection to the specified length with a value.



#### Parameters
##### (int) $size



##### (mixed) $value





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::getIterator()
Get an iterator for the items.



#### Parameters


#### Return Values
\ArrayIterator


### See Also
None



### Contender\Elements\Collection::count()
Count the number of items in the collection.



#### Parameters


#### Return Values
int


### See Also
None



### Contender\Elements\Collection::add(mixed|null $item)
Add an item to the collection.



#### Parameters
##### (mixed) $item





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::toBase()
Get a base Support collection instance from this collection.



#### Parameters


#### Return Values
\Illuminate\Support\Collection


### See Also
None



### Contender\Elements\Collection::offsetExists(mixed|null $key)
Determine if an item exists at an offset.



#### Parameters
##### (mixed) $key





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::offsetGet(mixed|null $key)
Get an item at a given offset.



#### Parameters
##### (mixed) $key





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::offsetSet(mixed|null $key, mixed|null $value)
Set the item at a given offset.



#### Parameters
##### (mixed) $key



##### (mixed) $value





#### Return Values
void


### See Also
None



### Contender\Elements\Collection::offsetUnset(mixed|null $key)
Unset the item at a given offset.



#### Parameters
##### (string) $key





#### Return Values
void


### See Also
None



### Contender\Elements\Collection::make(mixed|null $items)
Create a new collection instance if the value isn't one already.



#### Parameters
##### (mixed) $items





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::wrap(mixed|null $value)
Wrap the given value in a collection if applicable.



#### Parameters
##### (mixed) $value





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::unwrap(mixed|null $value)
Get the underlying items from the given collection if applicable.



#### Parameters
##### (array|static) $value





#### Return Values
array


### See Also
None



### Contender\Elements\Collection::average(mixed|null $callback)
Alias for the "avg" method.



#### Parameters
##### (callable|string|null) $callback





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::some(mixed|null $key, mixed|null $operator, mixed|null $value)
Alias for the "contains" method.



#### Parameters
##### (mixed) $key



##### (mixed) $operator



##### (mixed) $value





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::containsStrict(mixed|null $key, mixed|null $value)
Determine if an item exists, using strict comparison.



#### Parameters
##### (mixed) $key



##### (mixed) $value





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::dd(mixed|null $args)
Dump the items and end the script.



#### Parameters
##### (mixed|null) $args





#### Return Values
void


### See Also
None



### Contender\Elements\Collection::dump()
Dump the items.



#### Parameters


#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::each(callable $callback)
Execute a callback over each item.



#### Parameters
##### (callable) $callback





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::eachSpread(callable $callback)
Execute a callback over each nested chunk of items.



#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::every(mixed|null $key, mixed|null $operator, mixed|null $value)
Determine if all items pass the given truth test.



#### Parameters
##### (string|callable) $key



##### (mixed) $operator



##### (mixed) $value





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::firstWhere(mixed|null $key, mixed|null $operator, mixed|null $value)
Get the first item by the given key value pair.



#### Parameters
##### (string) $key



##### (mixed) $operator



##### (mixed) $value





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::isNotEmpty()
Determine if the collection is not empty.



#### Parameters


#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::mapSpread(callable $callback)
Run a map over each nested chunk of items.



#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::mapToGroups(callable $callback)
Run a grouping map over the items.

The callback should return an associative array with a single key/value pair.

#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::flatMap(callable $callback)
Map a collection and flatten the result by a single level.



#### Parameters
##### (callable) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::mapInto(mixed|null $class)
Map the values into a new class.



#### Parameters
##### (string) $class





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::min(mixed|null $callback)
Get the min value of a given key.



#### Parameters
##### (callable|string|null) $callback





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::max(mixed|null $callback)
Get the max value of a given key.



#### Parameters
##### (callable|string|null) $callback





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::forPage(mixed|null $page, mixed|null $perPage)
"Paginate" the collection by slicing it into a smaller collection.



#### Parameters
##### (int) $page



##### (int) $perPage





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::partition(mixed|null $key, mixed|null $operator, mixed|null $value)
Partition the collection into two arrays using the given callback or key.



#### Parameters
##### (callable|string) $key



##### (mixed) $operator



##### (mixed) $value





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::sum(mixed|null $callback)
Get the sum of the given values.



#### Parameters
##### (callable|string|null) $callback





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::when(mixed|null $value, callable $callback, callable|null $default)
Apply the callback if the value is truthy.



#### Parameters
##### (bool|mixed) $value



##### (callable) $callback



##### (callable) $default





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::whenEmpty(callable $callback, callable|null $default)
Apply the callback if the collection is empty.



#### Parameters
##### (callable) $callback



##### (callable) $default





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::whenNotEmpty(callable $callback, callable|null $default)
Apply the callback if the collection is not empty.



#### Parameters
##### (callable) $callback



##### (callable) $default





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::unless(mixed|null $value, callable $callback, callable|null $default)
Apply the callback if the value is falsy.



#### Parameters
##### (bool) $value



##### (callable) $callback



##### (callable) $default





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::unlessEmpty(callable $callback, callable|null $default)
Apply the callback unless the collection is empty.



#### Parameters
##### (callable) $callback



##### (callable) $default





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::unlessNotEmpty(callable $callback, callable|null $default)
Apply the callback unless the collection is not empty.



#### Parameters
##### (callable) $callback



##### (callable) $default





#### Return Values
static|mixed


### See Also
None



### Contender\Elements\Collection::where(mixed|null $key, mixed|null $operator, mixed|null $value)
Filter items by the given key value pair.



#### Parameters
##### (string) $key



##### (mixed) $operator



##### (mixed) $value





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereNull(mixed|null $key)
Filter items where the given key is not null.



#### Parameters
##### (string|null) $key





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereNotNull(mixed|null $key)
Filter items where the given key is null.



#### Parameters
##### (string|null) $key





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereStrict(mixed|null $key, mixed|null $value)
Filter items by the given key value pair using strict comparison.



#### Parameters
##### (string) $key



##### (mixed) $value





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereIn(mixed|null $key, mixed|null $values, mixed|null $strict)
Filter items by the given key value pair.



#### Parameters
##### (string) $key



##### (mixed) $values



##### (bool) $strict





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereInStrict(mixed|null $key, mixed|null $values)
Filter items by the given key value pair using strict comparison.



#### Parameters
##### (string) $key



##### (mixed) $values





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereBetween(mixed|null $key, mixed|null $values)
Filter items such that the value of the given key is between the given values.



#### Parameters
##### (string) $key



##### (array) $values





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereNotBetween(mixed|null $key, mixed|null $values)
Filter items such that the value of the given key is not between the given values.



#### Parameters
##### (string) $key



##### (array) $values





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereNotIn(mixed|null $key, mixed|null $values, mixed|null $strict)
Filter items by the given key value pair.



#### Parameters
##### (string) $key



##### (mixed) $values



##### (bool) $strict





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereNotInStrict(mixed|null $key, mixed|null $values)
Filter items by the given key value pair using strict comparison.



#### Parameters
##### (string) $key



##### (mixed) $values





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::whereInstanceOf(mixed|null $type)
Filter the items, removing any items that don't match the given type.



#### Parameters
##### (string) $type





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::pipe(callable $callback)
Pass the collection to the given callback and return the result.



#### Parameters
##### (callable) $callback





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::tap(callable $callback)
Pass the collection to the given callback and then return it.



#### Parameters
##### (callable) $callback





#### Return Values
$this


### See Also
None



### Contender\Elements\Collection::reject(mixed|null $callback)
Create a collection of all elements that do not pass a given truth test.



#### Parameters
##### (callable|mixed) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::unique(mixed|null $key, mixed|null $strict)
Return only unique items from the collection array.



#### Parameters
##### (string|callable|null) $key



##### (bool) $strict





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::uniqueStrict(mixed|null $key)
Return only unique items from the collection array using strict comparison.



#### Parameters
##### (string|callable|null) $key





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::collect()
Collect the values into a collection.



#### Parameters


#### Return Values
\Illuminate\Support\Collection


### See Also
None



### Contender\Elements\Collection::toArray()
Get the collection of items as a plain array.



#### Parameters


#### Return Values
array


### See Also
None



### Contender\Elements\Collection::jsonSerialize()
Convert the object into something JSON serializable.



#### Parameters


#### Return Values
array


### See Also
None



### Contender\Elements\Collection::toJson(mixed|null $options)
Get the collection of items as JSON.



#### Parameters
##### (int) $options





#### Return Values
string


### See Also
None



### Contender\Elements\Collection::getCachingIterator(mixed|null $flags)
Get a CachingIterator instance.



#### Parameters
##### (int) $flags





#### Return Values
\CachingIterator


### See Also
None



### Contender\Elements\Collection::countBy(mixed|null $callback)
Count the number of items in the collection using a given truth test.



#### Parameters
##### (callable|null) $callback





#### Return Values
static


### See Also
None



### Contender\Elements\Collection::__toString()
Convert the collection to its string representation.



#### Parameters


#### Return Values
string


### See Also
None



### Contender\Elements\Collection::proxy(mixed|null $method)
Add a method to the list of proxied methods.



#### Parameters
##### (string) $method





#### Return Values
void


### See Also
None



### Contender\Elements\Collection::macro(mixed|null $name, mixed|null $macro)
Register a custom macro.



#### Parameters
##### (string) $name



##### (object|callable) $macro





#### Return Values
void


### See Also
None



### Contender\Elements\Collection::mixin(mixed|null $mixin, mixed|null $replace)
Mix another object into the class.



#### Parameters
##### (object) $mixin



##### (bool) $replace





#### Return Values
void


### See Also
None



### Contender\Elements\Collection::hasMacro(mixed|null $name)
Checks if macro is registered.



#### Parameters
##### (string) $name





#### Return Values
bool


### See Also
None



### Contender\Elements\Collection::__callStatic(mixed|null $method, mixed|null $parameters)
Dynamically handle calls to the class.



#### Parameters
##### (string) $method



##### (array) $parameters





#### Return Values
mixed


### See Also
None



### Contender\Elements\Collection::__call(mixed|null $method, mixed|null $parameters)
Dynamically handle calls to the class.



#### Parameters
##### (string) $method



##### (array) $parameters





#### Return Values
mixed


### See Also
None




Contender\Elements\Document
==========================

Access each element of Html, like window.document in Javascript.

Const
----------------------------




Properties
----------------------------

### bool Contender\Elements\Document::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### bool Contender\Elements\Document::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### bool Contender\Elements\Document::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### bool Contender\Elements\Document::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### bool Contender\Elements\Document::$isText __read only__
true if this node is an XML_TEXT_NODE



### bool Contender\Elements\Document::$is_text __read only__
true if this node is an XML_TEXT_NODE



### bool Contender\Elements\Document::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### bool Contender\Elements\Document::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### bool Contender\Elements\Document::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### bool Contender\Elements\Document::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### bool Contender\Elements\Document::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### bool Contender\Elements\Document::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### bool Contender\Elements\Document::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### bool Contender\Elements\Document::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### bool Contender\Elements\Document::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### bool Contender\Elements\Document::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### bool Contender\Elements\Document::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### bool Contender\Elements\Document::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### bool Contender\Elements\Document::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### bool Contender\Elements\Document::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### bool Contender\Elements\Document::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### bool Contender\Elements\Document::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### bool Contender\Elements\Document::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### bool Contender\Elements\Document::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### string Contender\Elements\Document::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.



### string Contender\Elements\Document::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.



### string Contender\Elements\Document::$textContent __read only__
The text content of this node and its descendants.



### string Contender\Elements\Document::$text_content __read only__
The text content of this node and its descendants.



### string Contender\Elements\Document::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Document::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Document::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Document::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Document::$nodePath __read only__
Gets an XPath location path for the node



### string Contender\Elements\Document::$node_path __read only__
Gets an XPath location path for the node



### int Contender\Elements\Document::$lineNo __read only__
Get line number for a node



### int Contender\Elements\Document::$line_no __read only__
Get line number for a node



### \Contender\Elements\Collection Contender\Elements\Document::$children __read only__
That contains all children of this node. If there are no children, this is an empty {@link \Contender\Elements\Collection}.



### \Contender\Elements\Collection Contender\Elements\Document::$childNodes __read only__
Aliases to children



### \Contender\Elements\Collection Contender\Elements\Document::$child_nodes __read only__
Aliases to children



### \Contender\Elements\Node Contender\Elements\Document::$firstChild __read only__
Get a first child node.



### \Contender\Elements\Node Contender\Elements\Document::$first_child __read only__
Get a first child node.



### \Contender\Elements\Node Contender\Elements\Document::$lastChild __read only__
Get a last child node.



### \Contender\Elements\Node Contender\Elements\Document::$last_child __read only__
Get a last child node.



### \Contender\Elements\Document|null Contender\Elements\Document::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$parentNode __read only__
The parent of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$parent_node __read only__
The parent of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### \Contender\Elements\Document|null Contender\Elements\Document::$nextSibling __read only__
Alias to next_element_sibling



### \Contender\Elements\Document|null Contender\Elements\Document::$next_sibling __read only__
Alias to next_element_sibling



### int Contender\Elements\Document::$nodeType __read only__
Gets the type of the node.



### int Contender\Elements\Document::$node_type __read only__
Gets the type of the node.



### string Contender\Elements\Document::$nodeName __read only__
Returns the most accurate name for the current node type



### string Contender\Elements\Document::$node_name __read only__
Returns the most accurate name for the current node type



### string Contender\Elements\Document::$innerHTML 
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### string Contender\Elements\Document::$inner_h_t_m_l 
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### string Contender\Elements\Document::$innerXML 
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### string Contender\Elements\Document::$inner_x_m_l 
The Element property innerXML gets or sets the HTML or XML markup contained within the element






Methods
----------------------------

### Contender\Elements\Document::__construct(DOMDocument $element)
Node constructor.



#### Parameters
##### (\DOMDocument) $element





#### Return Values
mixed


### See Also
None



### Contender\Elements\Document::createElement(string $name, string|null $value)




#### Parameters
##### (string) $name



##### (string|null) $value





#### Return Values
\Contender\Elements\Node


### See Also
None



### Contender\Elements\Document::__toString()




#### Parameters


#### Return Values
string


### See Also
None



### Contender\Elements\Document::getElementById(string $query)
Returns a {@link \Contender\Elements\Node} object representing the element whose id property matches the specified string.



#### Parameters
##### (string) $query

tag id



#### Return Values
\Contender\Elements\Node|null Selected node


### See Also
None



### Contender\Elements\Document::getElementsByClassName(string $query)
Returns a {@link \Contender\Elements\Collection} object of all child elements which have all of the given class name(s)



#### Parameters
##### (string) $query

tag class name



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None



### Contender\Elements\Document::getElementsByName(string $query)
Returns a {@link \Contender\Elements\Collection} object of elements with a given name in the document.



#### Parameters
##### (string) $query

tag name attribute



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None



### Contender\Elements\Document::getElementsByTagName(string $tag_name)
Returns a {@link \Contender\Elements\Collection} object of elements with the given tag name.



#### Parameters
##### (string) $tag_name

Elements tag name



#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Document::getAttributeNodeNS(string $namespaceURI, string $localName)
Returns the attribute node in namespace namespaceURI with local name localName for the current node.



#### Parameters
##### (string) $namespaceURI

The namespace URI.

##### (string) $localName

The local name.



#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Document::querySelector(string $selectors)
Returns a {@link \Contender\Elements\Node} matching Css selector.



#### Parameters
##### (string) $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Node|null


### See Also
None



### Contender\Elements\Document::querySelectorAll(string $selectors)
Returns a {@link \Contender\Elements\Collection} of {@link \Contender\Elements\Node} matching Css selector.



#### Parameters
##### (string) $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None



### Contender\Elements\Document::find(string $query)
Call querySelectorAll() and {@link \Contender\Elements\Collection::onlyElement()}



#### Parameters
##### (string) $query





#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Document::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a {@link \Contender\Elements\Collection} result if possible



#### Parameters
##### (string) $query

xpath



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None



### Contender\Elements\Document::evaluate(string $query, int $offset)
Evaluates the given XPath expression and returns a {@link \Contender\Elements\Node} result if possible



#### Parameters
##### (string) $query

xpath

##### (int) $offset





#### Return Values
\Contender\Elements\Node|null


### See Also
None



### Contender\Elements\Document::attr(mixed|null $name)
if call attr('name')

Alias getAttr()if call attr('name', 'value')Alias setAttr()

#### Parameters
##### (mixed|null) $name





#### Return Values
string|null


### See Also
None



### Contender\Elements\Document::getAttr(string $name)
get tag attribute for element.



#### Parameters
##### (string) $name





#### Return Values
mixed


### See Also
None



### Contender\Elements\Document::setAttr(string $name, string $value)
set tag attribute for element.



#### Parameters
##### (string) $name



##### (string) $value





#### Return Values
mixed


### See Also
None




Contender\Elements\Node
==========================

Each element accessed from the {@link \Contender\Elements\Document}

Const
----------------------------




Properties
----------------------------

### bool Contender\Elements\Node::$isElement __read only__
true if this node is an XML_ELEMENT_NODE



### bool Contender\Elements\Node::$is_element __read only__
true if this node is an XML_ELEMENT_NODE



### bool Contender\Elements\Node::$isAttr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### bool Contender\Elements\Node::$is_attr __read only__
true if this node is an XML_ATTRIBUTE_NODE



### bool Contender\Elements\Node::$isText __read only__
true if this node is an XML_TEXT_NODE



### bool Contender\Elements\Node::$is_text __read only__
true if this node is an XML_TEXT_NODE



### bool Contender\Elements\Node::$isCharacterData __read only__
true if this node is an XML_CDATA_SECTION_NODE



### bool Contender\Elements\Node::$is_character_data __read only__
true if this node is an XML_CDATA_SECTION_NODE



### bool Contender\Elements\Node::$isEntityReference __read only__
true if this node is an XML_ENTITY_REF_NODE



### bool Contender\Elements\Node::$is_entity_reference __read only__
true if this node is an XML_ENTITY_REF_NODE



### bool Contender\Elements\Node::$isEntity __read only__
true if this node is an XML_ENTITY_NODE



### bool Contender\Elements\Node::$is_entity __read only__
true if this node is an XML_ENTITY_NODE



### bool Contender\Elements\Node::$isProcessingInstruction __read only__
true if this node is an XML_PI_NODE



### bool Contender\Elements\Node::$is_processing_instruction __read only__
true if this node is an XML_PI_NODE



### bool Contender\Elements\Node::$isComment __read only__
true if this node is an XML_COMMENT_NODE



### bool Contender\Elements\Node::$is_comment __read only__
true if this node is an XML_COMMENT_NODE



### bool Contender\Elements\Node::$isDocument __read only__
true if this node is an XML_DOCUMENT_NODE



### bool Contender\Elements\Node::$is_document __read only__
true if this node is an XML_DOCUMENT_NODE



### bool Contender\Elements\Node::$isDocumentType __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### bool Contender\Elements\Node::$is_document_type __read only__
true if this node is an XML_DOCUMENT_TYPE_NODE



### bool Contender\Elements\Node::$isDocumentFragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### bool Contender\Elements\Node::$is_document_fragment __read only__
true if this node is an XML_DOCUMENT_FRAG_NODE



### bool Contender\Elements\Node::$isNotation __read only__
true if this node is an XML_NOTATION_NODE



### bool Contender\Elements\Node::$is_notation __read only__
true if this node is an XML_NOTATION_NODE



### string Contender\Elements\Node::$innerText __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.



### string Contender\Elements\Node::$inner_text __read only__
The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to {@link \Contender\Elements\Node::$textContent} instead of NULL.



### string Contender\Elements\Node::$textContent __read only__
The text content of this node and its descendants.



### string Contender\Elements\Node::$text_content __read only__
The text content of this node and its descendants.



### string Contender\Elements\Node::$outerHTML __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Node::$outer_h_t_m_l __read only__
The outerHTML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Node::$outerXML __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Node::$outer_x_m_l __read only__
The outerXML attribute of the Element DOM interface gets the serialized HTML fragment describing the element including its descendants. It can also be set to replace the element with nodes parsed from the given string.



### string Contender\Elements\Node::$nodePath __read only__
Gets an XPath location path for the node



### string Contender\Elements\Node::$node_path __read only__
Gets an XPath location path for the node



### int Contender\Elements\Node::$lineNo __read only__
Get line number for a node



### int Contender\Elements\Node::$line_no __read only__
Get line number for a node



### \Contender\Elements\Collection Contender\Elements\Node::$children __read only__
That contains all children of this node. If there are no children, this is an empty {@link \Contender\Elements\Collection}.



### \Contender\Elements\Collection Contender\Elements\Node::$childNodes __read only__
Aliases to children



### \Contender\Elements\Collection Contender\Elements\Node::$child_nodes __read only__
Aliases to children



### \Contender\Elements\Node Contender\Elements\Node::$firstChild __read only__
Get a first child node.



### \Contender\Elements\Node Contender\Elements\Node::$first_child __read only__
Get a first child node.



### \Contender\Elements\Node Contender\Elements\Node::$lastChild __read only__
Get a last child node.



### \Contender\Elements\Node Contender\Elements\Node::$last_child __read only__
Get a last child node.



### \Contender\Elements\Node|null Contender\Elements\Node::$firstElementChild __read only__
The first child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$first_element_child __read only__
The first child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$parentNode __read only__
The parent of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$parent_node __read only__
The parent of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$lastElementChild __read only__
The last child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$last_element_child __read only__
The last child of this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$previousElementSibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$previous_element_sibling __read only__
The node immediately preceding this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$nextElementSibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$next_element_sibling __read only__
The node immediately following this node. If there is no such node, this returns NULL.



### \Contender\Elements\Node|null Contender\Elements\Node::$nextSibling __read only__
Alias to next_element_sibling



### \Contender\Elements\Node|null Contender\Elements\Node::$next_sibling __read only__
Alias to next_element_sibling



### int Contender\Elements\Node::$nodeType __read only__
Gets the type of the node.



### int Contender\Elements\Node::$node_type __read only__
Gets the type of the node.



### string Contender\Elements\Node::$nodeName __read only__
Returns the most accurate name for the current node type



### string Contender\Elements\Node::$node_name __read only__
Returns the most accurate name for the current node type



### string Contender\Elements\Node::$innerHTML 
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### string Contender\Elements\Node::$inner_h_t_m_l 
The Element property innerHTML gets or sets the HTML or XML markup contained within the element



### string Contender\Elements\Node::$innerXML 
The Element property innerXML gets or sets the HTML or XML markup contained within the element



### string Contender\Elements\Node::$inner_x_m_l 
The Element property innerXML gets or sets the HTML or XML markup contained within the element






Methods
----------------------------

### Contender\Elements\Node::__construct(DOMNode $element)
Node constructor.



#### Parameters
##### (\DOMNode) $element





#### Return Values
mixed


### See Also
None



### Contender\Elements\Node::__toString()




#### Parameters


#### Return Values
string


### See Also
None



### Contender\Elements\Node::getElementById(string $query)
Returns a {@link \Contender\Elements\Node} object representing the element whose id property matches the specified string.



#### Parameters
##### (string) $query

tag id



#### Return Values
\Contender\Elements\Node|null Selected node


### See Also
None



### Contender\Elements\Node::getElementsByClassName(string $query)
Returns a {@link \Contender\Elements\Collection} object of all child elements which have all of the given class name(s)



#### Parameters
##### (string) $query

tag class name



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None



### Contender\Elements\Node::getElementsByName(string $query)
Returns a {@link \Contender\Elements\Collection} object of elements with a given name in the document.



#### Parameters
##### (string) $query

tag name attribute



#### Return Values
\Contender\Elements\Collection|\Contender\Elements\Node[]


### See Also
None



### Contender\Elements\Node::getElementsByTagName(string $tag_name)
Returns a {@link \Contender\Elements\Collection} object of elements with the given tag name.



#### Parameters
##### (string) $tag_name

Elements tag name



#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Node::getAttributeNodeNS(string $namespaceURI, string $localName)
Returns the attribute node in namespace namespaceURI with local name localName for the current node.



#### Parameters
##### (string) $namespaceURI

The namespace URI.

##### (string) $localName

The local name.



#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Node::querySelector(string $selectors)
Returns a {@link \Contender\Elements\Node} matching Css selector.



#### Parameters
##### (string) $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Node|null


### See Also
None



### Contender\Elements\Node::querySelectorAll(string $selectors)
Returns a {@link \Contender\Elements\Collection} of {@link \Contender\Elements\Node} matching Css selector.



#### Parameters
##### (string) $selectors

Valid CSS selector string



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None



### Contender\Elements\Node::find(string $query)
Call querySelectorAll() and {@link \Contender\Elements\Collection::onlyElement()}



#### Parameters
##### (string) $query





#### Return Values
\Contender\Elements\Collection


### See Also
None



### Contender\Elements\Node::evaluateToCollection(string $query)
Evaluates the given XPath expression and returns a {@link \Contender\Elements\Collection} result if possible



#### Parameters
##### (string) $query

xpath



#### Return Values
\Contender\Elements\Collection|Node[]


### See Also
None



### Contender\Elements\Node::evaluate(string $query, int $offset)
Evaluates the given XPath expression and returns a {@link \Contender\Elements\Node} result if possible



#### Parameters
##### (string) $query

xpath

##### (int) $offset





#### Return Values
\Contender\Elements\Node|null


### See Also
None



### Contender\Elements\Node::attr(mixed|null $name)
if call attr('name')

Alias getAttr()if call attr('name', 'value')Alias setAttr()

#### Parameters
##### (mixed|null) $name





#### Return Values
string|null


### See Also
None



### Contender\Elements\Node::getAttr(string $name)
get tag attribute for element.



#### Parameters
##### (string) $name





#### Return Values
mixed


### See Also
None



### Contender\Elements\Node::setAttr(string $name, string $value)
set tag attribute for element.



#### Parameters
##### (string) $name



##### (string) $value





#### Return Values
mixed


### See Also
None




