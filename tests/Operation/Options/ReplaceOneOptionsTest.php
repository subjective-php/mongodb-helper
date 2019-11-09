<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ReplaceOneOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ReplaceOneOptions
 */
final class ReplaceOneOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BYPASS_DOCUMENT_VALIDATION' => 'bypassDocumentValidation',
            'COLLATION' => 'collation',
            'SESSION' => 'session',
            'UPSERT' => 'upsert',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(ReplaceOneOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
