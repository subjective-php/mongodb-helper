<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class InsertOneOptions
{
    /**
     * @var string
     */
    const BYPASS_DOCUMENT_VALIDATION = 'bypassDocumentValidation';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
