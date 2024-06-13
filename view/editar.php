<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="View/style.css">
</head>
<script>
    function mascaraCPF() 
    {
        var cpf = document.getElementById('cpf');
        if(cpf.value.length == 3 || cpf.value.length == 7)
        {
          cpf.value += ".";
        }
        else if(cpf.value.length == 11)
        {
          cpf.value += "-";
        }
    }
</script>
<body>
    <h1>Editar Cliente</h1>
    <form method="post" action="index.php?url=ATUALIZARCLIENTE">
        <input type="hidden" name="idCliente" value="<?= $cliente['idCliente'] ?>">
        <label for="nomeCliente">Nome:</label>
        <input type="text" id="nomeCliente" name="nomeCliente" value="<?= $cliente['nomeCliente'] ?>" >
        <br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?= $cliente['cpf'] ?>" maxlength="14" onkeyup="mascaraCPF()">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $cliente['email'] ?>" >
        <br>
        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha" value="<?= $cliente['senha'] ?>" >
        <br>
        <input type="submit" name="atualizar" value="atualizar">
    </form>
</body>
</html>
