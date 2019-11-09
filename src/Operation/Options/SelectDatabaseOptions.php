<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class SelectDatabaseOptions
{
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
    const TYPE_MAP = 'typeMap';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
