<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\SessionTransactionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\SessionTransactionOptions
 */
final class SessionTransactionOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'MAX_COMMIT_TIME_MS' => 'maxCommitTimeMS',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(SessionTransactionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
