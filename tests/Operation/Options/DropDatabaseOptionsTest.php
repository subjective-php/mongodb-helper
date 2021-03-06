<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DropDatabaseOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DropDatabaseOptions
 */
final class DropDatabaseOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'SESSION' => 'session',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(DropDatabaseOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
