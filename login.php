<?php
    session_start(); 
    $error_message = $_SESSION['error_message'];
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
            <form action="home.php" method="post">
                <h4>Log-In</h4>
                <?php if(!empty($error_message)){?>
                    <p id="error"><?php echo $error_message;?></p>
                <?php } ?>
                <label>Username/E-mail: </label>
                <input type="text"><br>
                <label>Password: </label>
                <input type="password"><br>
                <input type="submit" value="Log In" id="login"><br>
                First time here? <a href="registration.html">Create an account</a>
            </form>
        </main>

        <footer>
            <p>&copy; Password Manager</p>
        </footer>
    </body>

</html>