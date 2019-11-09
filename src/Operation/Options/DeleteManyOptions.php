<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class DeleteManyOptions
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
