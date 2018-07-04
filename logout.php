<?php
//session_destroy();
//unset($_SESSION['login']);
//unset($_SESSION['id']);
//heasession_destroy();
session_start();
$_SESSION['login']=null;
$_SESSION['id']=null;
header('Location: index.php');
?>