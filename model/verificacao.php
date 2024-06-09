<?php 
    //Registrar

    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $senha = isset($_POST['senha']) ? $_POST['senha'] : "";
    $confirmarSenha = isset($_POST['confirmarsenha']) ? $_POST['confirmarsenha'] : "";
    

    if (isset($_POST['criarconta'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarsenha'];

        
        if (!empty($_POST['nome']) and !empty($_POST['cpf']) and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_POST['confirmarsenha'])) {
    
            if ($_POST['senha'] != $_POST['confirmarsenha']) {
                echo "<p style='color: red; margin-top: 50px'>As senhas não coincidem!</p>";
                $senha = "";
                $confirmarSenha = "";
            }
    
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color: red'>Email invlálido</p>";
            }
        } else {
            echo "<p style='color: red'>Todos os campos devem estar preenchidos</p>";
        }

        if (!empty($_POST['nome']) and !empty($_POST['cpf']) and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_POST['confirmarsenha']) and $_POST['confirmarsenha'] ==  $_POST['senha'] and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            
            require_once("./controller/controllerCliente.php");
            $controle = new controllerCliente();
            $controle->action("C");

            $nome = "";
            $cpf = "";
            $email = "";
            $senha = "";
            $confirmarSenha = "";
        }

    }
?>