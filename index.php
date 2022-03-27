<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
</head>

<body>
    <script>
        function getCartData() {
            return JSON.parse(localStorage.getItem('cart'));
        }

        function setCartItemsCount(count) {
            localStorage.setItem('cartItemsCount', count);
            return false;
        }

        function setCartData(o) {
            localStorage.setItem('cart', JSON.stringify(o));
            return false;
        }

        function addToCart(itemId, image, prix) {
            console.log(prix);
            var cartData = getCartData() || {}; // recuperation les donnes de bd ou la creation si ils sont absentent
            if (cartData.hasOwnProperty(itemId)) {
                cartData[itemId][3] += 1;
            } else {
                cartData[itemId] = [itemId, image, prix, 1];
            }
            setCartData(cartData);
            var currentScore = getCartItemsCount();
            setCartItemsCount(currentScore + 1);

            document.getElementsByClassName('mon_panier')[0].innerHTML = `Mon panier: (${currentScore})`;
        }

        function getCartItemsCount() {
            return localStorage.getItem('cartItemsCount') === null ? 0 : parseInt(localStorage.getItem('cartItemsCount'));
        }

        function handle(itemId, image, prix) {
            addToCart(itemId, image, prix);
        }
        window.onload = () => {
            let currentScore1 = getCartItemsCount();
            document.getElementsByClassName('mon_panier')[0].innerHTML = `Mon panier: (${getCartItemsCount()})`;
        };
    </script>
    <?php
    include './template/config.php';
    include './template/template_nav/nav.php';
    include './db.php';
    ?>
    <main>
        <div class="catalog">
            <?php
            $stmt = getProducts();
            foreach ($stmt as $product) {
                echo '<div class="carte">
                    <img src="./img/' . $product['image'] . '" alt="" class="img_carte">
                    <figcaption>' . $product['nomProduit'] . '</figcaption>
                    <div class="grammes_carte"> ' . $product['volume'] . '</div>
                    <section class="prix_quantite">
                        <div class="prix_carte">' . $product['prix'] . '$</div>
                    </section>
                    <section class="panier_vert">
                    <a href="#" class="button7" onclick="handle('
                    . $product['idProduit'] .
                    ',\'' . $product['image'] . '\',' .
                    $product['prix'] .
                    ')">acheter</a>
                    </section>
                </div>';
            }
            ?>
        </div>
    </main>
    <?php
    include './template/template_footer/footer.php';
    ?>
    <script src="./main.js"></script>
</body>

</html>