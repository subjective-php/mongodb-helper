<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\StartSessionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\StartSessionOptions
 */
final class StartSessionOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'CAUSAL_CONSISTENCY' => 'causalConsistency',
            'DEFAULT_TRANSACTION_OPTIONS' => 'defaultTransactionOptions',
        ];

        $actual = (new ReflectionClass(StartSessionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
