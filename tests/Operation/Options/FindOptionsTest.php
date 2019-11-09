<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\FindOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\FindOptions
 */
final class FindOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'ALLOW_PARTIAL_RESULTS' => 'allowPartialResults',
            'BATCH_SIZE' => 'batchSize',
            'COLLATION' => 'collation',
            'COMMENT' => 'comment',
            'CURSOR_TYPE' => 'cursorType',
            'HINT' => 'hint',
            'LIMIT' => 'limit',
            'MAX' => 'max',
            'MAX_AWAIT_TIME_MS' => 'maxAwaitTimeMS',
            'MAX_SCAN' => 'maxScan',
            'MAX_TIME_MS' => 'maxTimeMS',
            'MIN' => 'min',
            'MODIFIERS' => 'modifiers',
            'NO_CURSOR_TIMEOUT' => 'noCursorTimeout',
            'OPLOG_REPLAY' => 'oplogReplay',
            'PROJECTION' => 'projection',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'RETURN_KEY' => 'returnKey',
            'SESSION' => 'session',
            'SHOW_RECORD_ID' => 'showRecordId',
            'SKIP' => 'skip',
            'SNAPSHOT' => 'snapshot',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
        ];

        $actual = (new ReflectionClass(FindOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
