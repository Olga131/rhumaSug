<?php
function renderProductInCart($prix, $quintity, $volume)
{
    echo '<section class="produit_panier">
    <img src="/img/product3.jpeg" alt="">
    <div class="categorie">categorie</div>
    <div class="nom_produit">NOM PRODUIT</div>
    <div class="volume">70cl</div>
    <div class="prix">' . $prix . '€</div>
    <div class="buttons">
        <button class="quantite">' . $quintity . '</button>
        <button class="delete">Supprimer</button>
     
        <button class="return_achats">Continuer mes achats</button>
       
    </div>
</section>';
}
