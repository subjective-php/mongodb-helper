<?php

namespace SubjectivePHPTest\MongoDB\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Options\ClientOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Options\ClientOptions
 */
final class ClientOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'ALLOW_INVALID_HOSTNAME' => 'allow_invalid_hostname',
            'CERTIFICATE_AUTHORITY_DIR' => 'ca_dir',
            'CERTIFICATE_AUTHORITY_FILE' => 'ca_file',
            'CERTIFICATE_REVOCATION_LIST_FILE' => 'crl_file',
            'CONTEXT' => 'context',
            'PEM_FILE' => 'pem_file',
            'PEM_PASSPHRASE' => 'pem_pwd',
            'TYPE_MAP' => 'typeMap',
            'WEAK_CERT_VALIDATION' => 'weak_cert_validation',
        ];

        $actual = (new ReflectionClass(ClientOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
