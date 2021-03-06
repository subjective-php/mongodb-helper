<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class ReplaceOneOptions
{
    /**
     * @var string
     */
    const BYPASS_DOCUMENT_VALIDATION = 'bypassDocumentValidation';

    /**
     * @var string
     */
    const COLLATION = 'collation';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const UPSERT = 'upsert';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
