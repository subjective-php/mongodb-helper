<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class CreateCollectionOptions
{
    /**
     * @var string
     */
    const AUTO_INDEX_ID = 'autoIndexId';

    /**
     * @var string
     */
    const CAPPED = 'capped';

    /**
     * @var string
     */
    const COLLATION = 'collation';

    /**
     * @var string
     */
    const FLAGS = 'flags';

    /**
     * @var string
     */
    const INDEX_OPTION_DEFAULTS = 'indexOptionDefaults';

    /**
     * @var string
     */
    const MAX = 'max';

    /**
     * @var string
     */
    const MAX_TIME_MS = 'maxTimeMS';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const SIZE = 'size';

    /**
     * @var string
     */
    const STORAGE_ENGINE = 'storageEngine';

    /**
     * @var string
     */
    const TYPE_MAP = 'typeMap';

    /**
     * @var string
     */
    const VALIDATION_ACTION = 'validationAction';

    /**
     * @var string
     */
    const VALIDATION_LEVEL = 'validationLevel';

    /**
     * @var string
     */
    const VALIDATOR = 'validator';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
