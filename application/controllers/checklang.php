<?php

$langarr = array('ru', 'en', 'de', 'it');

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($lang == null || $lang == "" || $lang == false) {

    $GLOBALS["site_lang"] = 'ru';
    
} else {
    if (!in_array($lang, array_keys($langarr))) {
        $GLOBALS["site_lang"] = 'ru';
    } else {
        $GLOBALS["site_lang"] = $lang;
    }
}
