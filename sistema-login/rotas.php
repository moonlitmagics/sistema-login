<?php

require_once "controller/UserController.php";
require_once "model/Database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'registro') {
    
    $dados = [
        'nome' => $_POST['nome'],
        'datanasc' => $_POST['datanasc'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha'],
        'endereco' => $_POST['endereco']
    ];

  
    $resultado = Usuario::validarCadastro($dados);

    if ($resultado === true) {

        $usuario = new Usuario($dados['nome'], $dados['datanasc'], $dados['email'], $dados['senha'], $dados['endereco']);
        

        if ($usuario->criar()) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro ao registrar o usuário. Tente novamente.";
        }
    } else {

        echo "Erro: " . $resultado;
    }
}
    
?>

