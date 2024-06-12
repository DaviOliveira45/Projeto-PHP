<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/styleregistro.css">
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
    <div id="interface">

        <header id="cabecalho">

        <nav id="menu">
            <h1>Menu principal</h1>
            <ul type="square">
                <li id="geral"><a href="index.php">Home</a></li>
                <li id="geral"><a href="playstation.php">PlayStation</a></li>
                <li id="geral"><a href="steam.php">Steam</a></li>           
            </ul>
            <div id="campopesquisa">
                <section id="pesquisa">
                    <input type="text" placeholder="Busque seu jogo..." id="search"/>
                </section>
                <aside id="pesquisa1">
                    <img id="pesquisadesktop" src="imagens/imgpesquisar_resized.png"/>
                </aside>    
            </div>
            <ul id="entrar-registro">
                <li><a href="login.php">Entrar/Registrar</a></li>
            </ul>

        </nav>

        <img id="logo" src="imagens/G mer (200 x 112 px).png"/>

        <div id="sacoladesktop">
            <img src="imagens/sacola(60 x 40).png"/>
        </div>

        </header>

        <section id="corporegistro">

            <h2>Editar informações</h2>
            <h5></h5>
            <br>

            <?php 
                require_once('./model/verificacao.php');
            ?>

            <form method="post" action="index.php?url=ATUALIZARCLIENTE">
                <input type="hidden" name="idCliente" value="<?= $cliente['idCliente'] ?>">
                
                <input type="text" placeholder="Nome completo" id="nomeCliente" name="nomeCliente" value="<?= $cliente['nomeCliente'] ?>" >
                
                <input type="text" placeholder="CPF" id="cpf" name="cpf" value="<?= $cliente['cpf'] ?>" maxlength="14" onkeyup="mascaraCPF()">
                
                <input type="email" placeholder="E-mail" id="email" name="email" value="<?= $cliente['email'] ?>" >
                
                <input type="text" placeholder="Senha" id="senha" name="senha" value="<?= $cliente['senha'] ?>" >

                <p><button type="submit" name="atualizar" value="atualizar" id="criarbutton">ATUALIZAR DADOS</button></p>
                
            </form>

        </section>
    
    </div>
    
    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>
