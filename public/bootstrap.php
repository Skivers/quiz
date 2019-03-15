<?php

use \Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";
// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;

$paths = [
//	__DIR__ . "/src",
	__DIR__ . "/vendor",
];
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);
// database configuration parameters
$conn = array(
	'driver'   => 'pdo_mysql',
	'user'     => 'root',
	'password' => 'root',
	'dbname'   => 'app',
	'host'     => '127.0.0.1',
	'port'     => '3306',
	'unix_socket'=> '/tmp/mysql.sock'

//	'path' => __DIR__ . '/db.mysql',
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);