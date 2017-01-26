<?php
class Conexion extends mysqli {
    
    public function __construct() {
        $host = '127.0.0.1';
        $username = 'root';
        $passwd = 'toor';
        $dbname = 'udom';
        $port = '3306';
        parent::__construct($host,$username,$passwd,$dbname,$port);
    }

    public function __construct1($host,$username,$passwd,$dbname,$port) {
        parent::__construct($host,$username,$passwd,$dbname,$port);
    }
}

// $cnn = new Conexion();
// var_dump($cnn);