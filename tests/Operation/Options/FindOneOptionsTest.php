<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\FindOneOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\FindOneOptions
 */
final class FindOneOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'COLLATION' => 'collation',
            'COMMENT' => 'comment',
            'HINT' => 'hint',
            'MAX' => 'max',
            'MAX_SCAN' => 'maxScan',
            'MAX_TIME_MS' => 'maxTimeMS',
            'MIN' => 'min',
            'MODIFIERS' => 'modifiers',
            'PROJECTION' => 'projection',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'RETURN_KEY' => 'returnKey',
            'SESSION' => 'session',
            'SHOW_RECORD_ID' => 'showRecordId',
            'SKIP' => 'skip',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
        ];

        $actual = (new ReflectionClass(FindOneOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
