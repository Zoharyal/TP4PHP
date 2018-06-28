<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="connexion">
        <form action="log.php" method="POST">
            <label for="email">Adresse email</label>
            <input type="text" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
    </div>
    <?php 
     if($_SESSION['login'] === false) { ?>
        <p style="color:red">Adresse email invalide</p>
     <?php } ?>
</body>
</html>