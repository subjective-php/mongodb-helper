<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ValidationLevel;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ValidationLevel
 */
final class ValidationLevelTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'MODERATE' => 'moderate',
            'OFF' => 'off',
            'STRICT' => 'strict',
        ];

        $actual = (new ReflectionClass(ValidationLevel::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
