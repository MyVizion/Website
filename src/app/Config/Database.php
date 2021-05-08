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
		'DSN'      => 'mysql://doadmin:show-password@ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com:25060/defaultdb?ssl-mode=REQUIRED',
		'hostname' => 'ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com',
		'username' => 'myvizion',
		'password' => 'yzcaao1rqi665cb3',
		'database' => 'defaultdb',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => FALSE,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => '',
		'DBCollat' => '',
		'swapPre'  => '',
		'ssl_set'  => true,
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
		'DSN'      => 'mysql://doadmin:show-password@ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com:25060/defaultdb?ssl-mode=REQUIRED',
		'hostname' => 'ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com',
		'username' => 'myvizion',
		'password' => 'yzcaao1rqi665cb3',
		'database' => 'defaultdb',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => FALSE,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => '',
		'DBCollat' => '',
		'swapPre'  => '',
		'ssl_set'  => true,
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
