<?php

class Db {

    private $connect;
    private static $instance;

    private function __construct() {
        $dsn = 'mysql;host=localhost;dbname=db_name;charset=utf8';
        $this->connect = new PDO($dsn, 'user', 'password');
    }
    //Защита от клонирования
    private function __clone() {}
    //Защита от создания через unserialize 
    private function __wakeup() {}

    public static function getInstance() {
        if (empry(self::$instance)) 
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function querySql($sql) {
        $result =$this->connect->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
