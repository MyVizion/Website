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
	public $default = ['DSN'      => 'mysql://myvizion:myviziontest@ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com:25060/myvizion_test?ssl-mode=REQUIRED'];

	/**
	 * This database connection is used when
	 * running PHPUnit database tests.
	 *
	 * @var array
	 */
	public $tests = ['DSN'      => 'mysql://myvizion:myviziontest@ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com:25060/myvizion_test?ssl-mode=REQUIRED'];

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
