<?php
    session_start();

    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $remember = isset($_POST['remember']);

    $valid_email = 'user@example.com';
    $valid_password = 'password123';

    if (empty($email) || empty($senha)) {
        header('Location: login.php?error=empty_fields');
        exit();
    }

    if ($email === $valid_email && $senha === $valid_password) {
        // Armazenar informações na sessão
        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;

        if ($remember) {
            setcookie('email', $email, time() + (86400 * 30), "/"); 
            setcookie('senha', $senha, time() + (86400 * 30), "/");
        }

        header('Location: index.php');
        exit();
    } else {
        header('Location: login.php?error=invalid_credentials');
        exit();
    }
?>
