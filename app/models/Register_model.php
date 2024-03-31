<?php

	namespace models;

	class Register_model extends Model_model {

		public function insert($data)
		{
			$sql = "INSERT INTO Users (username, email, senha) VALUES ('{$data['userName']}', '{$data['email']}', '{$data['password']}')";

			return $this->query($sql);
		}


	}