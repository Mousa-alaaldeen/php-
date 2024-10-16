<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['login'])){
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    if(!empty($email) && !empty($password)){
        echo($_POST['email']),
      
        // header('Location: ../html/advanced_home.html');
        exit(); 
    } else { 
        $error = 'Email and password are required';
    }
}
?>
