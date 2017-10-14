<?php

class Product extends Model {

    protected function _init() {
        $this->_tableName = 'production';
    }

    function prodCheck($prod) {

        if (preg_match('/^[0-9]{1,3}$/', $prod)) {
            include_once 'application/core/dbconn.php';

            $db = dbConn();

            $sql = $db->prepare('SELECT id FROM ' . $this->_tableName . '');
            $sql->execute();
            $select = $sql->fetchAll(PDO::FETCH_COLUMN);
            $db = NULL;
            $numb = array_pop($select);
            if ($prod > $numb) {
                print '<center>Ошибка! Такого продукта не существует!</center><br/>';
                die();
            } else {
                return $prod;
            }
        } else {
            print '<center>Ошибка! Недопустимые символы в номере продукта!</center><br/>';
            die();
        }
    }

}
