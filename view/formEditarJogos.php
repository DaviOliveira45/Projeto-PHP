<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
    <link rel="stylesheet" href="View/style.css">
</head>
<body>
    <h1>Editar Jogo</h1>
    <form method="post" action="index.php?url=ATUALIZARJOGO">
        <input type="hidden" name="idJogo" value="<?= $jogo['idJogo'] ?>">
        <label for="nomeJogo">Nome:</label>
        <input type="text" id="nomeJogo" name="nomeJogo" value="<?= $jogo['nomeJogo'] ?>">
        <br>
        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" value="<?= $jogo['valor'] ?>">
        <br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>