<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecommerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <?php 
            if(isset($_SESSION['login']) === false || $_SESSION['login'] === false) { ?>
            <h1> Welcome Ecommerce Pro ++ </h1>
            <a href="connexion.php">Connexion</a>
            <a href="subscribe.php">Inscription</a>
        <?php } else { ?>
            <h2>Welcome User : <?php echo $_SESSION['email']; ?> </h2>
        <?php } ?>
    </header>
    <form action="order.php" method="POST">
        <div id="produit">
            <ul>
                <li>
                    Produit 1 - 3,99€
                    <input type="number" min="0" name="produit1">
                </li>
                <li>
                    Produit 2 - 1000,99€
                    <input type="number" min="0" name="produit2">
                </li>
                <li>
                    Produit 3 - 152,54€
                    <input type="number" min="0" name="produit3">
                </li>
            </ul>
        </div>
        <div id="service">
            <ul>
                <li>
                    Service 1 - 541,21€
                    <input type="number" min="0" name="service1">
                </li>
                <li>
                    Service 2 - 231,41€
                    <input type="number" min="0" name="service2">
                </li>
                <li>
                    Service 3 - 21,11€
                    <input type="number" min="0" name="service3">
                </li>
            </ul>
        </div>
        <input type="submit" value="Order">
    </form>
</body>
</html>