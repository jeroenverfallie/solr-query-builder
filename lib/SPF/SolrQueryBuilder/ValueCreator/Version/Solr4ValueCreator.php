<?php

namespace SPF\SolrQueryBuilder\ValueCreator\Version;

use SPF\SolrQueryBuilder\ValueCreator\AbstractValueCreator;
use SPF\SolrQueryBuilder\ValueCreator\ValueCreatorInterface;

/**
 * @package SPF\SolrQueryBuilder\ValueCreator\Version
 */
class Solr4ValueCreator extends AbstractValueCreator implements ValueCreatorInterface
{
    protected $whitspace = ' ';

    protected $numericRangeOpenTag = '[';

    protected $numericRangeCloseTag = ']';

    protected $numericRangeOperator = 'TO';

    protected $stringRageOpenTag = '{';

    protected $stringRangeCloseTag = '}';

    protected $stringRangeOperator = 'TO';

    protected $fuzzySearchOperator = '~';
} 