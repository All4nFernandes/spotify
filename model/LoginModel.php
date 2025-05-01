<?php

include_once __DIR__ . '\..\database\Database.php';

//função para fazer login

class LoginModel
{
    protected $conn;
    protected $tabela = "login";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function login($email, $senha)
    {
        $query = "SELECT * FROM $this->tabela WHERE email = :email AND senha = :senha";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        return $stmt->rowCount() > 0; // retorna true se for o login funcionar.
    }

    public function Cadastrar($email, $senha)
    {
        $query = "INSERT INTO $this->tabela('email, senha')VALUES(':email, :senha')";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}



?>