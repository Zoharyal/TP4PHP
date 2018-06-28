<?php
session_start();

$p1 = 3.99;
$p2 = 1000.99;
$p3 = 152.54;
$s1 = 541.21;
$s2 = 231.41;
$s3 = 21.11;

if ($_SESSION['produit1'] != 0) {
    $prixp1 = $_SESSION['produit1'] * $p1;
} else {
    $prixp1 = 0;
}
if ($_SESSION['produit2'] != 0) {
    $prixp2 = $_SESSION['produit2'] * $p2;
} else {
    $prixp2 = 0;
}
if ($_SESSION['produit3'] != 0) {
    $prixp3 = $_SESSION['produit3'] * $p3;
} else {
    $prixp3 = 0;
}
if ($_SESSION['service1'] != 0) {
    $prixs1 = $_SESSION['service1'] * $s1;
} else {
    $prixs1 = 0;
}
if ($_SESSION['service2'] != 0) {
    $prixs2 = $_SESSION['service2'] * $s2;
} else {
    $prixs2 = 0;
}
if ($_SESSION['service3'] != 0) {
    $prixs3 = $_SESSION['service3'] * $s3;
} else {
    $prixs3 = 0;
}

$prixTTC = $prixp1 + $prixp2 + $prixp3 + $prixs1 + $prixs2 + $prixs3;



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="facture">
        <h3>Facture</h3>
        <?php if($_SESSION['produit1'] != 0) { ?>
            <p>Produit 1 : <p> <?php echo $_SESSION['produit1']; echo ' Total: '; echo $prixp1; echo '€'?> 
        <?php } ?>
        <?php if($_SESSION['produit2'] != 0) { ?>
            <p>Produit 2 : <p> <?php echo $_SESSION['produit2'];  echo ' Total: '; echo $prixp2; echo '€' ?> 
        <?php } ?>
        <?php if($_SESSION['produit3'] != 0) { ?>
            <p>Produit 3 : <p> <?php echo $_SESSION['produit3']; echo ' Total: '; echo $prixp3; echo '€' ?> 
        <?php } ?>
        <?php if($_SESSION['service1'] != 0) { ?>
            <p>Service 1 : <p> <?php echo $_SESSION['service1']; echo ' Total: '; echo $prixs1; echo '€' ?> 
        <?php } ?>
        <?php if($_SESSION['service2'] != 0) { ?>
            <p>Service 2 : <p> <?php echo $_SESSION['service2']; echo ' Total: '; echo $prixs2; echo '€'?> 
        <?php } ?>
        <?php if($_SESSION['service3'] != 0) { ?>
            <p>Service 3 : <p> <?php echo $_SESSION['service3']; echo ' Total: '; echo $prixs3; echo '€'?> 
        <?php } ?>

        <h3>Total : <?php echo $prixTTC; echo '€'?></h3>
        <a href="end.php">Payer</a>
    </div>
</body>
</html>

