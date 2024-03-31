<?php

	namespace models;

	require_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/config/database.php";

	use database\Database;
	use mysqli_result;


	class Model_model {
		protected Database $db;

		public function __construct() {
			$this->db = new Database();
		}

		protected function query(string $sql): mysqli_result|bool
		{
			return $this->db->query($sql);
		}
	}