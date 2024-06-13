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
    <h1>Excluir Jogos</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Excluir?</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $infoJogos){ ?>
                <tr>
                    <td><?= $infoJogos['idJogo'] ?></td>
                    <td><?= $infoJogos['nomeJogo'] ?></td>
                    <td><?= $infoJogos['valor'] ?></td>
                    <td>
                    <?php echo $infoJogos['idJogo']?>">
                    <a href="excluirjogo?id=<?php echo $infoJogos['idJogo'];?>">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>    
</body>
</html>