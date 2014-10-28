<?php

namespace SPF\SolrQueryBuilder\ValueCreator;

use SPF\SolrQueryBuilder\InvalidArgumentException;

/**
 * @package SPF\SolrQueryBuilder\ValueCreator
 */
interface ValueCreatorInterface
{
    /**
     * Returns a numeric range value
     *
     * @api
     * @param int $start
     * @param int $end
     * @return string
     */
    public function createNumericRange($start, $end);

    /**
     * Returns a string range value
     *
     * @api
     * @param string $start
     * @param string $end
     * @return string
     */
    public function createStringRange($start, $end);

    /**
     * Creates a search term to use for fuzzy search (levenstein)
     *
     * @api
     * @param string $value Must be a single word
     * @param float $similarity Must be between 0 and 1
     * @throws InvalidArgumentException
     * @return string
     */
    public function createFuzzySearchValue($value, $similarity = 0.8);
} 