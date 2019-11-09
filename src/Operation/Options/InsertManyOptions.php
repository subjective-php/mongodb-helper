<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class InsertManyOptions
{
    /**
     * @var string
     */
    const BYPASS_DOCUMENT_VALIDATION = 'bypassDocumentValidation';

    /**
     * @var string
     */
    const ORDERED = 'ordered';

    /**
     * @var string
     */
    const SESSION = 'session';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
