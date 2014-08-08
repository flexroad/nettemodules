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
		
		$router[] = new Route('<module>/<presenter>/<action>/<id>', array(
		    'module' => array(
			Route::FILTER_IN => function($module) {
			    $search = array_search($module, $this->transaltionsModule);
			    if (!$search){
				return NULL;
			    }
			    $this->selectedModule = $module;
			    return "Account";
			},
			Route::FILTER_OUT => function($module) {
			    if ($module == "Account"){
				return $this->selectedModule;
			    }
			    return NULL;
			},
		    ),
		    'presenter' => 'Home',
		    'action' => 'default',
		    'id' => NULL,
		));
			
		return $router;
	}
}
