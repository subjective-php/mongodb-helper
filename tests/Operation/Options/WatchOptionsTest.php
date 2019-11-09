<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\WatchOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\WatchOptions
 */
final class WatchOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BATCH_SIZE' => 'batchSize',
            'COLLATION' => 'collation',
            'FULL_DOCUMENT' => 'fullDocument',
            'MAX_AWAIT_TIME_MS' => 'maxAwaitTimeMS',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'RESUME_AFTER' => 'resumeAfter',
            'SESSION' => 'session',
            'START_AFTER' => 'startAfter',
            'START_AT_OPERATION_TIME' => 'startAtOperationTime',
            'TYPE_MAP' => 'typeMap',
        ];

        $actual = (new ReflectionClass(WatchOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
