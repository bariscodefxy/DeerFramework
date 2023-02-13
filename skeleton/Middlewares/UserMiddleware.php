<?php

use Buki\Router\Http\Middleware;

class UserMiddleware extends Middleware {

	public function handle()
	{
		echo "UserMiddleware worked! WoW<br>";

		return true;
	}

}