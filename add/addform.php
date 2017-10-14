<?php

include_once 'header.html';
include_once '../application/core/dbconn.php';
if (!filter_input(INPUT_GET, 'action') && !filter_input(INPUT_GET, 'id')) {

    $db = dbConn();

    $sql = $db->prepare('SELECT DISTINCT cat FROM production');
    $sql->execute();
    while ($row = $sql->fetch()) {
        $catarr .= $row['cat'] . ', ';
    }

    $sql = $db->prepare('SELECT DISTINCT tyype FROM production');
    $sql->execute();
    while ($row = $sql->fetch()) {
        $tyypearr .= $row['tyype'] . ', ';
    }

    $db = NULL;

    include_once 'form.html';
} else {

        switch (filter_input(INPUT_GET, 'action')) {
            case 'success':
                include_once 'success.html';
                break;
            default :
                include_once 'failed.html';
                break;
        }

}





include_once 'footer.php';
