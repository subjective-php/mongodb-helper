<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\CreateIndexOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\CreateIndexOptions
 */
final class CreateIndexOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BACKGROUND' => 'background',
            'COLLATION' => 'collation',
            'EXPIRE_AFTER_SECONDS' => 'expireAfterSeconds',
            'MAX_TIME_MS' => 'maxTimeMS',
            'NAME' => 'name',
            'PARTIAL_FILTER_EXPRESSION' => 'partialFilterExpression',
            'SESSION' => 'session',
            'SPARSE' => 'sparse',
            'TWO_D_SPHERE_INDEX_VERSION' => '2dsphereIndexVersion',
            'UNIQUE' => 'unique',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(CreateIndexOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
