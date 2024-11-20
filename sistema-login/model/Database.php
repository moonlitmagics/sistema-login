<?php
class Database {

    const SERVIDOR = "localhost";
    const USUARIO = "root";
    const SENHA = "";
    const DATABASE = "sistema_login";

    public static function conexao() {
        $conexao = new mysqli(self::SERVIDOR, self::USUARIO, self::SENHA, self::DATABASE);

        if ($conexao->connect_error) {
            die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
        }

        return $conexao;
    }
}

?>