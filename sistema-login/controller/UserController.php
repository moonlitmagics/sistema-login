<?php
require_once "model/Database.php"; 

class Usuario {
    protected $nome;
    protected $datanasc;
    protected $email;
    protected $senha;
    protected $endereco;

    public function __construct($nome, $datanasc, $email, $senha, $endereco) {
        $this->nome = $nome;
        $this->datanasc = $datanasc;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_BCRYPT); 
        $this->endereco = $endereco;
    }

    public function criar() {
        return "INSERT INTO usuarios (nome, datanasc, email, senha, endereco) VALUES ('{$this->nome}', '{$this->datanasc}', '{$this->email}', '{$this->senha}', '{$this->endereco}');";
    }

    public function ler() {
        return "SELECT * FROM usuarios WHERE email = '{$this->email}';";
    }

    public function atualizar($nome_atualizado, $endereco_atualizado) {
        return "UPDATE usuarios SET nome = '{$nome_atualizado}', endereco = '{$endereco_atualizado}' 
                WHERE email = '{$this->email}';";
    }

    public function deletar() {
        return "DELETE FROM usuarios WHERE email = '{$this->email}';";
    }
}

?>