<?php
class Controller_Prices extends Controller
{
	function action_index()
	{	
		$this->view->generate('prices_view_' .$this->getCurrentLanguage() . '.php', 'template_view.php');
	}
}