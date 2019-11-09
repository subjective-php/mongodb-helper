<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class DistinctOptions
{
    /**
     * @var string
     */
    const COLLATION = 'collation';

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
    const TYPE_MAP = 'typeMap';
}
