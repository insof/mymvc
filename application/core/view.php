<?php

class View {

    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view, $data = null) {

            $lang = $this->getCurrentLanguage();
            $filename = 'lang/' . $lang . '1.csv';
            $handle = fopen($filename, 'r');
            $transl = array();
            if ($handle !== FALSE) {
                while (($arr = fgetcsv($handle, ",")) !== FALSE) {
                    $transl[$arr[0]] = $arr[1];
                }
            }
            fclose($handle);
            include 'application/views/' . $template_view;
       
    }

    public function getCurrentLanguage() {
        return $GLOBALS['site_lang'];
    }

}
