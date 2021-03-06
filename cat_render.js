"use strict";

var $container = document.querySelector('.catalog-product-block');
console.log($container);

var xhr = new XMLHttpRequest();

xhr.open('GET', 'http://127.0.0.1:8080/goods.json');
xhr.send();

xhr.onreadystatechange = function (){
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            var goods = JSON.parse(xhr.responseText);
            console.log(goods);
            goods.forEach(function (card) {
                var hoverBlock = document.createElement('div');
                hoverBlock.classList.add('product-hover');
                var link = document.createElement('a');
                link.classList.add('products__card');
                link.href = card.href;
                var image = document.createElement('img');
                image.src = card.img_src + '.jpg';
                var prodText = document.createElement('div');
                prodText.classList.add('products__text');
                var prodTitle = document.createElement('p');
                prodTitle.innerHTML = card.title;
                var prodPrice = document.createElement('span');
                prodPrice.innerHTML = '$' + card.price;
                var prodHover = document.createElement('div');
                prodHover.classList.add('add-flex');
                var cartLink = document.createElement('a');
                cartLink.href = '#';
                cartLink.classList.add('add-to-cart');
                cartLink.textContent = 'add to cart';
                // var cartIcon = document.createElement('i');
                // cartIcon.classList.add('fas fa-shopping-cart');

                // cartLink.appendChild(cartIcon);
               prodText.appendChild(prodTitle);
               prodText.appendChild(prodPrice);
               link.appendChild(image);
               link.appendChild(prodText);
               prodHover.appendChild(cartLink);
               hoverBlock.appendChild(link);
               hoverBlock.appendChild(prodHover);
               $container.appendChild(hoverBlock);

            })
        }
    }
};