SPF\SolrQueryBuilder\QueryBuilder
===============






* Class name: QueryBuilder
* Namespace: SPF\SolrQueryBuilder
* This class implements: [SPF\SolrQueryBuilder\QueryBuilderInterface](SPF-SolrQueryBuilder-QueryBuilderInterface.md)




Properties
----------


### $version

```
private integer $version
```





* Visibility: **private**


Methods
-------


### \SPF\SolrQueryBuilder\QueryBuilder::__construct()

```
mixed SPF\SolrQueryBuilder\QueryBuilder::\SPF\SolrQueryBuilder\QueryBuilder::__construct()(integer $version)
```





* Visibility: **public**

#### Arguments

* $version **integer** - &lt;p&gt;The version of the Solr server you send those query to&lt;/p&gt;



### \SPF\SolrQueryBuilder\QueryBuilder::setVersion()

```
mixed SPF\SolrQueryBuilder\QueryBuilder::\SPF\SolrQueryBuilder\QueryBuilder::setVersion()($version)
```

Sets the Solr version to use



* Visibility: **public**

#### Arguments

* $version **mixed**



### \SPF\SolrQueryBuilder\QueryBuilder::select()

```
mixed SPF\SolrQueryBuilder\QueryBuilder::\SPF\SolrQueryBuilder\QueryBuilder::select()()
```

Creates and returns a solr select query



* Visibility: **public**



### \SPF\SolrQueryBuilder\QueryBuilderInterface::setVersion()

```
\SPF\SolrQueryBuilder\QueryBuilderInterface SPF\SolrQueryBuilder\QueryBuilderInterface::\SPF\SolrQueryBuilder\QueryBuilderInterface::setVersion()(integer $version)
```

Sets the Solr version to use



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\QueryBuilderInterface](SPF-SolrQueryBuilder-QueryBuilderInterface.md)

#### Arguments

* $version **integer**



### \SPF\SolrQueryBuilder\QueryBuilderInterface::select()

```
\SPF\SolrQueryBuilder\Query\QueryInterface SPF\SolrQueryBuilder\QueryBuilderInterface::\SPF\SolrQueryBuilder\QueryBuilderInterface::select()()
```

Creates and returns a solr select query



* Visibility: **public**
* This method is defined by [SPF\SolrQueryBuilder\QueryBuilderInterface](SPF-SolrQueryBuilder-QueryBuilderInterface.md)


