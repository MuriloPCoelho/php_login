<?php
	namespace controllers;

	use models\Model;

	class Controller {
		public function view(string $view, $data = []):void
		{
			include_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/app/views/layouts/layout.php";
			include_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/app/views/$view.php";
			include_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/app/views/layouts/layout_end.php";
		}

		public function model(Model $model, $method)
		{
			$model->$method();

			return $model;
		}
	}