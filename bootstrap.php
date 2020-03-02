<?php
# bootstrap.php

require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$entitiesPath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "src", "Entities"]),
];

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

// Connexion à la base de données
$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'charset' => 'utf8',
    'user' => 'userweb',
    'password' => 'userweb',
    'dbname' => 'offres',
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitiesPath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);
$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;
