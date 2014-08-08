<?php

namespace App\AccountModule;

use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use \Tracy\Debugger;
class RouterFactory implements \IModularRouter
{   
	protected $transaltionsModule = array('en_GB'=>'account','cs_CZ'=>'ucet');
	
	protected $selectedModule;
	
	public function createRouteList()
	{
		$router = new RouteList('Account');
		
		$router[] = new Route('account/<presenter>/<action>/<id>', array(
		    'module' => 'Account',
		    'presenter' => 'Home',
		    'action' => 'default',
		    'id' => NULL,
		));
			
		return $router;
	}
}
