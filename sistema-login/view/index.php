<?php

session_start();


if (isset($_SESSION['usuario'])) {
    echo "Bem-vindo, {$_SESSION['usuario']['nome']}! <a href='index.php'>Sair</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <div class="container">
        <h2>Sistema de Login</h2>
        <form method="POST" action="rotas.php?action=login">
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>senha:</label>
    <input type="password" name="senha" required>
    <button type="submit">Login</button>
    <p>Não tem uma conta? <a href="registro.php">Cadastre-se</a></p>
    </form>
    </div>
</body>
</html>