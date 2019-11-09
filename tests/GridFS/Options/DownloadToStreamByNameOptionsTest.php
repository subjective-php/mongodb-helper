<?php

namespace SubjectivePHPTest\MongoDB\GridFS\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\GridFS\Options\DownloadToStreamByNameOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\GridFS\Options\DownloadToStreamByNameOptions
 */
final class DownloadToStreamByNameOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'REVISION' => 'revision',
        ];

        $actual = (new ReflectionClass(DownloadToStreamByNameOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
