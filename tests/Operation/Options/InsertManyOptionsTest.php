<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\InsertManyOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\InsertManyOptions
 */
final class InsertManyOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(InsertManyOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
