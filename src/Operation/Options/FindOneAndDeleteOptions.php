<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class FindOneAndDeleteOptions
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
    const PROJECTION = 'projection';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const SORT = 'sort';

    /**
     * @var string
     */
    const TYPE_MAP = 'typeMap';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
