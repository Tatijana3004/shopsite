<?php
$title = "Корзина";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link type="image/x-icon" rel="icon" href="img/favicon.ico" />
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico" />
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title> <?= $title ?> </title>
</head>

<body>

    <header class="header">

        <div class="container header__wrap">
            <nav class="header__left">
                <a class="header__logo" href="index.php">
                    <img src="./img/logo.png" width="44" height="38" alt="logo">
                </a>
                <form class="search" action="#">
                    <button class="search__button" type="submit"><img src="./img/search.svg" width="26" height="27" alt="search"></button>
                    <input class="search__input" type="text" placeholder="Search">
                </form>
            </nav>
            <nav class="header__right">
                <div class="header__item">
                    <div class="header__button">
                        <img src="./img/menu.svg" width="32" height="23" alt="menu">
                        <div class="header__menu">
                            <h4>MENU</h4>
                            <div class="header__menu__list">
                                <h4>MAN</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Denim</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                </ul>
                            </div>
                            <div class="header__menu__list">
                                <h4>WOMAN</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Jackets & Coats</a></li>
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Shirts</a></li>
                                </ul>
                            </div>
                            <div class="header__menu__list">
                                <h4>KIDS</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Jackets & Coats</a></li>
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Bags</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__item">
                    <a href="registration.php"><img src="./img/user.svg" width="29" height="29" alt="user"></a>
                </div>
                <div class="header__item">
                    <a href="#"><img src="./img/basket.svg" width="32" height="29" alt="basket"></a>
                </div>
            </nav>
        </div>

    </header>

    <header class="cart">
        <div class="container cart__header">
            <h1>shopping cart</h1>
        </div>
    </header>

    <main>

        <div class="container shopping">
            <section class="shop__cart">
                <form action="#">
                    <div class="cart__cards">
                        <article class="cart__card">
                            <a href="product.php"><img src="./img/cart_card1.jpg" alt="cart_card1"></a>
                            <div class="cart__card-text">
                                <span class="iconify cart__card-icon" data-inline="false" data-icon="bi:x"></span>
                                <h3>mango people t-&nbsp;shirt</h3>
                                <span>Price: <span class="intro__text__decor">$300</span></span>
                                <span>Color: Red</span>
                                <span>Size: XL</span>
                                <span class="quantity">Quantity: <input class="quantity__input" type="number" placeholder="1"></span>
                            </div>
                        </article>
                        <article class="cart__card">
                            <a href="product.php"><img src="./img/cart_card2.jpg" alt="cart_card2"></a>
                            <div class="cart__card-text">
                                <span class="iconify cart__card-icon" data-inline="false" data-icon="bi:x"></span>
                                <h3>mango people t-&nbsp;shirt</h3>
                                <span>Price: <span class="intro__text__decor">$300</span></span>
                                <span>Color: Red</span>
                                <span>Size: XL</span>
                                <span class="quantity">Quantity: <input class="quantity__input" type="number" placeholder="1"></span>
                            </div>
                        </article>
                    </div>
                    <div class="shop__cart-button">
                        <button type="reset">clear shopping cart</button>
                        <a href="catalog.php">continue shopping</a>
                    </div>
                </form>
            </section>
            <section class="shop__forms">
                <form class="ship__form" action="#">
                    <h4>shipping adress</h4>
                    <input type="text" placeholder="Bangladesh" required>
                    <input type="text" placeholder="State" required>
                    <input type="number" placeholder="Postcode/ZIP" required>
                    <button type="submit">get a quote</button>
                </form>
                <form class="check__form" action="#">
                    <h6>sub total <span>$600</span></h6>
                    <h4>grand total <span>$600</span></h4>
                    <hr>
                    <button type="submit">proceed to checkout</button>
                </form>
            </section>
        </div>

    </main>

    <footer class="footer">

        <section class="subscribe">
            <div class="container footer__center">
                <div class="subscribe__feedback">
                    <div class="subscribe__feedback__info">
                        <img src="./img/footerphoto.png" width="96" height="96" alt="photo">
                        <p>“Vestibulum quis porttitor dui! Quisque viverra nunc mi,
                            <i>a pulvinar purus condimentum</i>“
                        </p>
                    </div>
                </div>
                <div class="subscribe__form">
                    <form action="#">
                        <h4>subscribe</h4>
                        <h6>for our newletter and promotion</h6>
                        <div class="input__submit">
                            <input class="mail__input" type="email" placeholder="Enter Your Email" required>
                            <button class="button__submit" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="social">
            <div class="container social__container">
                <div class="copyright">
                    <p>&copy; 2021 Brand All Rights Reserved.</p>
                </div>
                <div class="social__links">
                    <a href="#"><span class="iconify iconify__social" data-inline="false" data-icon="ei:sc-facebook"></span></a>
                    <a href="#"><span class="iconify iconify__social" data-inline="false" data-icon="ei:sc-instagram"></span></a>
                    <a href="#"><span class="iconify iconify__social" data-inline="false" data-icon="typcn:social-pinterest"></span></a>
                    <a href="#"><span class="iconify iconify__social" data-inline="false" data-icon="ei:sc-twitter"></span></a>
                </div>
            </div>
        </section>

    </footer>

</body>

</html>