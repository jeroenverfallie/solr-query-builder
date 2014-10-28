<?php

namespace SPF\SolrQueryBuilder\Query\Version;

use SPF\SolrQueryBuilder\Query\AbstractSelectQuery;
use SPF\SolrQueryBuilder\Query\QueryInterface;

class Solr3SelectQuery extends AbstractSelectQuery implements QueryInterface
{
    //TODO: find differences between version 3 and 4

    protected $whitspace = ' ';

    protected $wildcard = '*';

    protected $logicalAndOperator = 'AND';

    protected $logicalOrOperator = 'OR';

    protected $nestingOpenTag = '(';

    protected $nestingCloseTag = ')';

    protected $numericRangeOpenTag = '[';

    protected $numericRangeCloseTag = ']';

    protected $numericRangeOperator = 'TO';

    protected $stringRageOpenTag = '{';

    protected $stringRangeCloseTag = '}';

    protected $stringRangeOperator = 'TO';

    protected $fuzzySearchOperator = '~';
} 