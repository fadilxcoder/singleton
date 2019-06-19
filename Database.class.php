<?php

class Database{

    private $_host      = '';
    private $_dbname    = '';
    private $_username  = '';
    private $_password  = '';
    private $_pdo;
    private static $_instance = null;

    private function __construct()
    {
        $this->_pdo = new PDO("mysql:host=".$this->_host.";dbname=".$this->_dbname.";charset=utf8", $this->_username, $this->_password);
    }

    public static function getInstance()
    {
        if(!self::$_instance)
        {
            self::$_instance =  new Database();
        }
        return self::$_instance;
    }

    public function getConnection()
	{
		return $this->_pdo;
	}
}