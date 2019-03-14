<?php
use \Doctrine\ORM\Tools\Setup;
require_once "vendor/autoload.php";
// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// database configuration parameters
$conn = array(
	'driver' => 'pdo_mysql',
	'path' => __DIR__ . '/db.mysql',
);
// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);