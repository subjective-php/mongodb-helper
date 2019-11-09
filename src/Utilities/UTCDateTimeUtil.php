<?php

namespace SubjectivePHP\MongoDB\Utilities;

use MongoDB\BSON\UTCDateTime;

abstract class UTCDateTimeUtil
{
    /**
     * @return UTCDateTime
     */
    final public static function now() : UTCDateTime
    {
        $microSeconds = microtime(true) * 1000;
        return new UTCDateTime((int)$microSeconds);
    }

    /**
     * @param int $seconds Number of seconds since the Unix epoch (Jan 1, 1970).
     *
     * @return UTCDateTime
     */
    final public static function fromSeconds(int $seconds) : UTCDateTime
    {
        $microSeconds = $seconds * 1000;
        return new UTCDateTime($microSeconds);
    }
}
