<?php
	namespace database;
	use mysqli;

	class Database {
		private string $host;
		private string $dbusername;
		private string $dbpassword;
		private string $dbname;
		public mysqli $connection;

		public function __construct() {
			$env = parse_ini_file('../.env');
			$this->connection = new mysqli(
				$this->host = $env['DB_HOST'],
				$this->dbusername = $env['DB_USERNAME'],
				$this->dbpassword = $env['DB_PASSWORD'],
				$this->dbname = $env['DB_NAME']
			);
		}

		private function checkConnection(): bool
		{
			if ($this->connection->connect_errno) {
				return false;
			} else {
				return true;
			}
		}

		public function query(string $sql)
		{
			if ($this->checkConnection()) {
				return $this->connection->query($sql);
			} else {
				return false;
			}
		}
	}

//	$database = new Database();