
<?php
include 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$auth = auth($login, md5($password));
if ($auth != false) {

    setcookie("name", $auth);

    header("Location: panier.php");
}
