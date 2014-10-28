<?php

namespace SPF\SolrQueryBuilder\ValueCreator;

use SPF\SolrQueryBuilder\ValueCreator\Version\Solr4ValueCreator;

class Solr4ValueCreatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Solr4ValueCreator
     */
    private $valueCreator;

    public function setUp()
    {
        $this->valueCreator = new Solr4ValueCreator();
    }

    public function testCreateNumericRange()
    {
        $value = $this->valueCreator->createNumericRange(10, 100);

        $this->assertInternalType('string', $value);
        $this->assertNotEmpty($value);
        $this->assertEquals('[10 TO 100]', $value);
    }

    public function testCreateStringRange()
    {

        $value = $this->valueCreator->createStringRange('foo', 'bar');

        $this->assertInternalType('string', $value);
        $this->assertNotEmpty($value);
        $this->assertEquals('{foo TO bar}', $value);
    }

    public function testCreateFuzzySearchValue()
    {
        $value = $this->valueCreator->createFuzzySearchValue('foo');

        $this->assertInternalType('string', $value);
        $this->assertNotEmpty($value);
        $this->assertEquals('foo~0.8', $value);

        $value = $this->valueCreator->createFuzzySearchValue('foo', 0.4);

        $this->assertInternalType('string', $value);
        $this->assertNotEmpty($value);
        $this->assertEquals('foo~0.4', $value);
    }

    public function testCreateFuzzySearchValueWithInvalidSimilarity()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\InvalidArgumentException');

        $this->valueCreator->createFuzzySearchValue('foo', 5);
    }

    public function testCreateFuzzySearchValueWithInvalidSimilarity2()
    {
        $this->setExpectedException('SPF\SolrQueryBuilder\InvalidArgumentException');

        $this->valueCreator->createFuzzySearchValue('foo', 'almost');
    }
}