<?php
namespace controllers;
require_once "Controller.php";

class Register extends Controller {
	public function index()
	{
		$this->view('register/index', []);

	}

	public function register()
	{
		$postData = $_POST;
		if (empty($postData['userName']) || empty($postData['email']) || empty($postData['password'])) {
			header('Location: /php_login/register/index');
		} else {
			$this->model('Register',$postData, 'insert');
			header('Location: /php_login/login/index');
		}
	}

}