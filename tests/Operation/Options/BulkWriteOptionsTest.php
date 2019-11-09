<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\BulkWriteOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\BulkWriteOptions
 */
final class BulkWriteOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BYPASS_DOCUMENT_VALIDATION' => 'bypassDocumentValidation',
            'ORDERED' => 'ordered',
            'SESSION' => 'session',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(BulkWriteOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
