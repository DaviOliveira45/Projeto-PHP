<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/styletable.css">
</head>
<body>
    <h1>Listar Clientes</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $infoJogos){ ?>
                <tr>
                    <td><?= $infoJogos['idJogo'] ?></td>
                    <td><?= $infoJogos['nomeJogo'] ?></td>
                    <td><?= $infoJogos['valor'] ?></td>
                    <td>
                        <a href="index.php?url=EDITARJOGO&id=<?= $infoJogos['idJogo'] ?>">Editar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
