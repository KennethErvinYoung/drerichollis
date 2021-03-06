<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'phpmock\\phpunit\\' => array($vendorDir . '/php-mock/php-mock-phpunit/classes'),
    'phpmock\\integration\\' => array($vendorDir . '/php-mock/php-mock-integration/classes'),
    'phpmock\\' => array($vendorDir . '/php-mock/php-mock/classes', $vendorDir . '/php-mock/php-mock/tests/unit'),
    'phpDocumentor\\Reflection\\' => array($vendorDir . '/phpdocumentor/reflection-common/src', $vendorDir . '/phpdocumentor/type-resolver/src', $vendorDir . '/phpdocumentor/reflection-docblock/src'),
    'Webmozart\\Assert\\' => array($vendorDir . '/webmozart/assert/src'),
    'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
    'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'CF\\' => array($baseDir . '/src', $vendorDir . '/cloudflare/cloudflare-plugin-backend/src'),
);
