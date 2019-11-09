<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\FindOneAndReplaceOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\FindOneAndReplaceOptions
 */
final class FindOneAndReplaceOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
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

        $actual = (new ReflectionClass(FindOneAndReplaceOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
