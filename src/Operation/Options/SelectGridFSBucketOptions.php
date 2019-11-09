<?php

namespace SubjectivePHP\MongoDB\Operation\Options;

final class SelectGridFSBucketOptions
{
    /**
     * @var string
     */
    const BUCKET_NAME = 'bucketName';

    /**
     * @var string
     */
    const CHUNK_SIZE_BYTES = 'chunkSizeBytes';

    /**
     * @var string
     */
    const DISABLE_MD5 = 'disableMD5';

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
    const TYPE_MAP = 'typeMap';

    /**
     * @var string
     */
    const WRITE_CONCERN = 'writeConcern';
}
