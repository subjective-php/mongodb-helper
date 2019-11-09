<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\FindOneAndDeleteOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\FindOneAndDeleteOptions
 */
final class FindOneAndDeleteOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'COLLATION' => 'collation',
            'MAX_TIME_MS' => 'maxTimeMS',
            'PROJECTION' => 'projection',
            'SESSION' => 'session',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(FindOneAndDeleteOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
