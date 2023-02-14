<?php

namespace Deer;

use Buki\Router\Router;
use Deer\Server\Launcher;
use Ratchet\MessageComponentInterface;

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

	public function launchServer($serverClass, int $port = 8080): void
	{
		if( $serverClass instanceof messageComponentInterface )
		{
			Launcher::launchWsServer($serverClass, $port);
		}
	}

	public function do(): void
	{
		if( isset($this->router) )
		{
			$this->router->run();
		}
	}

}