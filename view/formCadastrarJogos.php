<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo | GamerShop</title>

    <link rel="stylesheet" href="view/css/style.css"/>
    <link rel="stylesheet" href="view/css/styleregistro.css"/>

</head>
<body>
    <div id="interface">

        <header id="cabecalho">
            <h1>Cadastrar Novo Jogo</h1>
        </header>
        
        <section id="corporegistro">

            <form action="index.php?url=cadastrarjogo" method="post">
                <input type="text" placeholder="Nome do Jogo" id="nomeJogo" name="nomeJogo" required/>

                <input type="text" placeholder="Valor" id="valor" name="valor" required/>

                <p><button id="criarbutton">Cadastrar Jogo</button></p>
            </form>
            
        </section>
        
    </div>
    
    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>

</body>
</html>