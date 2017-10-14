<?php
class Controller_Contacts extends Controller
{
	function action_index()
	{	
		$this->view->generate('contacts_view_' .$this->getCurrentLanguage() . '.php', 'template_view.php');
	}
}