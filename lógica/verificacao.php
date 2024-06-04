<?php 
    //Registrar

    if (isset($_POST['criarconta'])) {
        
        if (!isset($_POST['nome']) or !isset($_POST['cpf']) or !isset($_POST['email']) or !isset($_POST['senha']) or !isset($_POST['confirmarsenha'])) {
            echo "Todos os campos devem estar preenchidos";
        }

        if ($_POST['senha'] != $_POST['confirmarsenha']) {
            echo "As senhas não coincidem!";
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Email invlálido";
        }
    }

    
?>