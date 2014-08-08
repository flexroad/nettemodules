<?php
class LoginPanelControl extends \Nette\Application\UI\Control {
    
    public function render()
    {
        $this->template->setFile(__DIR__ . '/default.latte');
        $this->template->render();
    }
}

interface ILoginPanelFactory
{
    	/**
	 * @return LoginPanelControl
	 */
	function create();
}