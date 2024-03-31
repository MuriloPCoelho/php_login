<?php
namespace controllers;

class Controller {
	public function view(string $view, $data = []):void
	{
		include_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/app/views/layouts/layout.php";
		include_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/app/views/$view.php";
		include_once $_SERVER['DOCUMENT_ROOT'] . "/php_login/app/views/layouts/layout_end.php";
	}

	public function model($model, $data = [], $method = null)
	{
		$modelClass = "models\\" . ucfirst($model) . '_model';
		require __DIR__ . "/../models/Model_model.php";
		require __DIR__ . "/../models/{$model}_model.php";
		$model = new $modelClass();

		return $model->$method($data);
	}

}