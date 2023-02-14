<?php

require dirname(__DIR__, 1) . "/vendor/autoload.php";

use Deer\Deer;
use Deer\Server\WsServer;

class MyServer extends WsServer {
}

$deer = new Deer();
$deer->launchServer(new MyServer(), 8080);
$deer->do();