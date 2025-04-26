<?php

//função para fazer login

class LoginModel
{
    protected $conn;
    protected $tabela = "login";

    public function __construct()
    {
        $db = New Database();
        $this-conn = $db->connect();
    }

    public function login($email){
        $query = "SELECT * FROM $this->tabela WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->rowCount() > 0; // retorna true se for o login funcionar.
    }

    public function Cadastrar($email){
        $query = "INSERT INTO $this->tabela('email')VALUES(':email')";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
}



?>