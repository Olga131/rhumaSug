<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/connect.css">
</head>

<body>
    <?php
    include './template/config.php';
    include $nav_connection;
    ?>
    <main>
        <section class="me_connecter">
            <h2>Me connecter</h2>
            <form action="login.php" method="post">
                <input type="text" value="Login" name="login">
                <input type="text" value="mdp" name="password">
                <input type="submit" value="Autorisation">
            </form>
        </section>
        <section class="nouveau_client">
            <p>Nouveau client ?</p>
            <p>Créez votre compte </p>
            <div class="space">
                <img src="./img/arr_orange.png" alt="">
                <h2 class="add_event">Je crée mon compte</h2>
            </div>
        </section>
    </main>
    <div class="create_compte">
        <form action="register.php" method="post">
            <h2>Créez votre compte client</h2>
            <input class="esp_flex" type="text" value="VOTRE PRENOM" name="prenom">
            <input class="esp_flex" type="text" value="VOTRE ADRESSE MAIL" name="email">
            <input class="esp_flex" type="text" value="password" name="password">
            <input class="esp_flex btn_creerCompte" type="submit" value="Incription">
        </form>
    </div>

    <?php
    include $footer;
    ?>
    <script src="./js/connect.js"></script>
</body>

</html>