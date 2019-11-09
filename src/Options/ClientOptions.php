<?php

namespace SubjectivePHP\MongoDB\Options;

final class ClientOptions
{
    /**
     * @var string
     */
    const ALLOW_INVALID_HOSTNAME = 'allow_invalid_hostname';

    /**
     * @var string
     */
    const CERTIFICATE_AUTHORITY_DIR = 'ca_dir';

    /**
     * @var string
     */
    const CERTIFICATE_AUTHORITY_FILE = 'ca_file';

    /**
     * @var string
     */
    const CONTEXT = 'context';

    /**
     * @var string
     */
    const CERTIFICATE_REVOCATION_LIST_FILE = 'crl_file';

    /**
     * @var string
     */
    const PEM_FILE = 'pem_file';

    /**
     * @var string
     */
    const PEM_PASSPHRASE = 'pem_pwd';

    /**
     * @var string
     */
    const TYPE_MAP = 'typeMap';

    /**
     * @var string
     */
    const WEAK_CERT_VALIDATION = 'weak_cert_validation';
}
