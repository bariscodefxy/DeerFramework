<?php

namespace Deer;

use Buki\Router\Router;

class Deer {

	private Router $router;

	public function __construct()
	{
		// spawned deer framework
	}

	public function getRouter(): Router
	{
		$this->router = new Router();

		return $this->router;
	}

	public function do(): void
	{
		$this->router->run();
	}

}