<?php

namespace Deer\Routing;

class Route {

	private string $name;

	private \Closure $callback;

	public function __construct(string $name, \Closure $callback)
	{
		$this->name = $name;
		$this->callback = $callback;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getCallback(): ?\Closure
	{
		return $this->callback;
	}

}