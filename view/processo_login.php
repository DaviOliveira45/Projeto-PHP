<?php
session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === $valid_email && $senha === $valid_password) {

        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;

        header('Location: index.html');
        exit();
    } else {
        header('Location: login.html?error=invalid_credentials');
        exit();
    }
?>
