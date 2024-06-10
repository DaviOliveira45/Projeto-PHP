<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
    <link rel="stylesheet" href="../css/stylecarrinho.css"/>
</head>
<body>
    
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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Recuperar os itens do carrinho do localStorage
            let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

            // Selecionar o elemento da lista
            let listaCarrinho = document.getElementById('carrinho-itens');

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
            });
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
    </script>

    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>


    
