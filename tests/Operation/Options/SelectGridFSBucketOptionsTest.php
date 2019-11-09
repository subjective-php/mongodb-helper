<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\SelectGridFSBucketOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\SelectGridFSBucketOptions
 */
final class SelectGridFSBucketOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'BUCKET_NAME' => 'bucketName',
            'CHUNK_SIZE_BYTES' => 'chunkSizeBytes',
            'DISABLE_MD5' => 'disableMD5',
            'READ_CONCERN' => 'readConcern',
            'READ_PREFERENCE' => 'readPreference',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(SelectGridFSBucketOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
