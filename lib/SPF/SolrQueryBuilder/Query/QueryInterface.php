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
     * Limits results to the given number (rows)
     *
     * @api
     * @param int $limit
     * @return QueryInterface
     */
    public function setLimit($limit);

    /**
     * Offsets results to the given number (start)
     *
     * @api
     * @param int $offset
     * @return QueryInterface
     */
    public function setOffset($offset);

    /**
     * Returns the build solr query as a string
     *
     * @api
     * @return string
     */
    public function getQueryString();
} 