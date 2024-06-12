<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
    <link rel="stylesheet" href="view/css/stylecarrinho.css"/>
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
            <form action="index.php" method="get">
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

    
<div id="container">
        <div class="carrinho">
            <div class="cabecalho-carrinho">
                <button onclick="history.back()">
                    <i class="bx bx-chevron-left"></i>
                </button>
                <h3>Meu Carrinho</h3>
            </div>
            <ul id="carrinho-itens">
                <!-- Itens do carrinho serão adicionados aqui -->
            </ul>
            <div class="total-carrinho">
                <p>Total: <span id="valor-total">R$0,00</span></p>
            </div>
            <button class="finalizar-compra" onclick="finalizarCompra()">Finalizar Compra</button>
            <p id="mensagem-compra" style="display: none; color: green;">Compra efetuada com sucesso!</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Recuperar os itens do carrinho do localStorage
            let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

            // Selecionar o elemento da lista
            let listaCarrinho = document.getElementById('carrinho-itens');
            let valorTotal = 0;

            // Adicionar cada item do carrinho à lista
            carrinho.forEach((item, index) => {
                let listItem = document.createElement('li');
                listItem.classList.add('carrinho-itens');
                listItem.innerHTML = `
                    <img src="${item.imagem}" alt="${item.nome}" />
                    <div>
                        <p>${item.nome}</p>
                        <p>${item.preco}</p>
                    </div>
                    <button onclick="removerDoCarrinho(${index})">Remover</button>
                `;
                listaCarrinho.appendChild(listItem);

                // Calcular o valor total
                valorTotal += parseFloat(item.preco.replace('R$', '').replace(',', '.'));
            });

            // Atualizar o valor total no DOM
            document.getElementById('valor-total').innerText = `R$${valorTotal.toFixed(2).replace('.', ',')}`;
        });

        function removerDoCarrinho(index) {
            // Recuperar os itens do carrinho do localStorage
            let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

            // Remover o item do carrinho
            carrinho.splice(index, 1);

            // Salvar de volta no localStorage
            localStorage.setItem('carrinho', JSON.stringify(carrinho));

            // Recarregar a página para atualizar a lista de itens
            location.reload();
        }

        function finalizarCompra() {
            // Limpar o carrinho do localStorage
            localStorage.removeItem('carrinho');

            // Mostrar mensagem de compra efetuada
            document.getElementById('mensagem-compra').style.display = 'block';

            // Esvaziar a lista de itens no DOM
            document.getElementById('carrinho-itens').innerHTML = '';

            // Resetar o valor total
            document.getElementById('valor-total').innerText = 'R$0,00';
        }
    </script>

    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>


    
