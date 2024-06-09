<?php 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="View/style.css">
</head>
<body>
    <h1>Listar Clientes</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($result as $infoClientes)
                    {
                ?>
                <tr>
                    <td><?=$infoClientes['idCliente']?></td>
                    <td><?=$infoClientes['nomeCliente']?></td>
                    <td><?=$infoClientes['cpf']?></td>
                    <td><?=$infoClientes['email']?></td>
                    <td><?=$infoClientes['senha']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>