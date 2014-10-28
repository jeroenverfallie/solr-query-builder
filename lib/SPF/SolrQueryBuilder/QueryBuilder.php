<?php

namespace SPF\SolrQueryBuilder;

use SPF\SolrQueryBuilder\Query\QueryInterface;
use SPF\SolrQueryBuilder\Query\Version as QueryVersion;
use SPF\SolrQueryBuilder\ValueCreator\ValueCreatorInterface;
use SPF\SolrQueryBuilder\ValueCreator\Version as ValueCreatorVersion;

/**
 * @package SPF\SolrQueryBuilder
 */
class QueryBuilder extends ValueBuilder implements QueryBuilderInterface
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

        //TODO: remove duplicated switch for version management
        switch ($this->version) {
            case self::VERSION_3:
                $this->valueCreator = new ValueCreatorVersion\Solr3ValueCreator();
                break;
            case self::VERSION_4:
                $this->valueCreator = new ValueCreatorVersion\Solr4ValueCreator();
                break;
            default:
                throw new UnsupportedVersionException(
                    sprintf('Version %s is not supported (yet)', $this->version)
                );
                break;
        }

        if (!$this->valueCreator instanceof ValueCreatorInterface) {
            throw new \LogicException('ValueCreator must implement ValueCreatorInterface!');
        }
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
                $query = new QueryVersion\Solr3SelectQuery();
                break;
            case self::VERSION_4:
                $query = new QueryVersion\Solr4SelectQuery();
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