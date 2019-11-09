<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class EstimatedDocumentCountOptions
{
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
}
