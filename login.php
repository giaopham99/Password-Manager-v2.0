<?php
include('database.php');
    session_start(); 
    $error_message = $_SESSION['error_message'];
    $incorrect_account = $_SESSION['incorrect_account'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Password Manager</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="header">
            <h2>Password Manager</h2>
        </header>

        <div id="main">
            <form action="logging_in.php" method="post">
                <h4>Log-In</h4>
                <?php if(!empty($error_message)){?>
                    <p class="error"><?php echo $error_message;?></p>
                <?php } ?>
                <label>Username/E-mail: </label>
                <input type="text" name="username" required><br>
                <label>Password: </label>
                <input type="password" name="password" required><br>
                <?php if(!empty($incorrect_account)){?>
                    <p class="error"><?php echo $incorrect_account;?></p>
                <?php } ?>
                <input type="submit" value="Log In" id="login"><br>
                First time here? <a href="registration.html">Create an account</a>
            </form>
                </div>

        <footer>
            <p>&copy; Password Manager</p>
        </footer>
    </body>

</html>