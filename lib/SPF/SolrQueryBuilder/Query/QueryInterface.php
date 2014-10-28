<?php

namespace SPF\SolrQueryBuilder\Query;

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
     * @return QueryInterface
     */
    public function nest();

    /**
     * Closes a logically nested part of the query ')'
     *
     * @return QueryInterface
     */
    public function endNest();

    /**
     * Limits results to the given number (rows)
     *
     * @param int $limit
     * @return QueryInterface
     */
    public function setLimit($limit);

    /**
     * Offsets results to the given number (start)
     *
     * @param int $offset
     * @return QueryInterface
     */
    public function setOffset($offset);

    /**
     * Returns a numeric range value
     *
     * @param int $start
     * @param int $end
     * @return string
     */
    public function createNumericRange($start, $end);

    /**
     * Returns a string range value
     *
     * @param string $start
     * @param string $end
     * @return string
     */
    public function createStringRange($start, $end);

    /**
     * Creates a search term to use for fuzzy search (levenstein)
     *
     * @param string $value Must be a single word
     * @param float $similarity Must be between 0 and 1
     * @throws InvalidArgumentException
     * @return string
     */
    public function createFuzzySearchValue($value, $similarity = 0.8);

    /**
     * Returns the build solr query as a string
     *
     * @return string
     */
    public function getQueryString();
} 