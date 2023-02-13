<?php

use Deer\Http\Middleware;

class UserMiddleware extends Middleware {

	public function handle()
	{
		echo "UserMiddleware worked! WoW<br><br>";

		return true;
	}

}