<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class SessionTransactionOptions
{
    /**
     * @var string
     */
    const MAX_COMMIT_TIME_MS = 'maxCommitTimeMS';

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
    const WRITE_CONCERN = 'writeConcern';
}
