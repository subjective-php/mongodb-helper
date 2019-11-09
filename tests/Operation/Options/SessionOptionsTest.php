<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\SessionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\SessionOptions
 */
final class SessionOptionsTest extends TestCase
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

        $actual = (new ReflectionClass(SessionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
