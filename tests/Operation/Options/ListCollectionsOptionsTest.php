<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ListCollectionsOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ListCollectionsOptions
 */
final class ListCollectionsOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'FILTER' => 'filter',
            'MAX_TIME_MS' => 'maxTimeMS',
            'SESSION' => 'session',
        ];

        $actual = (new ReflectionClass(ListCollectionsOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
