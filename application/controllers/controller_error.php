<?php
/**
 * Created by PhpStorm.
 * User: insof
 * Date: 10/13/17
 * Time: 10:47 PM
 */


class Controller_Error extends Controller
{
    function action_index()
    {
        $this->view->generate('error_view.php', 'template_view.php');
    }
}