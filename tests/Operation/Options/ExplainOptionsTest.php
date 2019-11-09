<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ExplainOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ExplainOptions
 */
final class ExplainOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'READ_PREFERENCE' => 'readPreference',
            'TYPE_MAP' => 'typeMap',
            'VERBOSITY' => 'verbosity',
        ];

        $actual = (new ReflectionClass(ExplainOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
