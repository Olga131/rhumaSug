<?php
include_once "db.php";

$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];

register($prenom, $email, $password);
setcookie("name", $prenom);

header("Location: panier.php");
