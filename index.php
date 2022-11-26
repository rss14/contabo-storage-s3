<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Aws\S3\S3Client;

// Instantiate an Amazon S3 client.
$s3 = new S3Client([
    'endpoint' => 'https://usc1.contabostorage.com',
    'version' => 'latest',
    'region'  => 'usc1',
    'credentials' => [
        'key' => '',
        'secret'  => ''
    ]
]);

// Upload file
$s3->putObject([
    'Bucket' => 'rs-testing',
    'Key'    => 'my-object.json',
    'Body'   => fopen('composer.json', 'r'),
    'ACL'    => 'public-read',
]);