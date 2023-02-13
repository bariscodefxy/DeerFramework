<?php

namespace Deer;

use Deer\Routing\Route;

class Router {

	private $REQUEST;

	private $ROUTES;

	public function __construct()
	{
		$this->REQUEST = $_SERVER["REQUEST_URI"];
	}

	public function route($page, \Closure $callback)
	{
		$this->ROUTES[] = new Route($page, $callback);
	}

	public function handle()
	{
		$route = $this->findRoute($this->REQUEST);

		$callback = $route->getCallback();

		return $callback();
	}

	private function findRoute($page)
	{
		foreach($this->ROUTES as $r)
		{
			if( $r->getName() == $page ) return $r;
		}
		return null;
	}

}