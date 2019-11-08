<?php

namespace SubjectivePHP\MongoDB\Providers;

use MongoDB\BSON\ObjectId;

interface ObjectIdProviderInterface
{
    /**
     * @return ObjectId
     */
    public function provideObjectId() : ObjectId;
}
