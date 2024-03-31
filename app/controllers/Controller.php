<?php
	namespace controllers;

	use views\View;
	use models\Model;

	class Controller {
		public function view(View $view, $data = []):void
		{
			$view->render($data);
		}

		public function model(Model $model, $method)
		{
			$model->$method();

			return $model;
		}
	}