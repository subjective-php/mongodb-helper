<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\FindOneAndUpdateOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\FindOneAndUpdateOptions
 */
final class FindOneAndUpdateOptionsTest extends TestCase
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
            'MAX_TIME_MS' => 'maxTimeMS',
            'PROJECTION' => 'projection',
            'RETURN_DOCUMENT' => 'returnDocument',
            'SESSION' => 'session',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
            'UPSERT' => 'upsert',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(FindOneAndUpdateOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
