<?php

function dbConn() {

    $user = 'erika_karp';
    $pass = 'KbaQ5Uh6I';
    try {
        $dbh = new PDO('mysql:host=db14.freehost.com.ua;dbname=erika_karp', $user, $pass);
        $dbh->exec('SET CHARACTER SET utf8');
    } catch (PDOException $e) {
        print "Ошибка!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $dbh;
}