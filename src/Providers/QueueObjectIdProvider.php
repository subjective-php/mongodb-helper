<?php

namespace SubjectivePHP\MongoDB\Providers;

use MongoDB\BSON\ObjectId;
use OutOfBoundsException;

final class QueueObjectIdProvider implements ObjectIdProviderInterface
{
    /**
     * @var ObjectId[]
     */
    private $queue;

    /**
     * @param ObjectId[] $queue Array of ObjectId instances.
     */
    public function __construct(array $queue)
    {
        (function (ObjectId ...$ids) {
            $this->queue = $ids;
        })(...$queue);
    }

    /**
     * @return ObjectId
     *
     * @throws OutOfBoundsException Thrown if an id is requested but the queue is empty.
     */
    public function provideObjectId() : ObjectId
    {
        if (empty($this->queue)) {
            throw new OutOfBoundsException('ObjectId queue is empty');
        }

        return array_shift($this->queue);
    }
}
