<?php

require dirname(__DIR__, 1) . "/vendor/autoload.php";
use Deer\Deer;
$deer = new Deer();
$router = $deer->getRouter();
$router->get('/', function()
{
	return 'lol';
});
$router->controller('/users', 'UserController', ['before' => "UserMiddleware"]);
$deer->do();