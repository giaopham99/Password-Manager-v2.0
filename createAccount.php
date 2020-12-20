<?php
    include('database.php');
    session_start(); 
    $_SESSION['error_message'] = '';
    $createdUser = filter_input(INPUT_POST, 'user');
    $createdFirst = filter_input(INPUT_POST, 'first');
    $createdLast = filter_input(INPUT_POST, 'last');
    $createdEmail = filter_input(INPUT_POST, 'email');
    $createdPass = filter_input(INPUT_POST, 'pass');

    $query = "SELECT username FROM user WHERE username=AES_ENCRYPT('$createdUser', 'd3c1ph3r7h15')";
    $statement = $db->prepare($query);
    $statement->execute();
    $username = $statement->fetch();
    $statement->closeCursor();
    
    if ($username != NULL)
        $_SESSION['error_message'] = 'There is already an account associated with the username provided';
    else{
        $query = "INSERT INTO user(first_name,last_name,email,username,pass) 
                VALUES (AES_ENCRYPT('$createdFirst', 'd3c1ph3r7h15'), AES_ENCRYPT('$createdLast', 'd3c1ph3r7h15'), AES_ENCRYPT('$createdEmail', 'd3c1ph3r7h15'), AES_ENCRYPT('$createdUser', 'd3c1ph3r7h15'), AES_ENCRYPT('$createdPass', 'd3c1ph3r7h15'))";
        $db->exec($query);
    }
    header("Location: login.php");
    exit();

?>
