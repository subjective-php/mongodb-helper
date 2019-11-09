<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class DeleteOneOptions
{
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
    const WRITE_CONCERN = 'writeConcern';
}
