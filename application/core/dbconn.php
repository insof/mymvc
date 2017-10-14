<?php

function dbConn() {

    $user = 'insof';
    $pass = '148549153';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=erika_karp', $user, $pass);
        $dbh->exec('SET CHARACTER SET utf8');
    } catch (PDOException $e) {
        print "Ошибка!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $dbh;
}