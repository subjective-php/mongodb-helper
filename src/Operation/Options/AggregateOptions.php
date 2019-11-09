<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class AggregateOptions
{
    /**
     * @var string
     */
    const ALLOW_DISK_USE = 'allowDiskUse';

    /**
     * @var string
     */
    const BATCH_SIZE = 'batchSize';

    /**
     * @var string
     */
    const BYPASS_DOCUMENT_VALIDATION = 'bypassDocumentValidation';

    /**
     * @var string
     */
    const COMMENT = 'comment';

    /**
     * @var string
     */
    const EXPLAIN = 'explain';

    /**
     * @var string
     */
    const HINT = 'hint';

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

    /**
     * @var string
     */
    const USE_CURSOR = 'useCursor';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
