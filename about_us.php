<?
include_once "php/company-review-render.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Brand</title>
</head>

<body>
<header class="header">
    <div class="container header-container">
        <div class="header__left">
            <a href="index.html" class="link-logo"><img src="img/logo.png" alt="logo"><span class="logo">bran</span><span class="d-letter">d</span></a>
            <form action="#" class="search-form">
                <details class="browse">
                    <summary class="browse-sum"><span>browse</span></summary>
                    <div class="drop-down">
                        <div class="mega-pointer"></div>
                        <h3>women</h3>
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                        <h3>men</h3>
                        <ul>
                            <li><a href="#">Tees/Tank tops</a></li>
                            <li><a href="#">Shirts/Polos</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Sweatshirts/Hoodies</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Jackets/vests</a></li>
                        </ul>

                    </div>
                </details>
                <input type="text" placeholder="MANGO T-SHIRT">
                <button type="submit"><i class="fas fa-search"></i>

                </button>
            </form>
        </div>
        <div class="header__right">
            <div class="cart-hover">
                <a href="cart.html" class="cart-icon"><img src="img/cart.svg" alt="cart"></a>
                <div class="hidden-cart">
                    <div class="mega-pointer"></div>
                    <div class="hidden-prod">
                        <img src="img/hidden-prod=1.jpg" alt="men shirt">
                        <div class="hidden-prod-rating">
                            <h5>rebox zane</h5>
                            <img src="img/stars.png" alt="stars">
                            <span class="hidden-cart-price">1 x $250</span>
                        </div>
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="hidden-prod">
                        <img src="img/hidden-prod-2.jpg" alt="women shirt">
                        <div class="hidden-prod-rating">
                            <h5>rebox zane</h5>
                            <img src="img/stars.png" alt="stars">
                            <span class="hidden-cart-price">1 x $250</span>
                        </div>
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="hidden-total">
                        <h4>total</h4>
                        <h4>$500</h4>
                    </div>
                    <a href="checkout.html" class="hidden-checkout">checkout</a>
                    <a href="cart.html" class="hidden-goto">go to cart</a>
                </div>
            </div>
            <a href="#" class="my-account"><span>my&nbsp;account</span>&#8227;</a>
        </div>
    </div>
</header>
<nav class="menu container">
    <ul class="horizontal">
        <li><div class="mega-hover">
            <a href="#" class="horizontal__link active-page">Home </a>
            <div class="mega mega-home scale-up-tl">
                <div class="mega-pointer">
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="catolog.html">Dresses</a></li>
                        <li><a href="catolog.html">Tops</a></li>
                        <li><a href="catolog.html">Sweaters/Knits</a></li>
                        <li><a href="catolog.html">Jackets/Coats</a></li>
                        <li><a href="catolog.html">Blazers</a></li>
                        <li><a href="catolog.html">Denim</a></li>
                        <li><a href="catolog.html">Leggings/Pants</a></li>
                        <li><a href="catolog.html">Skirts/Shorts</a></li>
                        <li><a href="catolog.html">Accessories</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="catolog.html">Dresses</a></li>
                        <li><a href="catolog.html">Tops</a></li>
                        <li><a href="catolog.html">Sweaters/Knits</a></li>
                        <li><a href="catolog.html">Jackets/Coats</a></li>
                    </ul>
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="catolog.html">Dresses</a></li>
                        <li><a href="catolog.html">Tops</a></li>
                        <li><a href="catolog.html">Sweaters/Knits</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="catolog.html">Dresses</a></li>
                        <li><a href="catolog.html">Tops</a></li>
                        <li><a href="catolog.html">Sweaters/Knits</a></li>
                        <li><a href="catolog.html">Jackets/Coats</a></li>
                    </ul>
                    <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                </div>
            </div>
        </div></li>
        <li><div class="mega-hover">
            <a class="horizontal__link" href="catolog.html">Man </a>
            <div class="mega mega-man">
                <div class="mega-pointer">
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                        <li><a href="#">Blazers</a></li>
                        <li><a href="#">Denim</a></li>
                        <li><a href="#">Leggings/Pants</a></li>
                        <li><a href="#">Skirts/Shorts</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                    </ul>
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                    </ul>
                    <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                </div>
            </div>
        </div></li>
        <li><div class="mega-hover">
            <a href="catolog.html" class="horizontal__link">Women </a>
            <div class="mega mega-women">
                <div class="mega-pointer">
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                        <li><a href="#">Blazers</a></li>
                        <li><a href="#">Denim</a></li>
                        <li><a href="#">Leggings/Pants</a></li>
                        <li><a href="#">Skirts/Shorts</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                    </ul>
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                    </ul>
                    <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                </div>
            </div>
        </div></li>
        <li>
            <div class="mega-hover">
                <a href="catolog.html" class="horizontal__link">Kids </a>
                <div class="mega mega-kids">
                    <div class="mega-pointer">
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                    </div>
                </div>
            </div>
        </li>
        <li><div class="mega-hover">
            <a href="catolog.html" class="horizontal__link">Accesories</a>
            <div class="mega mega-accesories">
                <div class="mega-pointer">
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                        <li><a href="#">Blazers</a></li>
                        <li><a href="#">Denim</a></li>
                        <li><a href="#">Leggings/Pants</a></li>
                        <li><a href="#">Skirts/Shorts</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                    </ul>
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                    </ul>
                </div>
                <div class="mega__block">
                    <h3>women</h3>
                    <ul class="mega__list">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Sweaters/Knits</a></li>
                        <li><a href="#">Jackets/Coats</a></li>
                    </ul>
                    <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                </div>
            </div>
        </div></li>
        <li>
            <div class="mega-hover">
                <a href="catolog.html" class="horizontal__link">Featured </a>
                <div class="mega mega-kids">
                    <div class="mega-pointer">
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="mega-hover">
                <a href="catolog.html" class="horizontal__link">Hot Deals</a>
                <div class="mega mega-kids">
                    <div class="mega-pointer">
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Leggings/Pants</a></li>
                            <li><a href="#">Skirts/Shorts</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                        </ul>
                    </div>
                    <div class="mega__block">
                        <h3>women</h3>
                        <ul class="mega__list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Sweaters/Knits</a></li>
                            <li><a href="#">Jackets/Coats</a></li>
                        </ul>
                        <a href="#" class="mega__offer"> <div class="mega__offer-text">super sale!</div></a>
                    </div>
                </div>
            </div>
        </li>
    </ul>

