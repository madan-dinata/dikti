window.onload = function () {





    var add_to_cart_btns = document.getElementsByClassName("add_to_cart_button");
    var shoping_cart = document.getElementById("shoping_cart");
    var cart_item = document.querySelectorAll("#shoping_cart ul")[0];
    var empty_cart = document.getElementById("empty_cart");

    current_cart = JSON.parse(localStorage.getItem('cart'));
    if (!current_cart) {
        current_cart = new Array();
    }

    UpdateShoppingCartUI();

    for (var i = 0; i < add_to_cart_btns.length; i++) {
        add_to_cart_btns[i].addEventListener("click", function (ev) {
            var furnitureId = this.getAttribute("data-item");
            var furniturePrice = this.getAttribute("data-price");
            var item = {
                id: furnitureId,
                price: furniturePrice
            };
            current_cart.push(item);
            UpdateShoppingCartUI();
            // alert(furnitureId + ' ' + furniturePrice);

        });
    }

    function UpdateShoppingCartUI() {
        cart_item.innerHTML = "";
        for (var i = 0; i < current_cart.length; i++) {
            var li_element = document.createElement('li');
            li_element.innerHTML = current_cart[i].id + " " + current_cart[i].price + " ";
            cart_item.appendChild(li_element);
        }
        localStorage.setItem('cart', JSON.stringify(current_cart));

        empty_cart.addEventListener("click", function (ev) {
            current_cart = new Array();
            UpdateShoppingCartUI();
        });
    }
}