<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\MapReduceOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\MapReduceOptions
 */
final class MapReduceOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BYPASS_DOCUMENT_VALIDATION' => 'bypassDocumentValidation',
            'COLLATION' => 'collation',
            'FINALIZE' => 'finalize',
            'JS_MODE' => 'jsMode',
            'LIMIT' => 'limit',
            'MAX_TIME_MS' => 'maxTimeMS',
            'QUERY' => 'query',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SCOPE' => 'scope',
            'SESSION' => 'session',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
            'VERBOSE' => 'verbose',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(MapReduceOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
