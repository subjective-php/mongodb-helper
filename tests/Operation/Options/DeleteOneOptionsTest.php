<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DeleteOneOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DeleteOneOptions
 */
final class DeleteOneOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'COLLATION' => 'collation',
            'SESSION' => 'session',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(DeleteOneOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
