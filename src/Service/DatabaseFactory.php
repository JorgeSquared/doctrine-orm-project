<?php

namespace App\Service;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DatabaseFactory
{
	/**
	 * Create a Doctrine Entity Manager
	 * @return EntityManager
	 */
	public static function create()
	{
		$isDevMode = true;
		$metadata = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/../Entity'], $isDevMode);

		$dbParams = [
			'driver' => 'pdo_mysql',
			'host' => 'localhost',
			'user' => 'root',
			'password' => 'heslo',
			'dbname' => 'doctrineorm',
			'charset' => 'utf8'
		];

		return EntityManager::create($dbParams, $metadata);
	}
}