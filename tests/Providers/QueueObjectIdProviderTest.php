<?php

namespace SubjectivePHPTest\MongoDB\Providers;

use MongoDB\BSON\ObjectId;
use OutOfBoundsException;
use PHPUnit\Framework\TestCase;
use SubjectivePHP\MongoDB\Providers\QueueObjectIdProvider;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Providers\QueueObjectIdProvider
 * @covers ::__construct
 */
final class QueueObjectIdProviderTest extends TestCase
{
    /**
     * @test
     * @covers ::provideObjectId
     */
    public function provideObjectIdWithEmptyQueue()
    {
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage('ObjectId queue is empty');
        $provider = new QueueObjectIdProvider([]);
        $provider->provideObjectId();
    }

    /**
     * @test
     * @covers ::provideObjectId
     */
    public function provideObjectIdProvidesIdsInCorrectOrder()
    {
        $ids = [
            new ObjectId(),
            new ObjectId(),
        ];

        $provider = new QueueObjectIdProvider($ids);
        $this->assertSame($ids[0], $provider->provideObjectId());
        $this->assertSame($ids[1], $provider->provideObjectId());
    }
}
