<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ListIndexesOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ListIndexesOptions
 */
final class ListIndexesOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'MAX_TIME_MS' => 'maxTimeMS',
            'SESSION' => 'session',
        ];

        $actual = (new ReflectionClass(ListIndexesOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
