# Solr Query Builder

**A simple PHP library to build Apache Solr queries**

## Features
- Fluid query-builder API
- Wildcard support
- Fuzzy search
- Integer- and string-range support
- Limit / offset support
- Fully unit-tested
- Solr version support (3 & 4)

## Installation

Use composer:
```bash
composer.phar require swiss-php-friends/solr-query-builder
```

## Usage

The library provides a simple, fluid query builder. E.g.:

```php
use SPF\SolrQueryBuilder\QueryBuilder;

$qb = new QueryBuilder;
$query = $qb->select()
    ->where('text_en', 'foo')
    ->orWhere('text_en', 'bar', QueryInterface::WILDCARD_SURROUNDED)
    ->limit(10)
    ->getQueryString();
```

...or even more conplex with nested queries and fuzzy-search/ranges:

```php
###### TODO ######
```