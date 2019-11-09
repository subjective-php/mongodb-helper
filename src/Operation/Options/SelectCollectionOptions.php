<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class SelectCollectionOptions
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
    const SESSION = 'session';

    /**
     * @var string
     */
    const TYPE_MAP = 'typeMap';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
