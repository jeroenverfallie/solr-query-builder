<?php

namespace SPF\SolrQueryBuilder\Query;

use SPF\SolrQueryBuilder\InvalidArgumentException;

/**
 * Abstract class for SelectQuery
 * Override the operator/tag variables in a subclas on version changes
 *
 * @package SPF\SolrQueryBuilder\Query
 */
abstract class AbstractSelectQuery implements QueryInterface
{
    protected $whitspace = ' ';

    protected $wildcard = '*';

    protected $logicalAndOperator = 'AND';

    protected $logicalOrOperator = 'OR';

    protected $nestingOpenTag = '(';

    protected $nestingCloseTag = ')';

    protected $limitOperator = 'rows:';

    protected $offsetOperator = 'start:';

    /**
     * @var array
     */
    protected $parts = array();

    /**
     * @var int
     */
    protected $limit = null;

    /**
     * @var int
     */
    protected $offset = null;

    /**
     * @var int
     */
    protected $nestingCounter = 0;

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->getQueryString();
    }

    /**
     * {@inheritdoc}
     */
    public function where($field, $value, $wildcard = QueryInterface::WILDCARD_NONE)
    {
        if (!is_int($wildcard)) {
            throw new InvalidArgumentException(sprintf('Invalid wildcard type &s!', $wildcard));
        }

        switch ($wildcard) {
            case QueryInterface::WILDCARD_BEFORE:
                $value = $this->wildcard . $value;
                break;
            case QueryInterface::WILDCARD_AFTER:
                $value = $value . $this->wildcard;
                break;
            case QueryInterface::WILDCARD_SURROUNDED:
                $value = $this->wildcard . $value . $this->wildcard;
                break;
            case QueryInterface::WILDCARD_NONE:
                break;
            default:
                throw new InvalidArgumentException(sprintf('Invalid wildcard type &s!', $wildcard));
        }

        $this->parts[] = sprintf('%s:"%s"', $field, $value);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function andWhere($field, $value, $wildcard = self::WILDCARD_NONE)
    {
        $this->parts[] = $this->logicalAndOperator;

        return $this->where($field, $value, $wildcard);
    }

    /**
     * {@inheritdoc}
     */
    public function orWhere($field, $value, $wildcard = self::WILDCARD_NONE)
    {
        $this->parts[] = $this->logicalOrOperator;

        return $this->where($field, $value, $wildcard);
    }

    /**
     * {@inheritdoc}
     */
    public function nest()
    {
        $this->parts[] = $this->nestingOpenTag;

        $this->nestingCounter++;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function endNest()
    {
        if ($this->nestingCounter < 1) {
            throw new NestingException('Please open a nested query before you close one!');
        }

        $this->parts[] = $this->nestingCloseTag;

        $this->nestingCounter--;

        return $this;
    }

    /**
     * Limits results to the given number (rows)
     *
     * @param int $limit
     * @return QueryInterface
     */
    public function setLimit($limit)
    {
        $this->limit = intval($limit, 10);

        return $this;
    }

    /**
     * Offsets results to the given number (start)
     *
     * @param int $offset
     * @return QueryInterface
     */
    public function setOffset($offset)
    {
        $this->offset = intval($offset, 10);

        return $this;
    }

    /**
     * @return string
     */
    public function getQueryString()
    {
        $this->validate();

        $q = '';

        foreach ($this->parts as $i => $part) {
            $q .= $part;

            if (($i + 1) !== count($this->parts)) {
                $q .= $this->whitspace;
            }
        }

        // set limit
        if (!is_null($this->limit)) {
            $q .= $this->whitspace . $this->limitOperator . $this->limit;
        }

        // set offset
        if (!is_null($this->offset)) {
            $q .= $this->whitspace . $this->offsetOperator . $this->offset;
        }

        return (string)$q;
    }

    /**
     * @throws NestingException
     */
    protected function validate()
    {
        if($this->nestingCounter > 0) {
            throw new NestingException('Found a nested query which is never closed. Please fix!');
        }

        if($this->nestingCounter < 0) {
            throw new NestingException('Found a closing nested query which was never opened. Please fix!');
        }
    }
} 