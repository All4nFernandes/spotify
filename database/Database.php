<?php

class Database
{

    private $host = "sql309.infinityfree.com";
    private $port = "3306";
    private $dbName = "if0_39580148_kurosound_db";
    private $user = "if0_39580148";
    private $password = "PWzYxcSAbylAQB";

    public function conectar()
    {
        $url = "mysql:host=$this->host;port=$this->port;dbname=$this->dbName";
        $conn = new PDO($url, $this->user, $this->password);
        return $conn;
    }

}


?>