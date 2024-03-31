<?php

	namespace controllers;
	require_once "Controller.php";
	use controllers\Controller;

	class Home extends Controller {
		public function index()
		{
			$this->view('home/index', []);
		}
	}