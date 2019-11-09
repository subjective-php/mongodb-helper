<?php

namespace SubjectivePHP\MongoDB\Providers;

use MongoDB\BSON\ObjectId;

final class ObjectIdProvider implements ObjectIdProviderInterface
{
    /**
     * @return ObjectId
     */
    public function provideObjectId() : ObjectId
    {
        return new ObjectId();
    }
}
