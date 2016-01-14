<?php

namespace SPF\SolrQueryBuilder\Query;

use SPF\SolrQueryBuilder\InvalidArgumentException;

/**
 * @package SPF\SolrQueryBuilder\Query
 */
interface QueryInterface
{
    const WILDCARD_NONE = 0;

    const WILDCARD_BEFORE = 1;

    const WILDCARD_AFTER = 2;

    const WILDCARD_SURROUNDED = 3;

    /**
     * Returns the string representation of the query
     *
     * @return string
     */
    public function __toString();

    /**
     * Adds a where clause
     *
     * @api
     * @param string $field
     * @param string $value
     * @param int $wildcard
     * @throws InvalidArgumentException
     * @return QueryInterface
     */
    public function where($field, $value, $wildcard = self::WILDCARD_NONE);

    /**
     * Adds a where clause using a logical 'and' operator
     *
     * @api
     * @param string $field
     * @param string $value
     * @param int $wildcard
     * @throws InvalidArgumentException
     * @return QueryInterface
     */
    public function andWhere($field, $value, $wildcard = self::WILDCARD_NONE);

    /**
     * Adds a where clause using a logical 'or' operator
     *
     * @api
     * @param string $field
     * @param string $value
     * @param int $wildcard
     * @throws InvalidArgumentException
     * @return QueryInterface
     */
    public function orWhere($field, $value, $wildcard = self::WILDCARD_NONE);

    /**
     * Opens a logically nested part of the query '('
     *
     * @api
     * @return QueryInterface
     */
    public function nest();

    /**
     * Closes a logically nested part of the query ')'
     *
     * @api
     * @return QueryInterface
     */
    public function endNest();

    /**
     * Opens a logically nested part of the query '(' preceded by a logical 'and' operator
     *
     * @api
     * @return QueryInterface
     */
    public function andNest();

    /**
     * Opens a logically nested part of the query '(' preceded by a logical 'or' operator
     *
     * @api
     * @return QueryInterface
     */
    public function orNest();

    /**
     * Returns the build solr query as a string
     *
     * @api
     * @return string
     */
    public function getQueryString();
}
