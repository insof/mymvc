<?php

class Controller_Prod extends Controller {

    function action_view() {

        if (filter_input(INPUT_GET, 'prod')) {

            $id = filter_input(INPUT_GET, 'prod');
            $product = new Product();
            $res = $product->prodCheck($id);
            if ($res==$id) {
            $product->load($id);
            $this->view->generate('prod_view.php', 'template_view.php', $product);
            }
        }
    }

    function action_cat() {
        $cat = filter_input(INPUT_GET, 'cat');
        $category = new Product_Collection();
        $res = $category->catCheck($cat);
        
        if ($res == $cat) {
        $category->setCategory($cat);
        $category->rewind();
        $this->view->generate('cat_view.php', 'template_view.php', $category);
        }
    }

    function action_index() {
        if (!filter_input(INPUT_GET, 'prod') && !filter_input(INPUT_GET, 'cat')) {

            $mainview = new catDistinct();
            $mainview->loadCat();
            $this->view->generate('maincat_view.php', 'template_view.php', $mainview);
        } else {
            Route::ErrorPage404();
        }
    }

}
