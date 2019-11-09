<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ValidationAction;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ValidationAction
 */
final class ValidationActionTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'ERROR' => 'error',
            'WARN' => 'warn',
        ];

        $actual = (new ReflectionClass(ValidationAction::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
