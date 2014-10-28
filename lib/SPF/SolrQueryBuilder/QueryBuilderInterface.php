<?php

namespace SPF\SolrQueryBuilder;

use SPF\SolrQueryBuilder\Query\QueryInterface;

interface QueryBuilderInterface
{
    const VERSION_3 = 3;

    const VERSION_4 = 4;

    /**
     * Sets the Solr version to use
     *
     * @param int $version
     * @return QueryBuilderInterface
     */
    public function setVersion($version);

    /**
     * Creates and returns a solr select query
     *
     * @throws \SPF\SolrQueryBuilder\Solr\UnsupportedVersionException
     * @throws \LogicException
     * @return QueryInterface
     */
    public function select();
} 