<?php

namespace SPF\SolrQueryBuilder\Query\Version;

use SPF\SolrQueryBuilder\Query\AbstractSelectQuery;
use SPF\SolrQueryBuilder\Query\QueryInterface;

/**
 * @package SPF\SolrQueryBuilder\Query\Version
 */
class Solr4SelectQuery extends AbstractSelectQuery implements QueryInterface
{
    protected $whitspace = ' ';

    protected $wildcard = '*';

    protected $logicalAndOperator = 'AND';

    protected $logicalOrOperator = 'OR';

    protected $nestingOpenTag = '(';

    protected $nestingCloseTag = ')';

    protected $limitOperator = 'rows:';

    protected $offsetOperator = 'start:';
} 