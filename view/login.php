<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | GamerShop</title>

    <link rel="stylesheet" href="view/css/style.css"/>
    <link rel="stylesheet" href="view/css/stylelogin.css"/>

</head>
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
                    <form action="login.php" method="get">
                        <input type="text" placeholder="Busque seu jogo..." id="search"/>
                    </section>
                    <aside id="pesquisa1">
                        <img id="pesquisadesktop" src="../view/imagens/imgpesquisar_resized.png"/>
                    </aside>    
                </div>
                <ul id="entrar-registro">
                    <li><a href="login.php">Entrar/Registrar</a></li>
                </ul>
        
            </nav>
        
            <img id="logo" src="../view/imagens/G mer (200 x 112 px).png"/>
        
            <div id="sacoladesktop">
            <li id="geral"><a href="carrinho.php"> <img src="../view/imagens/sacola(60 x 40).png"/></a></li>
            </div>
        
        </header>

    <section id="corpo">

        <h2>Entre</h2>
        <h5>e aproveite descontos exclusivos!</h5>

        <input type="text" placeholder="E-mail" id="email" required/>
    
        <input type="password" placeholder="Senha" id="senha" required/>

        <!--colocar um link--> <p id="perdeusenha"><a id="perdeusenha" href="recuperarsenha.php">esqueceu a senha?</a></p>

        <!--colocar um botão--> <p id="entrar"><button id="entrarbutton">ENTRAR</button></p>

        <p id="semconta">Não tem conta?</p>

        <!--colocar link--> <p id="registrar"><a  id="registrar" href="registrar.php">Criar uma conta</a></p>

        <!--colocar um texto de termos, para enviar para outra página-->
        </form>
    </section>

    </div>

    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>