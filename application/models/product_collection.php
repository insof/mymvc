<?php

class Product_Collection implements Iterator {

    public $_items;
    private $position;
    protected $_categoryName;

    public function setCategory($cat) {
        $this->_categoryName = $cat;
    }

    public function getData() {
        return $this->_items;
    }

    public function __construct() {
        $this->position = 0;
    }

    public function current() {
        return $this->_items[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function rewind() {
        $this->position = 0;
        // init $items
        if ($this->_categoryName) {

            include_once 'application/core/dbconn.php';
            $db = dbConn();

            $sql = $db->prepare('SELECT id, caten, nameru, nameen, namede, nameit FROM production WHERE `caten`=?');
            $sql->execute(array($this->_categoryName));
            $db = NULL;

            while ($row = $sql->fetch()) {
                $this->_items[] = new Product($row);
            }
            // $select->where(categoryId = $this_categoryId)
        }
        // foreach ($SQL_FETCH_ALL as $row) 
        // $this->_items[] = new Product($row);
    }

    public function valid() {
        return isset($this->_items[$this->position]);
    }

    function catCheck($cat) {

        if (!preg_match("/^[aA-zZ]+$/", $cat)) {
            print '<center>Ошибка! Недопустимые символы в названии категории!</center><br/>';
            die();
        } else {
            include_once 'application/core/dbconn.php';

            $db = dbConn();

            $sql = $db->prepare('SELECT COUNT(1) FROM production WHERE `caten`=?');
            $sql->execute(array($cat));
            $select = $sql->fetch(PDO::FETCH_ASSOC);
            $db = NULL;
            if (!$select['COUNT(1)']) {
                print '<center>Ошибка! Такого класса не существует!</center><br/>';
                die();
            } else {
                return $cat;
            }
        }
    }

    public function getCurrentLanguage() {
        return $GLOBALS['site_lang'];
    }

}
