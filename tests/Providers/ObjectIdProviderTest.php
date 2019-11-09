<?php

namespace SubjectivePHPTest\MongoDB\Providers;

use MongoDB\BSON\ObjectId;
use PHPUnit\Framework\TestCase;
use SubjectivePHP\MongoDB\Providers\ObjectIdProvider;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Providers\ObjectIdProvider
 */
final class ObjectIdProviderTest extends TestCase
{
    /**
     * @test
     * @covers ::provideObjectId
     */
    public function provideObjectIdReturnsObjectId()
    {
        $provider = new ObjectIdProvider();
        $this->assertInstanceOf(ObjectId::class, $provider->provideObjectId());
    }
}
