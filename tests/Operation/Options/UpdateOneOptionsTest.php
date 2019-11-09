<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\UpdateOneOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\UpdateOneOptions
 */
final class UpdateOneOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'ARRAY_FILTERS' => 'arrayFilters',
            'BYPASS_DOCUMENT_VALIDATION' => 'bypassDocumentValidation',
            'COLLATION' => 'collation',
            'SESSION' => 'session',
            'UPSERT' => 'upsert',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(UpdateOneOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
