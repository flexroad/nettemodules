<?php
class TopBarControl extends \Nette\Application\UI\Control {
    
    public function render()
    {
        $this->template->setFile(__DIR__ . '/default.latte');
        $this->template->render();
    }
}

interface ITopBarControlFactory
{
    	/**
	 * @return TopBarControl
	 */
	function create();
}