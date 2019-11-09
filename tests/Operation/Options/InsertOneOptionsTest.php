<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\InsertOneOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\InsertOneOptions
 */
final class InsertOneOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BYPASS_DOCUMENT_VALIDATION' => 'bypassDocumentValidation',
            'SESSION' => 'session',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(InsertOneOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
