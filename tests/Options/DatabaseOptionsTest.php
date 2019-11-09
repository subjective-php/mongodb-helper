<?php

namespace SubjectivePHPTest\MongoDB\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Options\DatabaseOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Options\DatabaseOptions
 */
final class DatabaseOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(DatabaseOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
