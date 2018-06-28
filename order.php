<?php
session_start();
$p1 = 3.99;
$p2 = 1000.99;
$p3 = 152.54;
$s1 = 541.21;
$s2 = 231.41;
$s3 = 21.11;

$_SESSION['produit1']= $_POST['produit1'];
$_SESSION['produit2']= $_POST['produit2'];
$_SESSION['produit3']= $_POST['produit3'];
$_SESSION['service1']= $_POST['service1'];
$_SESSION['service2']= $_POST['service2'];
$_SESSION['service3']= $_POST['service3'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="panier">
        <h3>Panier</h3>
        <?php if($_SESSION['produit1'] != 0) { ?>
            <p>Produit 1 : <p> <?php echo $_SESSION['produit1'] ?> 
        <?php } ?>
        <?php if($_SESSION['produit2'] != 0) { ?>
            <p>Produit 2 : <p> <?php echo $_SESSION['produit2'] ?> 
        <?php } ?>
        <?php if($_SESSION['produit3'] != 0) { ?>
            <p>Produit 3 : <p> <?php echo $_SESSION['produit3'] ?> 
        <?php } ?>
        <?php if($_SESSION['service1'] != 0) { ?>
            <p>Service 1 : <p> <?php echo $_SESSION['service1'] ?> 
        <?php } ?>
        <?php if($_SESSION['service2'] != 0) { ?>
            <p>Service 2 : <p> <?php echo $_SESSION['service2'] ?> 
        <?php } ?>
        <?php if($_SESSION['service3'] != 0) { ?>
            <p>Service 3 : <p> <?php echo $_SESSION['service3'] ?> 
        <?php } ?>
    </div> 
    <a href="payment.php"><button>Payer</button></a>   
</body>
</html>