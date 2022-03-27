<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    include './template/config.php';
    include $nav;
    ?>
    <main>
        <section class="block_nos_valeurs">
            <section class="nos_valeurs block_gauche">
                <img src="./img/lavocka_rom.jpg" alt="">
                <p>Nos experts, toujours dans la mesure ont cherché à couper la poire en deux et vous
                    propose des recettes originales de cocktails légers.</p>
            </section>
            <section class="nos_valeurs block_droit">
                <p>Si cocktail d’été rime souvent avec exotisme, le Smoked Fashioned apparaît
                    comme le partenaire des globe-trotteurs fana de road trip.
                    A la fois fumé et puissant, les amateurs de whiskies seront servis.</p>
                <img src="./img/les_trostnik.jpg" alt="">
            </section>
            <section class="nos_valeurs block_gauche">
                <img src="./img/boski_pogreb.jpg" alt="">
                <p>Nos experts vous partagent leur expérience et leur passion</p>
            </section>
            <section class="nos_valeurs block_droit">
                <p>Envie de une nouvelle dimension aromatique à votre frangipane ?<br>
                    Quel rhum mettre dans ma galette des rois ?</p>
                <img src="./img/sugar-testing-inspection.png" alt="">
            </section>
        </section>
    </main>
    <?php
    include $footer;
    ?>
</body>

</html>