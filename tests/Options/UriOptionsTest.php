<?php

namespace SubjectivePHPTest\MongoDB\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Options\UriOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Options\UriOptions
 */
final class UriOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'APP_NAME' => 'appname',
            'AUTH_MECHANISM' => 'authMechanism',
            'AUTH_MECHANISM_PROPERTIES' => 'authMechanismProperties',
            'AUTH_SOURCE' => 'authSource',
            'CANONICALIZE_HOSTNAME' => 'canonicalizeHostname',
            'COMPRESSORS' => 'compressors',
            'CONNECT_TIMEOUT_MS' => 'connectTimeoutMS',
            'GSSAPI_SERVICE_NAME' => 'gssapiServiceName',
            'HEARTBEAT_FREQUENCY_MS' => 'heartbeatFrequencyMS',
            'JOURNAL' => 'journal',
            'LOCAL_THRESHOLD_MS' => 'localThresholdMS',
            'MAX_STALENESS_SECONDS' => 'maxStalenessSeconds',
            'PASSWORD' => 'password',
            'READ_CONCERN_LEVEL' => 'readConcernLevel',
            'READ_PREFERENCE' => 'readPreference',
            'READ_PREFERENCE_TAGS' => 'readPreferenceTags',
            'REPLICA_SET' => 'replicaSet',
            'RETRY_READS' => 'retryReads',
            'RETRY_WRITES' => 'retryWrites',
            'SAFE' => 'safe',
            'SERVER_SELECTION_TIMEOUT_MS' => 'serverSelectionTimeoutMS',
            'SERVER_SELECTION_TRY_ONCE' => 'serverSelectionTryOnce',
            'SLAVE_OK' => 'slaveOk',
            'SOCKET_CHECK_INTERVAL_MS' => 'socketCheckIntervalMS',
            'SOCKET_TIMEOUT_MS' => 'socketTimeoutMS',
            'SSL' => 'ssl',
            'TLS' => 'tls',
            'TLS_ALLOW_INVALID_CERTIFICATES' => 'tlsAllowInvalidCertificates',
            'TLS_ALLOW_INVALID_HOSTNAMES' => 'tlsAllowInvalidHostnames',
            'TLS_CAFILE' => 'tlsCAFile',
            'TLS_CERTIFICATE_KEY_FILE' => 'tlsCertificateKeyFile',
            'TLS_CERTIFICATE_KEY_FILE_PASSWORD' => 'tlsCertificateKeyFilePassword',
            'TLS_INSECURE' => 'tlsInsecure',
            'USERNAME' => 'username',
            'WRITE_CONCERN' => 'w',
            'WRITE_CONCERN_TIMEOUT_MS' => 'wTimeoutMS',
            'ZLIB_COMPRESSION_LEVEL' => 'zlibCompressionLevel',
        ];

        $actual = (new ReflectionClass(UriOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
