<?php

namespace App\AccountModule;

use Kdyby\Translation\DI\ITranslationProvider;
use Nette\DI\CompilerExtension;
use Nette\PhpGenerator\ClassType;
use Kdyby\Translation\DI;

class AccountModuleExtension extends CompilerExtension{
	
	public function loadConfiguration()
	{
		$config = $this->getConfig();
		$builder = $this->getContainerBuilder();
		$x = $this->compiler->parseServices($builder, $this->loadFromFile(__DIR__ . '/../config/account.neon'));
	}

	public function beforeCompile()
	{
		$builder = $this->getContainerBuilder();
	}
}
