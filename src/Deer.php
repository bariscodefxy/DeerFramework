<?php

namespace Deer;

class Deer {

	private Router $router;

	public function __construct()
	{
		// spawned deer framework
	}

	public function spawnRouter(): Router
	{
		$this->router = new Router();

		return $this->router;
	}

	public function do(): void
	{
		echo $this->router->handle();
	}

}