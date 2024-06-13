<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | GamerShop</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/stylelogin.css"/>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <nav id="menu">
                <h1>Menu principal</h1>
                <ul type="square">
                    <li id="geral"><a href="home.php">Home</a></li>
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
                    <li><a href="index.php?url=LOGIN">Entrar/Registrar</a></li>
                </ul>
            </nav>
            <img id="logo" src="imagens/G mer (200 x 112 px).png"/>
            <div id="sacoladesktop">
                <img src="imagens/sacola(60 x 40).png"/>
            </div>
        </header>
        <section id="corpo">
            <h2>Entre</h2>
            <h5>e aproveite descontos exclusivos!</h5>
            <form action="../model/testeLogin.php" method="POST">
                <input type="text" name="email" placeholder="E-mail" id="email" />
                <input type="password" name="senha" placeholder="Senha" id="senha" />
                <p id="perdeusenha"><a id="perdeusenha" href="recuperarsenha.html">esqueceu a senha?</a></p>
                <input type="submit" class="entrar" name="enviar" value="ENTRAR">
            </form>
            <p id="semconta">Não tem conta?</p>
            <p id="registrar"><a id="registrar" href="../index.php?url=CADASTRO">Criar uma conta</a></p>
        </section>
    </div>
    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>
