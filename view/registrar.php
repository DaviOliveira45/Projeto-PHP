<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar | GamerShop</title>

    <link rel="stylesheet" href="view/css/style.css"/>
    <link rel="stylesheet" href="view/css/styleregistro.css"/>

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
                <form action="registrar.php" method="get">
                <input type="text" placeholder="Busque seu jogo..." id="search"/>
            </section>
            <aside id="pesquisa1">
                <img id="pesquisadesktop" src="../view/imagens/imgpesquisar_resized.png"/>
            </aside>    
        </div>
        <ul id="entrar-registro">
            <li> echo <a href="login.php">Entrar/Registrar</a></li>
        </ul>

    </nav>

    <img id="logo" src="../view/imagens/G mer (200 x 112 px).png"/>
    <img id="logomobile" src="../view/imagens/logo_gamershop (63 x 63 px).png"/>

    <div id="submenubotao">
        <img src="../view/imagens/imgbotao-att.png"/>
    </div>

    <div id="sacoladesktop">
        <img src="../view/imagens/sacola(60 x 40).png"/>
    </div>

    </header>
    
        <section id="corporegistro">

        <h2>Crie sua conta</h2>
        <h5>e concorra a promoções incríveis!</h5>

        <input type="text" placeholder="Nome completo" id="nome"/>

        <input type="text" maxlength="11" placeholder="CPF" id="cpf"/>

        <input type="email" placeholder="E-mail" id="email"/>

        <input type="password" placeholder="Senha" id="senha"/>

        <input type="password" placeholder="Confirmar senha" id="confirmasenha"/>

        <div id="check-box">
            <section id="corpocheck">
                <input type="checkbox" id="termosuso"/>
                <label for="termosuso" class="checkpersonalizado"></label>
            </section>
            <aside id="textolateral">
                <p>Eu li e concordo com os <a href="termosdeuso.html">Termos de Uso</a> e <a href="politicadeprivacidade.html">Política de Privacidade</a>. A GamerShop não coleta intencionalmente dados de crianças menores de 13 anos de idade.</p>
            </aside>
        </div>

        <p><button id="criarbutton">CRIAR CONTA</button></p>

        <p id="comconta">Já tem conta?</p>

        <p id="login"><a  id="login" href="login.php">Entrar na conta</a></p>
        
            </form>
        </section>
    
        </div>
    
        <footer id="rodape">
            <p>GamerShop &reg;</p>
        </footer>



</body>
</html>