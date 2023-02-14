<?php

namespace Deer\Server;

use Ratchet\MessageComponentInterface;
use Ratchet\Server\IoServer;

class Launcher {

	public static function launchWsServer(MessageComponentInterface $serverClass, int $port = 8080)
	{
		$server = IoServer::factory(
			$serverClass,
			$port
		);

		$server->run();
	}

}