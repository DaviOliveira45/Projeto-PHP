<?php
session_start();

// Função para calcular o valor total do carrinho
function calcularValorTotal($carrinho) {
    $valorTotal = 0;
    foreach ($carrinho as $item) {
        // Remove "R$" e converte vírgulas para pontos para permitir cálculos corretos
        $precoNumerico = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
        $valorTotal += $precoNumerico;
    }
    return $valorTotal;
}

// Inicializar o carrinho na sessão se não estiver definido
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Função para adicionar item ao carrinho
function adicionarAoCarrinho($nome, $preco, $imagem) {
    $_SESSION['carrinho'][] = [
        'nome' => $nome,
        'preco' => $preco,
        'imagem' => $imagem
    ];
}

// Adicionar item ao carrinho via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['imagem'])) {
        adicionarAoCarrinho($_POST['nome'], $_POST['preco'], $_POST['imagem']);
        header('Location: index.php');
        exit();
    }
    
    // Remover item do carrinho
    if (isset($_POST['remover'])) {
        $index = intval($_POST['remover']);
        if (isset($_SESSION['carrinho'][$index])) {
            unset($_SESSION['carrinho'][$index]);
            $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
    }
    
    // Finalizar compra
    if (isset($_POST['finalizar'])) {
        $_SESSION['carrinho'] = [];
    }
}

$carrinho = $_SESSION['carrinho'];
$valorTotal = calcularValorTotal($carrinho);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <link rel="stylesheet" href="../view/css/stylecarrinho.css"/>
</head>
<body>
    <div id="container">
        <div class="carrinho">
            <div class="cabecalho-carrinho">
                <button onclick="history.back()">
                    <i class="bx bx-chevron-left"></i>
                </button>
                <h3>Meu Carrinho</h3>
            </div>
            <ul id="carrinho-itens">
                <?php foreach ($carrinho as $index => $item): ?>
                    <li class="carrinho-itens">
                        <img src="<?php echo $item['imagem']; ?>" alt="<?php echo $item['nome']; ?>" />
                        <div>
                            <p><?php echo $item['nome']; ?></p>
                            <p><?php echo $item['preco']; ?></p>
                        </div>
                        <form method="post" style="display:inline;">
                            <button type="submit" name="remover" value="<?php echo $index; ?>">Remover</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="total-carrinho">
                <p>Total: <span id="valor-total"><?php echo 'R$' . number_format($valorTotal, 2, ',', '.'); ?></span></p>
            </div>
            <form method="post">
                <button class="finalizar-compra" type="submit" name="finalizar">Finalizar Compra</button>
            </form>
            <?php if (isset($_POST['finalizar'])): ?>
                <p id="mensagem-compra" >Compra efetuada com sucesso!</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
