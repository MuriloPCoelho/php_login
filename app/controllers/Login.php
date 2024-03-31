<?php
	namespace controllers;
	require_once "Controller.php";

	class Login extends Controller {
		public function index():void
		{
			$this->view('login/index', []);
		}

	}