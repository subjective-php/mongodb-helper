<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\AggregateOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\AggregateOptions
 */
final class AggregateOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'ALLOW_DISK_USE' => 'allowDiskUse',
            'BATCH_SIZE' => 'batchSize',
            'BYPASS_DOCUMENT_VALIDATION' => 'bypassDocumentValidation',
            'COMMENT' => 'comment',
            'EXPLAIN' => 'explain',
            'HINT' => 'hint',
            'MAX_TIME_MS' => 'maxTimeMS',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SESSION' => 'session',
            'TYPE_MAP' => 'typeMap',
            'USE_CURSOR' => 'useCursor',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(AggregateOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
