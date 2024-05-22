document.addEventListener("DOMContentLoaded", function() {
    function registro() {
        var nome = document.getElementById("nome").value;
        var cpf = document.getElementById("cpf").value;
        var email = document.getElementById("email").value;
        var senha = document.getElementById("senha").value;
        var confirmasenha = document.getElementById("confirmasenha").value;
        var concordoutermos = document.getElementById("termosuso").checked;

        if (senha === confirmasenha) {
            if (concordoutermos) {
                var registroinfo = {
                    nome: nome,
                    cpf: cpf,
                    email: email,
                    senha: senha
                };
                // Armazena os dados de registro no localStorage
                localStorage.setItem("registroinfo", JSON.stringify(registroinfo));
                window.location.href = "loginresponsivo.html";
            } else {
                alert("Você deve concordar com os Termos de Uso e Política de Privacidade.");
            }
        } else {
            alert("As senhas não coincidem!");
        }
    }

    document.getElementById("criarbutton").addEventListener("click", registro);
});

document.addEventListener("DOMContentLoaded", function() {
    function login() {
        var emailve = document.getElementById("email").value;
        var senhave = document.getElementById("senha").value;

        // Recupera os dados de registro do localStorage
        var registroinfo = JSON.parse(localStorage.getItem("registroinfo"));

        if (registroinfo && emailve === registroinfo.email && senhave === registroinfo.senha) {
            window.location.href = "perfilresponsivo.html";
        } else {
            alert("Informações inválidas!");
        }
    }

    document.getElementById("entrarbutton").addEventListener("click", login);
});

document.addEventListener("DOMContentLoaded", function () {
    const abrirCarrinho = document.getElementById("sacoladesktop");

    function carrinho(){
        window.location.href = "carrinho 3.0.html";
    }

    abrirCarrinho.addEventListener("click", carrinho);
});

document.addEventListener("DOMContentLoaded", function () {
    const abrirCarrinho = document.getElementById("sacolamobile");

    function carrinho(){
        window.location.href = "carrinho 3.0.html";
    }

    abrirCarrinho.addEventListener("click", carrinho);
});

document.addEventListener("DOMContentLoaded", function() {
    const submenubotao = document.getElementById("submenubotao");
    const submenu = document.getElementById("submenu");
    const submenuFundo = document.getElementById("submenuFundo");


    submenubotao.addEventListener("click", function() {
        submenu.classList.add("ativo");
        submenuFundo.style.display = "block";
    });

    const fechar = document.createElement("span");
    fechar.textContent = "X";
    fechar.style.cursor = "pointer";
    fechar.style.position = "absolute";
    fechar.style.top = "2.2%";
    fechar.style.right = "0px";
    fechar.style.fontSize = "1em";
    fechar.style.fontFamily = "Metrophobic";
    submenu.appendChild(fechar);
    
    fechar.addEventListener("click", function() {
        submenu.classList.remove("ativo");
        submenuFundo.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {

    const cabecalho = document.getElementById("cabecalhoscroll");

    window.addEventListener("scroll", function() {
        if (window.scrollY >= 200) {
            cabecalho.classList.add("scroll");
        } else {
            cabecalho.classList.remove("scroll");
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    function email(){
        var emailverificado = document.getElementById("emailverificado").value;

        var registroinfo = JSON.parse(localStorage.getItem("registroinfo"));

        if (emailverificado === registroinfo.email) {
            window.location.href = "recuperarsenharesponsivo2.html";
        } else {
            alert("Email inválido!");
        }
    }
    
    document.getElementById("enviarbutton").addEventListener("click", email);
});

document.addEventListener("DOMContentLoaded", function() {
    function alterar() {
        var novasenha = document.getElementById("novasenha").value;
        var confirmarnovasenha = document.getElementById("confirmarnovasenha").value;

        var registroinfo = JSON.parse(localStorage.getItem("registroinfo"));

        if (novasenha === confirmarnovasenha) {
            registroinfo.senha = novasenha; // Atualize a senha no objeto registroinfo
            localStorage.setItem("registroinfo", JSON.stringify(registroinfo));
            alert("Senha alterada!");
            window.location.href = "loginresponsivo.html";
        } else {
            alert("As senhas não coincidem!");
        }
    }

    document.getElementById("alterarbutton").addEventListener("click", alterar);
});


document.addEventListener("DOMContentLoaded", function () {
    const submenuFundo = document.getElementById("submenuFundo");
    // Função para abrir o pop-up do carrinho
    function abrirCarrinho() {
        const popupCarrinho = document.getElementById("popup-carrinho");
        popupCarrinho.style.display = "block";
        submenuFundo.style.display = "block";

        // Criar o botão "X"
        const fecharCarrinhoButton = document.createElement("button");
        fecharCarrinhoButton.innerText = "x";
        fecharCarrinhoButton.classList.add("fechar-pop-up");
        fecharCarrinhoButton.addEventListener("click", fecharCarrinho);

        // Adicionar o botão "X" à caixa do pop-up
        popupCarrinho.appendChild(fecharCarrinhoButton);

        // Estilos para posicionar o botão no canto superior direito
        fecharCarrinhoButton.style.position = "absolute";
        fecharCarrinhoButton.style.top = "10px";
        fecharCarrinhoButton.style.right = "10px";
        fecharCarrinhoButton.style.backgroundColor = "#0a272c";
        fecharCarrinhoButton.style.fontWeight = "100";
        fecharCarrinhoButton.style.fontSize = "1.5em";
        fecharCarrinhoButton.style.color = "rgba(4, 238, 74, 0.822)";
        fecharCarrinhoButton.style.border = "none";
        fecharCarrinhoButton.style.cursor = "pointer";
    }

    // Função para fechar o pop-up do carrinho
    function fecharCarrinho() {
        const popupCarrinho = document.getElementById("popup-carrinho");
        popupCarrinho.style.display = "none";
        submenuFundo.style.display = "none";
    }

    // Adicionar um ouvinte de evento ao elemento com id "sacoladesktop" para abrir o carrinho
    const sacolaDesktop = document.getElementById("sacoladesktop");
    sacolaDesktop.addEventListener("click", abrirCarrinho);
});