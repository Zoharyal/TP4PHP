<?php
session_start();

$_SESSION['Semail'] = $_POST['Semail'];
$_SESSION['Sname'] = $_POST['Sname'];
$_SESSION['Spassword'] = $_POST['Spassword'];

if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_SESSION['Semail'])) {
    header('Location: index.php');
    $_SESSION['login'] = true;
} else {
    $_SESSION['login'] = false;
    header('Location: connexion.php');
}

?>