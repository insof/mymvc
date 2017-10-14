<?php
class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->generate('main_view_' .$this->getCurrentLanguage() . '.php', 'template_view.php');
	}
        
}