<?php

require_once "ccontroller/Usercontroller.php";
require_once "model/Database.php";

class UserService {
   
    public static function verificar($email, $senha) {
      
        $usuario = Usuario::buscarPorEmail($email);

        if ($usuario && password_verify($senha, $usuario->senha)) {

            session_start();
            $_SESSION['usuario'] = [
                'nome' => $usuario->nome,
                'email' => $usuario->email,
            ];
            return true;
        }

        return false;
    }

    public static function cadastrarUsuario($usuario) {

        if (Usuario::buscarPorEmail($usuario->email)) {
            return false;
        }

        $usuario->senha = password_hash($usuario->senha, PASSWORD_BCRYPT);

    
        return $usuario->salvar();
    }

    public static function excluirUsuario($email) {
        $usuario = Usuario::buscarPorEmail($email);

        if ($usuario) {
            return $usuario->excluir();
        }

        return false;
    }

    public static function validarCadastro($dados) {
   
        foreach (['nome', 'datanasc', 'email', 'senha', 'endereco'] as $campo) {
            if (empty($dados[$campo])) {
                return false;
            }
        }

        if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if (strlen($dados['senha']) < 6) {
            return false;
        }

        return true;
    }

    $dados = $_POST; // Dados vindos do formulário

    $resultado = Usuario::validarCadastro($dados);

    if ($resultado === true) {
    // Se for true, os dados são válidos e você pode continuar com o cadastro
    // Processar o cadastro do usuário no banco
    } else {
        // Caso contrário, exibe a mensagem de erro
    echo $resultado;
    }

}

?>
