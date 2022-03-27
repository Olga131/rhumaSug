console.log("coucou");

function getCartItemsCount()
    {
        return localStorage.getItem('cartItemsCount') === null ? 0: parseInt(localStorage.getItem('cartItemsCount'))    ;
    }


   function setCartItemsCount(count){
        localStorage.setItem('cartItemsCount', count);
        return false;
    }
    function getCartData(){
        return JSON.parse(localStorage.getItem('cart'));
    }
    function setCartData(o){
        localStorage.setItem('cart', JSON.stringify(o));
        return false;
    }
    function handle1(id, count){
      var currentScore = getCartItemsCount();
      setCartItemsCount(currentScore - count);

      var cart = getCartData();
      delete cart[id];
      console.log(id, count);
      setCartData(cart);
    }


    window.onload = () => {
        var cart = getCartData();
        var all = 0;
        Object.entries(cart).forEach(([key, value]) => {

            all += value[2] * value[3];
            var n1 = document.getElementsByClassName('main_panier')[0];
            var newP = document.createElement("section");
            newP.innerHTML += `<img style = "height: 100px; width: 100px" src = "/img/${value[1]}" alt = "" >`;
            newP.innerHTML += `<div class="categorie">categorie</div>`;
            newP.innerHTML += `<div class="nom_produit" > NOM PRODUIT </div >`;
            newP.innerHTML += `<div class="volume" > ${value[0]} </div >`;
            newP.innerHTML += `<div class="prix" >${value[2]}€</div >`;
            newP.innerHTML += `<div class="buttons">`;
            newP.innerHTML += `<button class="quantite" >${value[3]}</button >`;
            newP.innerHTML += `<button class="delete" onclick="handle1(${value[0]}, ${value[3]});"> Supprimer</button >` ;
            newP.innerHTML += '<button class="return_achats" > Continuer mes achats </button >';
            newP.innerHTML += '</div >';
            n1.appendChild(newP);
        });

        document.getElementsByClassName('number_articles')[0].innerHTML += all;
        document.getElementsByClassName('tva')[0].innerHTML += all * 0.2;
        document.getElementsByClassName('calc_total')[0].innerHTML += all + all*0.2;
    }