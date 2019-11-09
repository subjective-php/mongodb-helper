<?php

namespace SubjectivePHPTest\MongoDB\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Options\DriverOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Options\DriverOptions
 */
final class DriverOptionsTest extends TestCase
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
            'WEAK_CERT_VALIDATION' => 'weak_cert_validation',
        ];

        $actual = (new ReflectionClass(DriverOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
