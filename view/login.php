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
                    <li id="geral"><a href="index.html">Home</a></li>
                    <li id="geral"><a href="playstation.html">PlayStation</a></li>
                    <li id="geral"><a href="steam.html">Steam</a></li>           
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
                    <li><a href="login.html">Entrar/Registrar</a></li>
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

        <form action="process_login.php" method="POST">
            <input type="text" placeholder="E-mail" id="email"/>
            <input type="password" placeholder="Senha" id="senha"/>
            <!--colocar um link--> <p id="perdeusenha"><a id="perdeusenha" href="recuperarsenha.html">esqueceu a senha?</a></p>
            <!--colocar um botão--> <p id="entrar"><button id="entrarbutton">ENTRAR</button></p>
        </form>
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
                echo '<p style="color: red;">Credenciais inválidas. Por favor, tente novamente.</p>';
            }
        ?>
        <p id="semconta">Não tem conta?</p>
        <!--colocar link--> <p id="registrar"><a  id="registrar" href="registrar.html">Criar uma conta</a></p>
        <!--colocar um texto de termos, para enviar para outra página-->

    </section>

    </div>

    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>