<?php

namespace SPF\SolrQueryBuilder;

use SPF\SolrQueryBuilder\ValueCreator\ValueCreatorInterface;

/**
 * Class to build solr specific values
 *
 * Used as adapter in QueryBuilder to allow e.g. building a numeric range directly from the qb
 *
 * @see QueryBuilder
 * @package SPF\SolrQueryBuilder
 */
class ValueBuilder implements ValueCreatorInterface
{
    /**
     * @var ValueCreatorInterface
     */
    protected $valueCreator;

    /**
     * {@inheritdoc}
     */
    public function createNumericRange($start, $end)
    {
        return $this->valueCreator->createNumericRange($start, $end);
    }

    /**
     * {@inheritdoc}
     */
    public function createStringRange($start, $end)
    {
        return $this->valueCreator->createStringRange($start, $end);
    }

    /**
     * {@inheritdoc}
     */
    public function createFuzzySearchValue($value, $similarity = 0.8)
    {
        return $this->valueCreator->createFuzzySearchValue($value, $similarity);
    }
} 