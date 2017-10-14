<?php

include_once 'header.html';
include_once '../application/core/dbconn.php';

$db = dbConn();

$sql = $db->prepare('SELECT * FROM production');
$sql->execute();

print '<hr> 
        <div class="container">
        <div class="row">

        <div class="col-xl-12 col-md-12">
        <table id="basetable" class="table table-striped table-hover"> 
        <tr>
            <td style="width:3%";>№</td><td style="width:10%";>Название RU</td><td style="width:7%";>Название LAT</td><td style="width:7%";>Название EN</td><td style="width:7%";>Название IT</td><td style="width:7%";>Название DE</td><td style="width:7%";>Тип упаковки</td><td style="width:3%";>Вес упаковки</td><td style="width:3%";>Мин заказ</td><td style="width:5%";>Тип</td><td style="width:3%";>Размер</td><td style="width:10%";>Инфо</td><td style="width:5%";>Удалить</td>
        </tr>';

while ($row = $sql->fetch()) {
    print '<tr>
            <td style="width:3%";>' . $row['id'] . '</td><td style="width:10%";>' . $row['nameru'] . '</td><td style="width:7%";>' . $row['namelat'] . '</td><td style="width:7%";>' . $row['nameeng'] . '</td><td style="width:7%";>' . $row['nameit'] . '</td><td style="width:7%";>' . $row['namede'] . '</td><td style="width:7%";>' . $row['packtype'] . '</td><td style="width:3%";>' . $row['packaging'] . '</td><td style="width:3%";>' . $row['minorder'] . '</td><td style="width:5%";>' . $row['tyype'] . '</td><td style="width:3%";>' . $row['len'] . '</td><td style="width:10%";>' . $row['info'] . '</td><td style="width:5%";>'
            . '<form action="delitem.php" method=POST><input type="hidden" name="idtodelete" value=' . $row['id'] . '><input type="submit" class="btn-sm btn" value="Удалить"></form></td>
        </tr>';
};

print ' </table>
    </div>

    </div>
    </div>
    <hr>';

include_once 'footer.php';
