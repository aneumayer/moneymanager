<?php

require_once "vendor/autoload.php";

// Setup Doctrine
$configuration = Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__ . '/entities'],
    $isDevMode = true
);

// Setup connection parameters
$connection_parameters = [
    'dbname'   => 'moneymanager',
    'user'     => 'moneymanager',
    'password' => 'M4n2yM1n',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql'
];

// Get the entity manager
$entity_manager = Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);