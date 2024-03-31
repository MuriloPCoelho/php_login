<?php

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

			$this->checkConnection();
		}

		private function checkConnection() {
			if ($this->connection->connect_errno) {
				echo "Failed to connect to MySQL: " . $this->connection->connect_error;
				exit();
			} else {
				echo "Connected to MySQL";
			}
		}
	}

//	$database = new Database();