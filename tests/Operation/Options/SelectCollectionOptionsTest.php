<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\SelectCollectionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\SelectCollectionOptions
 */
final class SelectCollectionOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SESSION' => 'session',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(SelectCollectionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