</nav>
<section class="company-reviews container">
    <h3>People about us</h3>
    <div class="review-container">
        <div class="user-time">Blah-blah-blah</div>
        <div class="review-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, atque deleniti dignissimos id illo
            laboriosam magnam mollitia neque numquam perferendis, quasi repudiandae totam, ullam. Amet beatae dolore
            in repellendus tempore!
        </div>
    </div>
    <div class="test">
        <?
        reviewRender();
        ?>
    </div>
    <div id="form-block">
        <form method="post" action="php/add_review.php" class="company-review-form" name="review">
            <h3>Please give us a feedback</h3>
            <p>Your name</p>
            <input type="text" name="user-name">
            <p>Your review</p>
            <textarea name="review-text" id="" cols="100" rows="10"></textarea><br>
            <button type="submit" class="send-review-button" id="confirm">Send review</button>
        </form>
    </div>
</section>

<section class="subscribe">
    <div class="container subscribe-container">
        <div class="response">
            <div class="avatar">
                <img src="img/avatar.png" alt="avatar">
            </div>
            <div class="response-text">
                <p>&laquo;Vestibulum quis porttitor dui! Quisque viverra nunc&nbsp;mi, a&nbsp;pulvinar purus condimentum&nbsp;a. Aliquam condimentum mattis neque sed pretium&raquo;</p>
                <h4>Bin Burhan</h4>
                <h5>Dhaka, Bd</h5>
            </div>
            <div class="items-carousel">
                <a href="#" class="response-item"></a>
                <a href="#" class="response-item active-response-item"></a>
                <a href="#" class="response-item"></a>
            </div>

        </div>
        <div class="subscribe-form">
            <h2>Subscribe</h2>
            <h3>FOR OUR NEWLETTER AND PROMOTION</h3>

            <div class="subscribe-input">
                <input type="email" placeholder="input your email">
                <input type="submit" value="subscribe">
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container footer__top">
        <div class="description">
            <div class="link-logo">
                <img src="img/logo.png" alt="logo"><span class="logo">bran</span><span class="d-letter">d</span>
            </div>
            <p>Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go&nbsp;forward benefits. Intrinsicly syndicate an&nbsp;expanded array of&nbsp;processes and cross-unit partnerships. </p>
            <p>Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.</p>
        </div>
        <div class="company">
            <h3>company</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="catolog.html">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="information">
            <h3>information</h3>
            <ul>
                <li><a href="#">Tearms &amp;&nbsp;Condition</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How to&nbsp;Buy</a></li>
                <li><a href="#">How to&nbsp;Sell</a></li>
                <li><a href="#">Promotion</a></li>
            </ul>
        </div>
        <div class="shop-category">
            <h3>shop category</h3>
            <ul>
                <li><a href="catolog.html">Men</a></li>
                <li><a href="catolog.html">Women</a></li>
                <li><a href="catolog.html">Child</a></li>
                <li><a href="catolog.html">Apparel</a></li>
                <li><a href="catolog.html">Brows</a></li>
                <li><a href="catolog.html">All</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-content container">
            <div class="rights">
                <span>&copy;&nbsp;2017 Brand All Rights Reserved.</span>
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-linkedin-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-pinterest-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/company-review-handler.js"></script>
</body>

</html>
