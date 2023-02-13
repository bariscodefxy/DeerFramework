<?php

namespace Deer\Http;

use Buki\Router\Http\Controller as BukiController;

class Controller extends BukiController {

	public function view(string $script_file): ?string
	{
		ob_start();
		require $script_file;
		return ob_get_clean();
	}

}