<?php
namespace controllers;
require_once "Controller.php";
require_once "Auth.php";

class Login extends Controller {
	public function index():void
	{
		$this->view('login/index', []);
	}

	public function login()
	{
		$postData = $_POST;
		if (empty($postData['email']) || empty($postData['password'])) {
			header('Location: /php_login/login/index');
		} else {
			$auth = new Auth();
			if($auth->login($postData)) {
				session_start();
				$_SESSION['logged'] = true;
				header('Location: /php_login/home/index');
	//			echo "Logado com sucesso!";
			} else {
				header('Location: /php_login/login/index');
	//			echo "Erro ao logar!";
			};

		}
	}

}