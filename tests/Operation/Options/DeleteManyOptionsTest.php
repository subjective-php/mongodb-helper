<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\DeleteManyOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\DeleteManyOptions
 */
final class DeleteManyOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(DeleteManyOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
