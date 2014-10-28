<?php

namespace SPF\SolrQueryBuilder;


class ValueBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementsValueCretorInterface()
    {
        $valueBuilder = new ValueBuilder();

        $this->assertInstanceOf('SPF\SolrQueryBuilder\ValueCreator\ValueCreatorInterface', $valueBuilder);
    }
}