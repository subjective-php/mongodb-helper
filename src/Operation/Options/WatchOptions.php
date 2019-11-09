<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class WatchOptions
{
    /**
     * @var string
     */
    const BATCH_SIZE = 'batchSize';

    /**
     * @var string
     */
    const COLLATION = 'collation';

    /**
     * @var string
     */
    const FULL_DOCUMENT = 'fullDocument';

    /**
     * @var string
     */
    const MAX_AWAIT_TIME_MS = 'maxAwaitTimeMS';

    /**
     * @var string
     */
    const READ_CONCERN = 'readConcern';

    /**
     * @var string
     */
    const READ_PREFERENCE = 'readPreference';

    /**
     * @var string
     */
    const RESUME_AFTER = 'resumeAfter';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const START_AFTER = 'startAfter';

    /**
     * @var string
     */
    const START_AT_OPERATION_TIME = 'startAtOperationTime';

    /**
     * @var string
     */
    const TYPE_MAP = 'typeMap';
}
