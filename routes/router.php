<?php

// Obtém a URL solicitada
	$request = $_SERVER['REQUEST_URI'];
//  var_dump($request);

// Remove a barra inicial e divide a URL em segmentos
	$segments = explode('/', ltrim($request, '/'));
//	var_dump($segments);

// Obtém os dois últimos segmentos
	$lastTwoSegments = array_slice($segments, -2);
//	var_dump($lastTwoSegments);

// O penúltimo segmento é o nome do controlador
	$controllerName = $lastTwoSegments[0];
	$controllerClass = "controllers\\" . ucfirst($controllerName);
//	var_dump($controllerName);

// O ultimo segmento é o nome do método
	$methodName = $lastTwoSegments[1];
//	var_dump($methodName);

// Verifica se o arquivo do controlador existe
	if (file_exists("../app/controllers/{$controllerName}.php")) {
		require_once "../app/controllers/$controllerName.php";

	// Verifica se a classe do controlador existe
		if (class_exists($controllerClass)) {
			$controller = new $controllerClass();

		// Verifica se o método existe no controlador
			if (method_exists($controller, $methodName)) {
				$controller->$methodName();

			} else {
				echo "Método $methodName não encontrado no controlador $controllerName.";

			}
		} else {
			echo "Classe $controllerName não encontrada.";

		}
	} else {
		echo "Arquivo do controlador para $controllerName.php não encontrado.";
	}
