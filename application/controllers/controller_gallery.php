<?php
class Controller_Gallery extends Controller
{
	function action_index()
	{	
		$this->view->generate('gallery_view_' .$this->getCurrentLanguage() . '.php', 'template_view.php');
	}
}