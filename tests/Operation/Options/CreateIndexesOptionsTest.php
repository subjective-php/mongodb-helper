<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\CreateIndexesOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\CreateIndexesOptions
 */
final class CreateIndexesOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'MAX_TIME_MS' => 'maxTimeMS',
            'SESSION' => 'session',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(CreateIndexesOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
