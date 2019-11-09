<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DropIndexesOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DropIndexesOptions
 */
final class DropIndexesOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'MAX_TIME_MS' => 'maxTimeMS',
            'SESSION' => 'session',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(DropIndexesOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
