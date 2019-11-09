<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\CreateCollectionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\CreateCollectionOptions
 */
final class CreateCollectionOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'AUTO_INDEX_ID' => 'autoIndexId',
            'CAPPED' => 'capped',
            'COLLATION' => 'collation',
            'FLAGS' => 'flags',
            'INDEX_OPTION_DEFAULTS' => 'indexOptionDefaults',
            'MAX' => 'max',
            'MAX_TIME_MS' => 'maxTimeMS',
            'SESSION' => 'session',
            'SIZE' => 'size',
            'STORAGE_ENGINE' => 'storageEngine',
            'TYPE_MAP' => 'typeMap',
            'VALIDATION_ACTION' => 'validationAction',
            'VALIDATION_LEVEL' => 'validationLevel',
            'VALIDATOR' => 'validator',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(CreateCollectionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
