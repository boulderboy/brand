"use strict";

function renderItem(imgSrc, title, price) {
    var $blockOfGood = $('<div />');
    $blockOfGood.addClass('hidden-prod');
    var $prodImg = $(`<img src="${imgSrc}">`);
    var $prodRating = $('<div />');
    $prodRating.addClass('hidden-prod-rating');
    var $title = $('<h5 />');
    $title.text(title);
    var $stars = $('<img src="img/stars.png">');
    var $quantity = $('<span />');
    $quantity.addClass('hidden-cart-price');
    $quantity.text(`1 x ${price}$`);
    var $deleteProd = $('<i class="fas fa-times-circle remove"></i>');
    $prodRating.append($title, $stars, $quantity);
    $blockOfGood.append($prodImg, $prodRating, $deleteProd);
    $('#cart-block').append($blockOfGood);
}

function cartRender() {
    var _cart = [];
    $.ajax({
        url: 'http://localhost:3000/cart',
        type: 'GET',
        success: function (cart) {
            if (cart.length === 0) {
                $('#cart-block').append($('<span>Your cart is empty</span>'))
            } else {
                var totalPrice = null;
                $('#cart-block').empty();
                cart.forEach(function (product) {
                    renderItem(product.imgForCartSrc, product.title, product.price);
                    totalPrice += +product.price;
                });

            var $totalBlock = $('<div />');
            $totalBlock.addClass('hidden-total');
            var $totalText = $('<h4>total</h4>');
            var $totalPrice = $(`<h4>${totalPrice}$</h4>`);
            $totalBlock.append($totalText, $totalPrice);
            $('#cart-block').append($totalBlock);

            var $checkoutBtn = $('<a href="checkout.html" class="hidden-checkout">checkout</a>');
            var $goToCartBtn = $('<a href="cart.html" class="hidden-goto">go to cart</a>');
            $('#cart-block').append($checkoutBtn, $goToCartBtn);
            }
        }
    })
}

(function ($) {
    $(document).ready(function () {
        cartRender();
        $('.catalog-product-block').on('click', '.add-to-cart', function (event) {
            event.preventDefault();
            var product = $(this).data();
            $.ajax({
                url: 'http://localhost:3000/cart',
                type: 'POST',
                data: product,
                success: function () {
                    console.log('ok');
                }
            });
            cartRender();
        }
        $('#cart-block').on('click', '.remove', function () {
            
        })
    })
})(jQuery);

// $(this).data('imgForCartSrc'), $(this).data('title'), $(this).data('price')