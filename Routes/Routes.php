<?php

namespace Majtas\Routes;

use Closure;

class Routes {

	private static array $routes = [];

	public static function get(string $uri, Closure $call) {
		if($_SERVER['REQUEST_METHOD'] === 'GET') {
			$uri = trim($uri, '/');
			return (static::$routes[$uri] = $call);
		}
	}

	public static function post(string $uri, Closure $call) {
		if($_SERVER['REQUEST_METHOD'] === 'POST') {
			$uri = trim($uri, '/');
			static::$routes[$uri] = $call;
		}
	}

}
