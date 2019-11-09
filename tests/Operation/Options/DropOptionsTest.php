<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DropOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DropOptions
 */
final class DropOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(DropOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
