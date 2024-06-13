<?php 

    session_start();
    //print_r($_REQUEST);

    if (isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
    {
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r($email);
        // print_r($senha);


        $conn = Conexao::conectar();
        $sql = $conn->prepare("SELECT * FROM clientes WHERE email = :email and senha = :senha");

        $sql->bindParam(':email', $email);
        $sql->bindParam(':senha', $senha);

        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        //print_r($result);

        if (count($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../view/login.php');
        }
        else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../LISTACLIENTE');
        }
    }
    else 
    {
        header('Location: login.php');
    }

?>