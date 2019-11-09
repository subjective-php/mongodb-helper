<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class CreateIndexOptions
{
    /**
     * @var string
     */
    const BACKGROUND = 'background';

    /**
     * @var string
     */
    const COLLATION = 'collation';

    /**
     * @var string
     */
    const EXPIRE_AFTER_SECONDS = 'expireAfterSeconds';

    /**
     * @var string
     */
    const MAX_TIME_MS = 'maxTimeMS';

    /**
     * @var string
     */
    const NAME = 'name';

    /**
     * @var string
     */
    const PARTIAL_FILTER_EXPRESSION = 'partialFilterExpression';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const SPARSE = 'sparse';

    /**
     * @var string
     */
    const TWO_D_SPHERE_INDEX_VERSION = '2dsphereIndexVersion';

    /**
     * @var string
     */
    const UNIQUE = 'unique';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
