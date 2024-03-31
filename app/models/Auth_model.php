<?php

	namespace models;

	use models\Model_model;

	class Auth_model extends Model_model {
		public function authenticate($data)
		{
			$sql = "SELECT * FROM Users WHERE email = '{$data['email']}' AND senha = '{$data['password']}'";
//
			return $this->query($sql)->num_rows > 0;
		}
	}