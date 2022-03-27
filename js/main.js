function getCartData(){
        return JSON.parse(localStorage.getItem('cart'));
    }
    function setCartItemsCount(count){
        localStorage.setItem('cartItemsCount', count);
        return false;
    }

    function setCartData(o){
        localStorage.setItem('cart', JSON.stringify(o));
        return false;
    }

    function addToCart(itemId, image, prix)
    {
        console.log(prix);
        var cartData = getCartData() || {}; // получаем данные корзины или создаём новый объект, если данных еще нет
        if(cartData.hasOwnProperty(itemId))
        {
            cartData[itemId][3] += 1;
        }
        else
        {
            cartData[itemId] = [itemId, image, prix, 1];
        }
        setCartData(cartData);
        var currentScore = getCartItemsCount();
        setCartItemsCount(currentScore + 1);

        document.getElementsByClassName('mon_panier')[0].innerHTML = `Mon panier: (${currentScore})`;
    }
    function getCartItemsCount()
    {
        return localStorage.getItem('cartItemsCount') === null ? 0: parseInt(localStorage.getItem('cartItemsCount'))    ;
    }

    function handle(itemId, image, prix){
        addToCart(itemId, image, prix);
    }
    window.onload = () => {
        let currentScore1 = getCartItemsCount();
        document.getElementsByClassName('mon_panier')[0].innerHTML = `Mon panier: (${getCartItemsCount()})`;
    };

