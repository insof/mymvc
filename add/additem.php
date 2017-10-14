<?php

$input = array('cat', 'nameru', 'namelat', 'nameeng', 'nameit', 'namede', 'packtype', 'packaging', 'minorder', 'tyype', 'len', 'info');
$val = array();

foreach ($input as $key) {
    $val[$key] = filter_input(INPUT_POST, $key);
}

include_once '../application/core/dbconn.php';

$db = dbConn();

$sql = $db->prepare('INSERT INTO `production`(' . implode(',', $input) . ') VALUES (' . implode(',', array_fill(0, count($input), '?')) . ')');
$_val = array_values($val);

$res = $sql->execute($_val);

$sql = $db->prepare('SELECT * FROM production ORDER BY id DESC LIMIT 1');
$sql->execute();
$lastId = $sql->fetch(PDO::FETCH_ASSOC);


if ($res) {
    header('Location: addform.php?action=success&id=' . $lastId['id']);
    exit;
} else {
    header('Location: addform.php?action=failed');
    exit;
}