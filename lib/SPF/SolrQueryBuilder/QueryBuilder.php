<?php

namespace SPF\SolrQueryBuilder;

use SPF\SolrQueryBuilder\Query\QueryInterface;
use SPF\SolrQueryBuilder\Query\Version;

class QueryBuilder implements QueryBuilderInterface
{
    /**
     * @var int
     */
    private $version;

    /**
     * @param int $version The version of the Solr server you send those query to
     */
    public function __construct($version = self::VERSION_4)
    {
        $this->setVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * {@inheritdoc}
     */
    public function select()
    {
        switch ($this->version) {
            case self::VERSION_3:
                $query = new Version\Solr3SelectQuery();
                break;
            case self::VERSION_4:
                $query = new Version\Solr4SelectQuery();
                break;
            default:
                throw new UnsupportedVersionException(
                    sprintf('Version %s is not supported (yet)', $this->version)
                );
                break;
        }

        if (!$query instanceof QueryInterface) {
            throw new \LogicException('Query must implement QueryInterface!');
        }

        return $query;
    }
} 