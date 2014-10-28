<?php

namespace SPF\SolrQueryBuilder;


class QueryBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $qb = new QueryBuilder();
        $this->assertInstanceOf('SPF\SolrQueryBuilder\QueryBuilderInterface', $qb);
        $this->assertInstanceOf('SPF\SolrQueryBuilder\QueryBuilder', $qb);
    }

    public function testSelect()
    {
        $qb = new QueryBuilder();
        $query = $qb->select();

        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\QueryInterface', $query);
        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\Version\Solr4SelectQuery', $query);
    }

    public function testSelectVersion3()
    {
        $qb = new QueryBuilder(QueryBuilderInterface::VERSION_3);
        $query = $qb->select();

        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\QueryInterface', $query);
        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\Version\Solr3SelectQuery', $query);
    }

    public function testSelectVersion4()
    {
        $qb = new QueryBuilder(QueryBuilderInterface::VERSION_4);
        $query = $qb->select();

        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\QueryInterface', $query);
        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\Version\Solr4SelectQuery', $query);
    }

    public function testSelectWithInvalidVersion()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\UnsupportedVersionException');
        $qb = new QueryBuilder(999);
        $qb->select();
    }

    public function testCreateNumericRange()
    {
        $qb = new QueryBuilder();
        $value = $qb->createNumericRange(10, 100);

        $this->assertInternalType('string', $value);
    }

    public function testCreateStringRange()
    {
        $qb = new QueryBuilder();
        $value = $qb->createStringRange('foo', 'bar');

        $this->assertInternalType('string', $value);
    }

    public function testCreateFuzzySearchValue()
    {
        $qb = new QueryBuilder();
        $value = $qb->createFuzzySearchValue('foo', 0.5);

        $this->assertInternalType('string', $value);
    }
} 