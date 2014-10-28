# Solr Query Builder [![Build Status](https://travis-ci.org/swiss-php-friends/solr-query-builder.svg?branch=master)](https://travis-ci.org/swiss-php-friends/solr-query-builder)

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

## Documentation

For a complete function reference [see the API-Docs](http://swiss-php-friends.github.io/solr-query-builder/doc/api/).

The [tests](test/SPF/SolrQueryBuilder) also provide a good overview of the query builder and hot it works.

May the [coverage-report](http://swiss-php-friends.github.io/solr-query-builder/doc/coverage/) provide you with some more information...
