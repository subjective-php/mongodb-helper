<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\EstimatedDocumentCountOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\EstimatedDocumentCountOptions
 */
final class EstimatedDocumentCountOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'MAX_TIME_MS' => 'maxTimeMS',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'SESSION' => 'session',
        ];

        $actual = (new ReflectionClass(EstimatedDocumentCountOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
