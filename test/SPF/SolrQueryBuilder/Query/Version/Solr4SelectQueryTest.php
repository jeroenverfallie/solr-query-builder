<?php

namespace SPF\SolrQueryBuilder\Query\Version;

use SPF\SolrQueryBuilder\Query\QueryInterface;

class Solr4SelectQueryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var QueryInterface
     */
    private $query;

    public function setUp()
    {
        $this->query = new Solr4SelectQuery();
    }

    public function implementsQueryInterface()
    {
        $this->assertInstanceOf('SPF\SolrQueryBuilder\Query\QueryInterface', $this->query);
    }

    public function testWhereWithoutWildcard()
    {
        $this->query->where('my_field_de', 'foo');
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"foo"', $q);
    }

    public function testWhereWithWildcardBefore()
    {
        $this->query->where('my_field_de', 'foo', QueryInterface::WILDCARD_BEFORE);
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"*foo"', $q);
    }

    public function testWhereWithWildcardAfter()
    {
        $this->query->where('my_field_de', 'foo', QueryInterface::WILDCARD_AFTER);
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"foo*"', $q);
    }

    public function testWhereWithWildcardSurrounded()
    {
        $this->query->where('my_field_de', 'foo', QueryInterface::WILDCARD_SURROUNDED);
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"*foo*"', $q);
    }

    public function testWhereWithInvalidWildcard()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\InvalidArgumentException');
        $this->query->where('my_field_de', 'foo', 'sdfs');
    }

    public function testWhereWithInvalidWildcard2()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\InvalidArgumentException');
        $this->query->where('my_field_de', 'foo', 99);
    }

    public function testAndWhere()
    {
        $this->query
            ->where('my_field_de', 'foo', QueryInterface::WILDCARD_SURROUNDED)
            ->andWhere('my_second_field', 'bar');
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"*foo*" AND my_second_field:"bar"', $q);
    }

    public function testOrWhere()
    {
        $this->query
            ->where('my_field_de', 'foo', QueryInterface::WILDCARD_SURROUNDED)
            ->orWhere('my_second_field', 'bar');
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"*foo*" OR my_second_field:"bar"', $q);
    }

    public function testNesting()
    {
        $this->query
            ->nest()
            ->where('my_field_de', 'foo', QueryInterface::WILDCARD_SURROUNDED)
            ->andWhere('my_second_field', 'bar')
            ->endNest()
            ->orWhere('my_third_field', 'baz');
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('( my_field_de:"*foo*" AND my_second_field:"bar" ) OR my_third_field:"baz"', $q);
    }

    public function testInvalidNestingClose()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\Query\NestingException');
        $this->query
            ->endNest();
    }

    public function testMissingNestingClose()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\Query\NestingException');
        $this->query
            ->nest();

        $this->query->getQueryString();
    }

    public function testLimit()
    {
        $this->query
            ->where('my_field_de', 'foo')
            ->setLimit(4);
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"foo" rows:4', $q);
    }

    public function testOffset()
    {
        $this->query
            ->where('my_field_de', 'foo')
            ->setOffset(4);
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"foo" start:4', $q);
    }

    public function testLimitAndOffset()
    {
        $this->query
            ->where('my_field_de', 'foo')
            ->setLimit(4)
            ->setOffset(4);
        $q = $this->query->getQueryString();

        $this->assertInternalType('string', $q);
        $this->assertNotEmpty($q);
        $this->assertEquals('my_field_de:"foo" rows:4 start:4', $q);
    }
}