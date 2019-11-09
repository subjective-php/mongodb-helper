<?php

namespace SubjectivePHPTest\MongoDB\GridFS\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\GridFS\Options\FindOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\GridFS\Options\FindOptions
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
            'LIMIT' => 'limit',
            'MAX_TIME_MS' => 'maxTimeMS',
            'MODIFIERS' => 'modifiers',
            'NO_CURSOR_TIMEOUT' => 'noCursorTimeout',
            'OPLOG_REPLAY' => 'oplogReplay',
            'PROJECTION' => 'projection',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SKIP' => 'skip',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
        ];

        $actual = (new ReflectionClass(FindOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
