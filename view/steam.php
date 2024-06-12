<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam | GamerShop</title>

    <link rel="stylesheet" href="view/css/stylesteam.css"/>
    <link rel="stylesheet" href="view/css/style.css"/>
    

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
                <input type="text" placeholder="Busque seu jogo..." id="search"/>
            </section>
            <aside id="pesquisa1">
                <img id="pesquisadesktop" src="../view/imagens/imgpesquisar_resized.png"/>
            </aside>    
        </div>
        <ul id="entrar-registro">
            <li><a href="perfil.php">Perfil</a></li>
        </ul>

    </nav>

    <img id="logo" src="../view/imagens/G mer (200 x 112 px).png"/>

    <div id="sacoladesktop">
    <li id="geral"><a href="carrinho.php"> <img src="../view/imagens/sacola(60 x 40).png"/></a></li>
    </div>

  </header>


    <div id="fundosteam">
        <img src="../view/imagens/fundosteamatualizado2.0.jpg"/>
    </div>


    <section id="corposteam">
        <section class="groupcards">
            <div class="cards">
            <img src="../view/imagens/stretched-1366-768-928956.jpg"/>
                <p class="titulojogo"><a href="../descricaoJogos/syberpunk.html">CyberPunk 2077</a></p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$199,90</p>
                <button class="comprar" onclick="adicionarAoCarrinho('CyberPunk 2077', 'R$199,90', '../view/imagens/stretched-1366-768-928956.jpg')">Adicionar ao adicionar</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-1221680.jpg"/>
                <p class="titulojogo"><a href="../descricaoJogos/hogwartsLegacy.html">Hogwarts Legacy</a></p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$219,90</p>
                <button class="comprar" onclick="adicionarAoCarrinho('Hogwarts Legacy', 'R$219,90', '../view/imagens/stretched-1366-768-1221680.jpg')">Adicionar ao adicionar</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-1291883.png"/>
                <p class="titulojogo"><a href="../descricaoJogos/eldenring.html">Elden Ring</a></p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$249,90</p>
                <button class="comprar"onclick="adicionarAoCarrinho('Elder Ring', 'R$249,90', '../view/imagens/stretched-1366-768-1291883.png')">Adicionar ao adicionar</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-1305512.png"/>
                <p class="titulojogo">Residente Evil 4 Remake</p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$199,90</p>
                <button class="comprar" onclick="adicionarAoCarrinho('Resident Evil 4 Remake', 'R$199,90', '../view/imagens/stretched-1366-768-1305512.png')">Adicionar ao adicionar</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-424912.jpg"/>
                <p class="titulojogo">The Witcher 3</p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$209,90</p>
                <button class="comprar" onclick="adicionarAoCarrinho('The Witcher 3', 'R$209,90', '../view/imagens/stretched-1366-768-424912.jpg')">Adicionar ao adicionar</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-782781.png"/>
                <p class="titulojogo">Stardew Valley</p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$79,90</p>
                <button class="comprar" onclick="adicionarAoCarrinho('Stardew Valley', 'R$79,70', '../view/imagens/stretched-1366-768-782781.png')">Adicionar ao Carrinho</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-168258.jpg"/>
                <p class="titulojogo">The Elder Scrolls V</p>
                <p class="titulojogolongo"><br></p>
                <p class="preco">R$199,99</p>
                <button class="comprar" onclick="adicionarAoCarrinho('The Elder Scrolls V', 'R$199,99', '../view/imagens/stretched-1366-768-168258.jpg')">Adicionar ao Carrinho</button>
            </div>
            <div class="cards">
                <img src="../view/imagens/stretched-1366-768-749806.png"/>
                <p class="titulojogo">Red Dead</p>
                <p class="titulojogolongo">Redemption 2</p>
                <p class="preco">R$199,90</p>
                <button class="comprar" onclick="adicionarAoCarrinho('Red Dead', 'R$199,90', '../view/imagens/stretched-1366-768-928956.jpg')">Adicionar ao Carrinho</button>
            </div>
        </section>

    </section>

    <script>
        function adicionarAoCarrinho(nome, preco, imagem) {
            // Recuperar os itens do carrinho do localStorage
            let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

            // Adicionar o novo item ao carrinho
            carrinho.push({ nome: nome, preco: preco, imagem: imagem });

            // Salvar de volta no localStorage
            localStorage.setItem('carrinho', JSON.stringify(carrinho));

            // Feedback ao usuário (opcional)
            alert('Item adicionado ao carrinho!');
        }
    </script>


    </div>

    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>