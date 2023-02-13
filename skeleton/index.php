<?php

require dirname(__DIR__, 1) . "/vendor/autoload.php";
use Deer\Deer;
use Deer\Network\{Request, Response};

$deer = new Deer();
$router = $deer->spawnRouter();
$router->route('/wow', function(){
	return "Testing our page"; // we can use like this
});
$deer->do();