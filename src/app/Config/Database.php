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
	public $defaultGroup = 'default';

	/**
	 * The default database connection.
	 *
	 * @var array
	 */
	public $default = [
		'DSN'      => '',
		'hostname' => 'ams3-mysql-clu-01-do-user-8330627-0.b.db.ondigitalocean.com',
		'username' => 'myvizion',
		'password' => 'yzcaao1rqi665cb3',
		'database' => 'defaultdb',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => FALSE,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => 'utf8',
		'DBCollat' => 'utf8_general_ci',
		'swapPre'  => '',
		'encrypt' => [
			'ssl_key'    => '/etc/apache2/ssl/apache.key',
			'ssl_cert'   => '/etc/apache2/ssl/apache.crt',
			'ssl_ca'     => '/var/www/html/codeigniter4/ca-certificate.crt',
			'ssl_capath' => NULL,
			'ssl_cipher' => 'DHE-RSA-AES256-SHA',
			'ssl_verify' => TRUE
		],
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
