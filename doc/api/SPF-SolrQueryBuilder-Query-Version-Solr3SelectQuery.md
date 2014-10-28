SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery
===============

Abstract class for SelectQuery

Override the operator/tag variables in a subclas on version changes


* Class name: Solr3SelectQuery
* Namespace: SPF\SolrQueryBuilder\Query\Version
* Parent class: [SPF\SolrQueryBuilder\Query\AbstractSelectQuery](SPF-SolrQueryBuilder-Query-AbstractSelectQuery.md)
* This class implements: [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)




Properties
----------


### $whitspace

```
protected mixed $whitspace = ' '
```





* Visibility: **protected**


### $wildcard

```
protected mixed $wildcard = '*'
```





* Visibility: **protected**


### $logicalAndOperator

```
protected mixed $logicalAndOperator = 'AND'
```





* Visibility: **protected**


### $logicalOrOperator

```
protected mixed $logicalOrOperator = 'OR'
```





* Visibility: **protected**


### $nestingOpenTag

```
protected mixed $nestingOpenTag = '('
```





* Visibility: **protected**


### $nestingCloseTag

```
protected mixed $nestingCloseTag = ')'
```





* Visibility: **protected**


### $numericRangeOpenTag

```
protected mixed $numericRangeOpenTag = '['
```





* Visibility: **protected**


### $numericRangeCloseTag

```
protected mixed $numericRangeCloseTag = ']'
```





* Visibility: **protected**


### $numericRangeOperator

```
protected mixed $numericRangeOperator = 'TO'
```





* Visibility: **protected**


### $stringRageOpenTag

```
protected mixed $stringRageOpenTag = '{'
```





* Visibility: **protected**


### $stringRangeCloseTag

```
protected mixed $stringRangeCloseTag = '}'
```





* Visibility: **protected**


### $stringRangeOperator

```
protected mixed $stringRangeOperator = 'TO'
```





* Visibility: **protected**


### $fuzzySearchOperator

```
protected mixed $fuzzySearchOperator = '~'
```





* Visibility: **protected**


### $limitOperator

```
protected mixed $limitOperator = 'rows:'
```





* Visibility: **protected**


### $offsetOperator

```
protected mixed $offsetOperator = 'start:'
```





* Visibility: **protected**


### $parts

```
protected array $parts = array()
```





* Visibility: **protected**


### $limit

```
protected integer $limit = null
```





* Visibility: **protected**


### $offset

```
protected integer $offset = null
```





* Visibility: **protected**


### $nestingCounter

```
protected integer $nestingCounter
```





* Visibility: **protected**


Methods
-------


### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::__toString()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::__toString()()
```

Returns the string representation of the query



* Visibility: **public**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::where()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::where()($field, $value, $wildcard)
```

Adds a where clause



* Visibility: **public**

#### Arguments

* $field **mixed**
* $value **mixed**
* $wildcard **mixed**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::andWhere()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::andWhere()($field, $value, $wildcard)
```

Adds a where clause using a logical 'and' operator



* Visibility: **public**

#### Arguments

* $field **mixed**
* $value **mixed**
* $wildcard **mixed**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::orWhere()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::orWhere()($field, $value, $wildcard)
```

Adds a where clause using a logical 'or' operator



* Visibility: **public**

#### Arguments

* $field **mixed**
* $value **mixed**
* $wildcard **mixed**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::nest()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::nest()()
```

Opens a logically nested part of the query '('



* Visibility: **public**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::endNest()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::endNest()()
```

Closes a logically nested part of the query ')'



* Visibility: **public**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::setLimit()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::setLimit()(integer $limit)
```

Limits results to the given number (rows)



* Visibility: **public**

#### Arguments

* $limit **integer**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::setOffset()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::setOffset()(integer $offset)
```

Offsets results to the given number (start)



* Visibility: **public**

#### Arguments

* $offset **integer**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::createNumericRange()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::createNumericRange()($start, $end)
```

Returns a numeric range value



* Visibility: **public**

#### Arguments

* $start **mixed**
* $end **mixed**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::createStringRange()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::createStringRange()($start, $end)
```

Returns a string range value



* Visibility: **public**

#### Arguments

* $start **mixed**
* $end **mixed**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::createFuzzySearchValue()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::createFuzzySearchValue()($value, $similarity)
```

Creates a search term to use for fuzzy search (levenstein)



* Visibility: **public**

#### Arguments

* $value **mixed**
* $similarity **mixed**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::getQueryString()

```
string SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::getQueryString()()
```

Returns the build solr query as a string



* Visibility: **public**



### \SPF\SolrQueryBuilder\Query\AbstractSelectQuery::validate()

```
mixed SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery::\SPF\SolrQueryBuilder\Query\AbstractSelectQuery::validate()()
```





* Visibility: **protected**



### \SPF\SolrQueryBuilder\Query\QueryInterface::__toString()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::__toString()()
```

Returns the string representation of the query



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)



### \SPF\SolrQueryBuilder\Query\QueryInterface::where()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::where()(string $field, string $value, integer $wildcard)
```

Adds a where clause



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $field **string**
* $value **string**
* $wildcard **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::andWhere()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::andWhere()(string $field, string $value, integer $wildcard)
```

Adds a where clause using a logical 'and' operator



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $field **string**
* $value **string**
* $wildcard **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::orWhere()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::orWhere()(string $field, string $value, integer $wildcard)
```

Adds a where clause using a logical 'or' operator



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $field **string**
* $value **string**
* $wildcard **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::nest()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::nest()()
```

Opens a logically nested part of the query '('



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)



### \SPF\SolrQueryBuilder\Query\QueryInterface::endNest()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::endNest()()
```

Closes a logically nested part of the query ')'



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)



### \SPF\SolrQueryBuilder\Query\QueryInterface::setLimit()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::setLimit()(integer $limit)
```

Limits results to the given number (rows)



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $limit **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::setOffset()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::setOffset()(integer $offset)
```

Offsets results to the given number (start)



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $offset **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::createNumericRange()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::createNumericRange()(integer $start, integer $end)
```

Returns a numeric range value



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $start **integer**
* $end **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::createStringRange()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::createStringRange()(string $start, string $end)
```

Returns a string range value



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $start **string**
* $end **string**



### \SPF\SolrQueryBuilder\Query\QueryInterface::createFuzzySearchValue()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::createFuzzySearchValue()(string $value, float $similarity)
```

Creates a search term to use for fuzzy search (levenstein)



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)

#### Arguments

* $value **string** - &lt;p&gt;Must be a single word&lt;/p&gt;
* $similarity **float** - &lt;p&gt;Must be between 0 and 1&lt;/p&gt;



### \SPF\SolrQueryBuilder\Query\QueryInterface::getQueryString()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::getQueryString()()
```

Returns the build solr query as a string



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\Query\QueryInterface](SPF-SolrQueryBuilder-Query-QueryInterface.md)


