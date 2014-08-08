<?php

namespace App\AccountModule;

use Kdyby\Translation\DI\ITranslationProvider;
use Nette\DI\CompilerExtension;
use Nette\PhpGenerator\ClassType;
use Kdyby\Translation\DI;

class AccountModuleExtension extends CompilerExtension implements ITranslationProvider{


	/**
	 * Return array of directories, that contain resources for translator.
	 *
	 * @return string[]
	 */
	function getTranslationResources()
	{
		$builder = $this->containerBuilder;
		$appDir = $builder->expand("%appDir%");

		return [$appDir . "/AccountModule/lang"];
	}
	
	public function loadConfiguration()
	{
		$config = $this->getConfig();
		$builder = $this->getContainerBuilder();
		$x = $this->compiler->parseServices($builder, $this->loadFromFile(__DIR__ . '/../config/account.neon'));
	}



	public function beforeCompile()
	{
		$builder = $this->getContainerBuilder();

//		$definition = $builder->getDefinition('routerFactory');
//		$definition->addSetup('register', [$this->prefix('@routerFactory')]);
	}
}
