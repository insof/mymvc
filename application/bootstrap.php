<?php

require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
try {
    Route::start();
} catch (Exception $e) {
    print 'Exception: ' . $e->getMessage() . "\n";
}