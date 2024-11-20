<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <div>
    <form method="POST" action="rotas.php?action=registro">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <label>Data de nascimento:</label>
    <input type="date" name="dataNasc" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>senha:</label>
    <input type="password" name="senha" required>
    <label>endereço:</label>
    <textarea name="endereço" required></textarea>
    <button type="submit">Registrar</button>
</form>
    </div>
</body>
</html>

