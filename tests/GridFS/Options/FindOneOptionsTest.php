<?php

namespace SubjectivePHPTest\MongoDB\GridFS\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\GridFS\Options\FindOneOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\GridFS\Options\FindOneOptions
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
            'MAX_TIME_MS' => 'maxTimeMS',
            'MODIFIERS' => 'modifiers',
            'PROJECTION' => 'projection',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SKIP' => 'skip',
            'SORT' => 'sort',
            'TYPE_MAP' => 'typeMap',
        ];

        $actual = (new ReflectionClass(FindOneOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
