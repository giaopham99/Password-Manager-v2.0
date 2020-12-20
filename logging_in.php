<?php
    include('database.php');
    session_start(); 
    $_SESSION['incorrect_account'] = '';
    $username = filter_input(INPUT_POST, 'username');
    $pass = filter_input(INPUT_POST, 'password');

    $query = "SELECT username FROM user WHERE username=AES_ENCRYPT('$username', 'd3c1ph3r7h15') AND pass=AES_ENCRYPT('$pass', 'd3c1ph3r7h15')";
    $statement = $db->prepare($query);
    $statement->execute();
    $username = $statement->fetch();
    $statement->closeCursor();

    if($username != NULL){
        header("Location: search.html");
        exit();
    }else{
        $_SESSION['incorrect_account'] = 'Incorrect Username/Password';
        header("Location: login.php");
        exit();
    }
?>