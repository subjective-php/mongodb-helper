<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DistinctOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DistinctOptions
 */
final class DistinctOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'COLLATION' => 'collation',
            'MAX_TIME_MS' => 'maxTimeMS',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SESSION' => 'session',
            'TYPE_MAP' => 'typeMap',
        ];

        $actual = (new ReflectionClass(DistinctOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
