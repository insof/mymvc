<?php

ini_set('display_errors', 1);


if (!$_COOKIE['site_lang']) {
   include_once 'application/controllers/checklang.php';
} else {
    $GLOBALS["site_lang"] = $_COOKIE['site_lang'];
}
require_once 'application/bootstrap.php';
