SPF\SolrQueryBuilder\Query\QueryInterface
===============






* Interface name: QueryInterface
* Namespace: SPF\SolrQueryBuilder\Query
* This is an **interface**


Constants
----------


### WILDCARD_NONE

```
const WILDCARD_NONE = 0
```





### WILDCARD_BEFORE

```
const WILDCARD_BEFORE = 1
```





### WILDCARD_AFTER

```
const WILDCARD_AFTER = 2
```





### WILDCARD_SURROUNDED

```
const WILDCARD_SURROUNDED = 3
```







Methods
-------


### \SPF\SolrQueryBuilder\Query\QueryInterface::__toString()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::__toString()()
```

Returns the string representation of the query



* Visibility: **public**



### \SPF\SolrQueryBuilder\Query\QueryInterface::where()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::where()(string $field, string $value, integer $wildcard)
```

Adds a where clause



* Visibility: **public**

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



### \SPF\SolrQueryBuilder\Query\QueryInterface::endNest()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::endNest()()
```

Closes a logically nested part of the query ')'



* Visibility: **public**



### \SPF\SolrQueryBuilder\Query\QueryInterface::setLimit()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::setLimit()(integer $limit)
```

Limits results to the given number (rows)



* Visibility: **public**

#### Arguments

* $limit **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::setOffset()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::setOffset()(integer $offset)
```

Offsets results to the given number (start)



* Visibility: **public**

#### Arguments

* $offset **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::createNumericRange()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::createNumericRange()(integer $start, integer $end)
```

Returns a numeric range value



* Visibility: **public**

#### Arguments

* $start **integer**
* $end **integer**



### \SPF\SolrQueryBuilder\Query\QueryInterface::createStringRange()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::createStringRange()(string $start, string $end)
```

Returns a string range value



* Visibility: **public**

#### Arguments

* $start **string**
* $end **string**



### \SPF\SolrQueryBuilder\Query\QueryInterface::createFuzzySearchValue()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::createFuzzySearchValue()(string $value, float $similarity)
```

Creates a search term to use for fuzzy search (levenstein)



* Visibility: **public**

#### Arguments

* $value **string** - &lt;p&gt;Must be a single word&lt;/p&gt;
* $similarity **float** - &lt;p&gt;Must be between 0 and 1&lt;/p&gt;



### \SPF\SolrQueryBuilder\Query\QueryInterface::getQueryString()

```
string SPF\SolrQueryBuilder\Query\QueryInterface::\SPF\SolrQueryBuilder\Query\QueryInterface::getQueryString()()
```

Returns the build solr query as a string



* Visibility: **public**


