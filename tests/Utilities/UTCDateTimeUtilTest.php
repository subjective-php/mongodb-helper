<?php

namespace SubjectivePHPTest\MongoDB\Utilities;

use PHPUnit\Framework\TestCase;
use SubjectivePHP\MongoDB\Utilities\UTCDateTimeUtil;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Utilities\UTCDateTimeUtil
 */
final class UTCDateTimeUtilTest extends TestCase
{
    /**
     * @test
     * @covers ::now
     */
    public function nowReturnsCurrentDateTime()
    {
        $expected = time();
        $actual = UTCDateTimeUtil::now()->toDateTime()->getTimestamp();
        $this->assertLessThanOrEqual($expected, $actual);
    }

    /**
     * @test
     * @covers ::fromSeconds
     */
    public function fromSecondsReturnsExcpectedDateTime()
    {
        $expectedTimestamp = time();
        $actual = UTCDateTimeUtil::fromSeconds($expectedTimestamp)->toDateTime()->getTimestamp();
        $this->assertLessThanOrEqual($expectedTimestamp, $actual);
    }
}
