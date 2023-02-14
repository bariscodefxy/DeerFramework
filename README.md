# DeerFramework (WIP)

Its multipurpose framework for PHP. You can make websocket,socket servers, routing, sdl2 app and more with this easily.

# Planned features
- [x] Routing
- [x] Websockets
- [ ] SDL2 & Game Development
- [ ] App Development (qt or gtk may be)

# Examples

## First of all (base code)

```php
require __DIR__ . "/vendor/autoload.php";
use Deer\Deer;

$deer = new Deer();

// your code will in here.

$deer->do();
```

## Routing

```php
$router = $deer->getRouter(); // deer is creates routing class

$router->get('/', function(){ // you can use like this
	return 'Hello World';
});

$router->controller('/users', 'UserController', ['before' => "UserMiddleware"]); // also you can use controllers
```

For more information you can see this [izniburak/php-router](https://github.com/izniburak/php-router)

## WebSocket Server

```php

class MyServer extends WsServer {
	public function onOpen($conn) {
    }

    public function onMessage($from, $msg)
    {
    }

    public function onClose($conn) {
    }

    public function onError($conn, \Exception $e) {
    }
}

$deer = new Deer();
$deer->launchServer(
	new MyServer(),		// class
	8080				// port
);
// $deer->do(); // you don't need this for websocket server (for now)
```

# LICENSE

```
MIT License

Copyright (c) 2023 bariscodefxy

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```