<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\CountOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\CountOptions
 */
final class CountOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'COLLATION' => 'collation',
            'HINT' => 'hint',
            'LIMIT' => 'limit',
            'MAX_TIME_MS' => 'maxTimeMS',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SESSION' => 'session',
            'SKIP' => 'skip',
        ];

        $actual = (new ReflectionClass(CountOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
