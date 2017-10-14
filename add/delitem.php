<?php
ini_set('display_errors', 1);
include_once 'header.html';
include_once '../application/core/dbconn.php';

if (filter_input(INPUT_POST, 'delYes')) {

    $db = dbConn();
    $delId = filter_input(INPUT_POST, 'idtodelete');

    $sql = $db->prepare('DELETE FROM production WHERE id=?');
    $res = $sql->execute(array($delId));
    $db = NULL;

    if ($res) {
        print 'Success</br>';
        print '<a href="tableview.php"><button style="color:white;" class="btn-sm btn">Назад</button></a>';
        exit;
    } else {
        print 'Failed';
    }
} else {
    if (!filter_input(INPUT_POST, 'idtodelete')) {
        print 'НЕ ЗАДАН ТОВАР ДЛЯ УДАЛЕНИЯ';
    } else {
        print '<hr>
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-md-3">
            <a href="tableview.php"><button class="btn-lg btn" style="color: white";>Назад</button></a>
        </div>
        <div class="col-xl-6 col-md-6">
            <form action=delitem.php method=POST>

                <fieldset>
                    <legend>Для удаления нажмите "Удалить", для возврата нажмите "Назад".</legend></br>

                    <p>
                        <input type="radio" name="delYes" value="1">Да</br>
                        <input type="radio" name="delYes"  value="0">Нет</br>
                        <input type="hidden" name="idtodelete" value=' . filter_input(INPUT_POST, 'idtodelete') . '>
                        <input class="btn-lg btn" type="submit" style="float: right;" value="Удалить">
                    </p>
                </fieldset>

            </form>
        </div>
    </div>
</div>
<hr>';
    }
}
