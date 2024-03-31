<?php
namespace controllers;
require_once "Controller.php";

	class Register extends Controller {
		public function index()
		{
			$this->view('login/index', []);
		}

	}