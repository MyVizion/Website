<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
	/**
	 * The directory that holds the Migrations
	 * and Seeds directories.
	 *
	 * @var string
	 */
	public $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

	/**
	 * Lets you choose which connection group to
	 * use if no other is specified.
	 *
	 * @var string
	 */
	public $defaultGroup = 'tests';

	/**
	 * The default database connection.
	 *
	 * @var array
	 */
	public $default = [
		'DSN'      => '',
		'hostname' => 'clu-01.mysql.ams3.myvizion.net',
		'username' => 'myvizion',
		'password' => 'myviziontest',
		'database' => 'myvizion_test',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => FALSE,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => 'utf8mb4',
		'DBCollat' => 'utf8mb4_0900_ai_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
		'port'     => 25060,
	];

	/**
	 * This database connection is used when
	 * running PHPUnit database tests.
	 *
	 * @var array
	 */
	public $tests = [
		'DSN'      => '',
		'hostname' => 'clu-01.mysql.ams3.myvizion.net',
		'username' => 'myvizion',
		'password' => 'myviziontest',
		'database' => 'myvizion_test',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => FALSE,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => 'utf8mb4',
		'DBCollat' => 'utf8mb4_0900_ai_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
		'port'     => 25060,
	];

	//--------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();

		// Ensure that we always set the database group to 'tests' if
		// we are currently running an automated test suite, so that
		// we don't overwrite live data on accident.
		if (ENVIRONMENT === 'testing')
		{
			$this->defaultGroup = 'tests';
		}
	}

	//--------------------------------------------------------------------

}
