<?php 
    session_start();
    include_once __DIR__ . "/index.php";
    if( !empty($_GET['password']) && !empty($_GET['password']) ) {
        $credentials = [
            "password" => $_GET['password'],
        ];

        $user = (generatePassword());

        if( $user ) {
            $_SESSION['logged_in'] = true;
            header("Location: http://localhost:8888/php-strong-password/showPassword.php");
        die();
            
        } 
    }
    echo (generatePassword());
?>