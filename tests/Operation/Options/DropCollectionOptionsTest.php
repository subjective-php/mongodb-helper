<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DropCollectionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DropCollectionOptions
 */
final class DropCollectionOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(DropCollectionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
