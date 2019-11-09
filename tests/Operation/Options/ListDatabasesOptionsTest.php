<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ListDatabasesOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ListDatabasesOptions
 */
final class ListDatabasesOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(ListDatabasesOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
