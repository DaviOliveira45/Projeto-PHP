<?php
    //Usar antes de implementar a tabela para ver se os dados estão vindo do banco
   //print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/styletable.css">
</head>
<body>
    <h1>Excluir Clientes</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>Excluir?</th>
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
                    <td>
                    <!--<input type="text" name="id" id="id" value="<?php echo $infoClientes['idCliente']?>">-->
                    <a href="excluir?id=<?php echo $infoClientes['idCliente'];?>">Excluir</a>
                    </td>
                </tr>
            <?php } 
            ?>
            </tbody>
        </table>
        
    </div>    
</body>
</html>