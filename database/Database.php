<?php

class Database
{
    private $host;
    private $port = "3306";
    private $dbName;
    private $user;
    private $password;

    public function __construct()
    {
        // Detecta se está rodando localmente (XAMPP) ou no InfinityFree
        if ($_SERVER['HTTP_HOST'] == 'localhost') {
            // Ambiente LOCAL (XAMPP)
            $this->host = "localhost";
            $this->dbName = "spotify"; // 
            $this->user = "root";
            $this->password = "";
        } else {
            // Ambiente InfinityFree (ONLINE)
            $this->host = "sql309.infinityfree.com";
            $this->dbName = "if0_39580148_kurosound_db";
            $this->user = "if0_39580148";
            $this->password = "PWzYxcSAbylAQB";
        }
    }

    public function conectar()
    {
        try {
            $url = "mysql:host={$this->host};port={$this->port};dbname={$this->dbName};charset=utf8";
            $conn = new PDO($url, $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}

?>