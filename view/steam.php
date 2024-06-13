<?php
session_start();

function calcularValorTotal($carrinho) {
    $valorTotal = 0;
    foreach ($carrinho as $item) {
        
        $precoNumerico = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
        $valorTotal += $precoNumerico;
    }
    return $valorTotal;
}


function adicionarAoCarrinho($nome, $preco, $imagem) {
    $_SESSION['carrinho'][] = [
        'nome' => $nome,
        'preco' => $preco,
        'imagem' => $imagem
    ];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['imagem'])) {
   
    adicionarAoCarrinho($_POST['nome'], $_POST['preco'], $_POST['imagem']);

    
    $_SESSION['mensagem'] = 'Item adicionado ao carrinho com sucesso!';

    
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

$carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
$valorTotal = calcularValorTotal($carrinho);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayStation | GamerShop</title>
    <link rel="stylesheet" href="../view/css/styleplaystation.css"/>
    <link rel="stylesheet" href="../view/css/style.css"/>

        
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mensagemSucesso = document.getElementById('mensagem-sucesso');
            if (mensagemSucesso) {
                setTimeout(function () {
                    mensagemSucesso.style.display = 'none';
                }, 3000);
            }
        });
    </script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam | GamerShop</title>
    <link rel="stylesheet" href="../view/css/stylesteam.css"/>
    <link rel="stylesheet" href="../view/css/style.css"/>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mensagemSucesso = document.getElementById('mensagem-sucesso');
            if (mensagemSucesso) {
                setTimeout(function () {
                    mensagemSucesso.style.display = 'none';
                }, 3000);
            }
        });
    </script>
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
                    <form method="post">
                        <input type="hidden" name="nome" value="CyberPunk 2077">
                        <input type="hidden" name="preco" value="R$199,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-928956.jpg">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-1221680.jpg"/>
                    <p class="titulojogo"><a href="../descricaoJogos/hogwartsLegacy.html">Hogwarts Legacy</a></p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$219,90</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="Hogwarts Legacy">
                        <input type="hidden" name="preco" value="R$219,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-1221680.jpg">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-1291883.png"/>
                    <p class="titulojogo"><a href="../descricaoJogos/eldenring.html">Elden Ring</a></p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$249,90</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="Elden Ring">
                        <input type="hidden" name="preco" value="R$249,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-1291883.png">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-1305512.png"/>
                    <p class="titulojogo">Residente Evil 4 Remake</p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$199,90</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="Residente Evil 4 Remake">
                        <input type="hidden" name="preco" value="R$199,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-1305512.png">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-424912.jpg"/>
                    <p class="titulojogo">The Witcher 3</p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$209,90</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="The Witcher 3">
                        <input type="hidden" name="preco" value="R$209,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-424912.jpg">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-782781.png"/>
                    <p class="titulojogo">Stardew Valley</p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$79,90</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="Stardew Valley">
                        <input type="hidden" name="preco" value="R$79,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-782781.png">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-168258.jpg"/>
                    <p class="titulojogo">The Elder Scrolls V</p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$199,99</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="The Elder Scrolls V">
                        <input type="hidden" name="preco" value="R$199,99">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-168258.jpg">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="cards">
                    <img src="../view/imagens/stretched-1366-768-749806.png"/>
                    <p class="titulojogo">Red Dead Redemption 2</p>
                    <p class="titulojogolongo"><br></p>
                    <p class="preco">R$199,90</p>
                    <form method="post">
                        <input type="hidden" name="nome" value="Red Dead Redemption 2">
                        <input type="hidden" name="preco" value="R$199,90">
                        <input type="hidden" name="imagem" value="../view/imagens/stretched-1366-768-749806.png">
                        <button type="submit" class="comprar">Adicionar ao Carrinho</button>
                    </form>
                </div>

            </section>
        </section>

        <?php if (isset($_SESSION['mensagem'])) : ?>
            <div class="mensagem-sucesso" id="mensagem-sucesso">
                <?php echo $_SESSION['mensagem']; ?>
            </div>
            <?php unset($_SESSION['mensagem']); ?>
        <?php endif; ?>

        <footer id="rodape">
            <p>GamerShop &reg;</p>
        </footer>
    </div>
</body>
</html>
