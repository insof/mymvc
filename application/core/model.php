<?php

abstract class Model {

    protected $_tableName;
    protected $_idFieldName;

    public function __construct($data = array()) {
        $this->_init();
        if (!$this->_tableName) {
            throw new Exception('Object not initialized properly, table name is missing');
        }

        if ($data) {
            $this->setData($data);
        }
    }

    abstract protected function _init();

    public function getData() {
        return $this->_data;
    }

    public function setData($data) {
        $this->_data = $data;
    }

    public function load($id, $fieldName = null) {

        if (is_null($fieldName)) {
            $fieldName = $this->_idFieldName;
        }
        if (is_null($fieldName)) {
            $fieldName = 'id';
        }

        include_once 'application/core/dbconn.php';

        $db = dbConn();

        $sql = $db->prepare('SELECT * FROM ' . $this->_tableName . ' WHERE `id`=?');
        $sql->execute(array($id));
        $this->_data = $sql->fetch(PDO::FETCH_ASSOC);
        $db = NULL;
    }

    public function loadCat() {
        include_once 'application/core/dbconn.php';

        $db = dbConn();
        $sql = $db->prepare('SELECT DISTINCT caten, catru, catde, catit FROM ' . $this->_tableName . '');
        $sql->execute();

        $this->_data = $sql;
    }

    public function __call($name, $arguments) {
        
        $pieces = preg_split('/(?=[A-Z])/', $name);

        if ($pieces[0] === '__get' ) 
        {
        $curLang = $GLOBALS['site_lang'];
        $reqarr = array();
        array_push($reqarr, $curLang);
        $name = substr($name, 5);
        array_push($reqarr, $name);
        include_once 'application/core/dbconn.php';

        $db = dbConn();
        $sql = $db->prepare('SELECT trans FROM translate WHERE `lang`=? AND `val`=?');
        $sql->execute($reqarr);
        $res = $sql->fetch(PDO::FETCH_ASSOC);

        return $res['trans'];
        }
    }
    
    public function getCurrentLanguage() 
    {
        return $GLOBALS['site_lang'];
    }

}
