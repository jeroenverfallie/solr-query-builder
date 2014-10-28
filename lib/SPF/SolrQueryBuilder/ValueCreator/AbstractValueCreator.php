<?php

namespace SPF\SolrQueryBuilder\ValueCreator;

use SPF\SolrQueryBuilder\InvalidArgumentException;

/**
 * @package SPF\SolrQueryBuilder\ValueCreator
 */
abstract class AbstractValueCreator implements ValueCreatorInterface
{
    protected $whitspace = ' ';

    protected $numericRangeOpenTag = '[';

    protected $numericRangeCloseTag = ']';

    protected $numericRangeOperator = 'TO';

    protected $stringRageOpenTag = '{';

    protected $stringRangeCloseTag = '}';

    protected $stringRangeOperator = 'TO';

    protected $fuzzySearchOperator = '~';

    /**
     * {@inheritdoc}
     */
    public function createNumericRange($start, $end)
    {
        return $this->numericRangeOpenTag .
        intval($start, 10) .
        $this->whitspace .
        $this->numericRangeOperator .
        $this->whitspace .
        intval($end, 10) .
        $this->numericRangeCloseTag;
    }

    /**
     * {@inheritdoc}
     */
    public function createStringRange($start, $end)
    {
        return $this->stringRageOpenTag .
        (string)$start .
        $this->whitspace .
        $this->stringRangeOperator .
        $this->whitspace .
        (string)$end .
        $this->stringRangeCloseTag;
    }

    /**
     * {@inheritdoc}
     */
    public function createFuzzySearchValue($value, $similarity = 0.8)
    {
        if (!is_float($similarity)) {
            throw new InvalidArgumentException('Parameter $similarity must be a float!');
        }

        if ($similarity > 1 OR $similarity < 0) {
            throw new InvalidArgumentException('Parameter $similarity must be between 0 and 1!');
        }

        return strval($value) . $this->fuzzySearchOperator . $similarity;
    }
} 