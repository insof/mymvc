<?php

if (filter_input(INPUT_POST, 'setlang')) {

    $GLOBALS["site_lang"] = filter_input(INPUT_POST, 'setlang');

    $lang = $GLOBALS["site_lang"];
    setcookie("site_lang", $lang, time()+60*60*24*30, '/');

    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    header('Location:' . $host . '');
} else {
    $GLOBALS['site_lang'] = 'ru';
    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    header('Location:' . $host . '');
}
