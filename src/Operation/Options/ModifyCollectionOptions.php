<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class ModifyCollectionOptions
{
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
