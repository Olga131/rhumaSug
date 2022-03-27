<?php

$conn = new PDO('mysql:host=localhost;dbname=rhuma_sug', 'olga', 'berusu');
function getProducts()
{
    global $conn;
    return $conn->query('SELECT * FROM produit');
}

function auth($login, $password)
{
    global $conn;
    $users = $conn->query("SELECT * FROM client WHERE email ='{$login}' AND mdp = '{$password}'");
    $user = $users->fetchAll(PDO::FETCH_ASSOC)[0];
    if ($user['idClient'] > 0) {
        return $user['prenom'];
    }
    return false;
}

function register($prenom, $email, $mdp)
{
    global $conn;
    $pass = md5($mdp);
    $conn->exec("INSERT INTO client (idClient, prenom, email, mdp) VALUES (NULL, '{$prenom}', '{$email}', '{$pass}')");
}
