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
    <h1>Lista de Clientes</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $infoClientes){ ?>
                <tr>
                    <td><?= $infoClientes['idCliente'] ?></td>
                    <td><?= $infoClientes['nomeCliente'] ?></td>
                    <td><?= $infoClientes['cpf'] ?></td>
                    <td><?= $infoClientes['email'] ?></td>
                    <td><?= $infoClientes['senha'] ?></td>
                    <td>
                        <a style="margin-right: 20px" href="index.php?url=EDITAR&id=<?= $infoClientes['idCliente'] ?>">Editar</a>
                        <a style="margin-right: -35px;" href="index.php?url=EXCLUIR&id=<?= $infoClientes['idCliente'] ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</a>
                    </td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
