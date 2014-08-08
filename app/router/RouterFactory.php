<?php

namespace App;

use IModularRouter;
use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;

/**
 * Router factory.
 */
class RouterFactory
{
	private $router;
	
	
	public function __construct()
	{
		$this->router = new RouteList();
	}


	/**
	 * @return \Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$this->addFallback();
		return $this->router;
	}



	public function register(IModularRouter $router)
	{
		$routeList = $router->createRouteList();

		foreach ($routeList as $route) {
			$this->router[] = $route;
		}
	}



	private function addFallback()
	{
		$this->router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
	}
}
