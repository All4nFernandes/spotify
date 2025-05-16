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
        $query = "SELECT senha FROM $this->tabela WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $hash = $usuario['senha'];

            if (password_verify($senha, $hash)) {
                return true; // Senha confere
            }
        }

        return false; // Usuário não encontrado ou senha incorreta
    }

    public function Cadastrar($email, $senha)
    {
        $hash = password_hash($senha, PASSWORD_BCRYPT);
        $perfil = 'usuario';
        $query = "INSERT INTO $this->tabela(email, senha, perfil )VALUES( :email, :senha, :perfil)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $hash);
        $stmt->bindParam(":perfil", $perfil);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}



?>