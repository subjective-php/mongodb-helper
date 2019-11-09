<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class CountOptions
{
    /**
     * @var string
     */
    const COLLATION = 'collation';

    /**
     * @var string
     */
    const HINT = 'hint';

    /**
     * @var string
     */
    const LIMIT = 'limit';

    /**
     * @var string
     */
    const MAX_TIME_MS = 'maxTimeMS';

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
    const SESSION = 'session';

    /**
     * @var string
     */
    const SKIP = 'skip';
}
