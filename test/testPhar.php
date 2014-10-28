<?php

include 'phar://' . __DIR__ . '/../build/solr-query-builder.phar/vendor/autoload.php';

$qb = new SPF\SolrQueryBuilder\QueryBuilder;

// simple wildcard query
$query = $qb->select()
    ->where('text_en', 'foo')
    ->orWhere('text_en', 'bar', SPF\SolrQueryBuilder\Query\QueryInterface::WILDCARD_SURROUNDED)
    ->setLimit(10)
    ->getQueryString();

var_dump($query);

// nesting
$query = $qb->select()
    ->nest()
    ->where('text_de', 'foo')
    ->andWhere('text_en', 'bar')
    ->endNest()
    ->orWhere('id', 2)
    ->getQueryString();

var_dump($query);

// value building (e.g. fuzzy-search or ranges)
$query = $qb->select()
    ->where('text_de', $qb->createFuzzySearchValue('foo', 0.7))
    ->orWhere('text_en', $qb->createStringRange('bar', 'baz'))
    ->orWhere('id', $qb->createNumericRange(10, 100))
    ->getQueryString();

var_dump($query);