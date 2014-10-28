# Solr Query Builder [![Build Status](https://travis-ci.org/swiss-php-friends/solr-query-builder.svg?branch=master)](https://travis-ci.org/swiss-php-friends/solr-query-builder) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/swiss-php-friends/solr-query-builder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/swiss-php-friends/solr-query-builder/?branch=master) [![Latest Stable Version](https://poser.pugx.org/swiss-php-friends/solr-query-builder/version.svg)](https://packagist.org/packages/swiss-php-friends/solr-query-builder) [![License](https://poser.pugx.org/swiss-php-friends/solr-query-builder/license.svg)](https://packagist.org/packages/swiss-php-friends/solr-query-builder)

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
use SPF\SolrQueryBuilder\Query\QueryInterface

$qb = new QueryBuilder;

// simple wildcard query
$query = $qb->select()
    ->where('text_en', 'foo')
    ->orWhere('text_en', 'bar', QueryInterface::WILDCARD_SURROUNDED)
    ->limit(10)
    ->getQueryString();
    
// nesting
$query = $qb->select()
    ->nest()
        ->where('text_de', 'foo')
        ->andWhere('text_en', 'bar')
    ->endNest()
    ->orWhere('id', 2)
    ->getQueryString();

// value building (e.g. fuzzy-search or ranges)
$query = $qb->select()
    ->where('text_de', $qb->createFuzzySearchValue('foo', 0.7))
    ->orWhere('text_en', $qb->createStringRange('bar', 'baz'))
    ->orWhere('id', $qb->createNumericRange(10, 100))
    ->getQueryString();
```

## Documentation

For a complete function reference [see the API-Docs](http://swiss-php-friends.github.io/solr-query-builder/doc/api/).

The [tests](test/SPF/SolrQueryBuilder) also provide a good overview of the query builder and hot it works.

May the [coverage-report](http://swiss-php-friends.github.io/solr-query-builder/doc/coverage/) provide you with some more information...

## Release Notes

See [GitHub Releases](https://github.com/swiss-php-friends/solr-query-builder/releases)
