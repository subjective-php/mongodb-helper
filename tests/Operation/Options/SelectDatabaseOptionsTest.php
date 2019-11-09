<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\SelectDatabaseOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\SelectDatabaseOptions
 */
final class SelectDatabaseOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(SelectDatabaseOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
