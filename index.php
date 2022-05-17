<?php
$title = "Главная";
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
                <a class="header__logo" href="/">
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
                            <h4>меню</h4>
                            <div class="header__menu__list">
                                <h4>мужское</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Аксессуары</a></li>
                                    <li><a href="#">Сумки</a></li>
                                    <li><a href="#">Джинсы</a></li>
                                    <li><a href="#">Футболки</a></li>
                                </ul>
                            </div>
                            <div class="header__menu__list">
                                <h4>женское</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Аксессуары</a></li>
                                    <li><a href="#">Куртки и пальто</a></li>
                                    <li><a href="#">Платья</a></li>
                                    <li><a href="#">Костюмы</a></li>
                                    <li><a href="#">Блузы</a></li>
                                </ul>
                            </div>
                            <div class="header__menu__list">
                                <h4>детское</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Аксессуары</a></li>
                                    <li><a href="#">Куртки и пальто</a></li>>
                                    <li><a href="#">Поло</a></li>
                                    <li><a href="#">Футболки</a></li>
                                    <li><a href="#">Джинсы</a></li>
                                    <li><a href="#">Обувь</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__item">
                    <a href="registration.php"><img src="./img/user.svg" width="29" height="29" alt="user"></a>
                </div>
                <div class="header__item">
                    <a href="cart.php"><img src="./img/basket.svg" width="32" height="29" alt="basket"></a>
                </div>
            </nav>
        </div>

    </header>

    <main>

        <section class="intro">
            <div class="container intro__wrap">
                <div class="intro__wrap-height"></div>
                <div class="intro__text">
                    <h1>
                        <span class="intro__text__top">бренд</span>
                        роскошной <span class="intro__text__decor">моды</span>
                    </h1>
                </div>
            </div>
        </section>

        <section>
            <div class="container offers">
                <div class="offers__block offers__women">
                    <a class="offers__block-link" href="#">30% скидки<span class="font__link">для женщин</span></a>
                </div>
                <div class="offers__block offers__men">
                    <a class="offers__block-link" href="#">горячие предложения<span class="font__link">для
                            мужчин</span></a>
                </div>
                <div class="offers__block offers__kids">
                    <a class="offers__block-link" href="#">новинки<span class="font__link">для детей</span></a>
                </div>
                <div class="offers__block offers__accesories">
                    <a class="offers__block-link-acces" href="#">роскошные и модные<span class="font__link">аксессуары</span></a>
                </div>
            </div>
        </section>

        <section>
            <div class="container content">
                <h2>Новинки недели</h2>
                <p>Самые роскошные и модные новинки для Вас</p>

                <div class="cards">
                    <!-- ТОВАРЫ КАТАЛОГА -->
                    <!-- <a href="product.html">
                        <img class="card__img" src="./img/card1.jpg" alt="card1">
                        <div class="card__text">
                            <h4>ellery x m'o capsule</h4>
                            <p>Known for her sculptural takes on traditional tailoring,
                                Australian
                                arbiter of cool
                                Kym Ellery teams up with Moda
                                Operandi.</p>
                            <p class="price">$52.00</p>
                        </div>
                    </a>
                    <div class="card-add">
                        <a class="card-add__cart" href="#">
                            <span class="iconify cart_icon" data-inline="false" data-icon="mdi-light:cart"></span>
                            <p>Add to Cart</p>
                        </a>
                    </div>
                    </article>

                    <article class="card">
                        <a class="card_link" href="product.html">
                            <img class="card__img" src="./img/card2.jpg" alt="card2">
                            <div class="card__text">
                                <h4>ellery x m'o capsule</h4>
                                <p>Known for her sculptural takes on traditional tailoring,
                                    Australian
                                    arbiter of cool
                                    Kym Ellery teams up with Moda
                                    Operandi.</p>
                                <p class="price">$52.00</p>
                            </div>
                        </a>
                        <div class="card-add">
                            <a class="card-add__cart" href="#">
                                <span class="iconify cart_icon" data-inline="false" data-icon="mdi-light:cart"></span>
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </article>

                    <article class="card">
                        <a class="card_link" href="product.html">
                            <img class="card__img" src="./img/card3.jpg" alt="card3">
                            <div class="card__text">
                                <h4>ellery x m'o capsule</h4>
                                <p>Known for her sculptural takes on traditional tailoring,
                                    Australian
                                    arbiter of cool
                                    Kym Ellery teams up with Moda
                                    Operandi.</p>
                                <p class="price">$52.00</p>
                            </div>
                        </a>
                        <div class="card-add">
                            <a class="card-add__cart" href="#">
                                <span class="iconify cart_icon" data-inline="false" data-icon="mdi-light:cart"></span>
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </article>

                    <article class="card">
                        <a class="card_link" href="product.html">
                            <img class="card__img" src="./img/card4.jpg" alt="card4">
                            <div class="card__text">
                                <h4>ellery x m'o capsule</h4>
                                <p>Known for her sculptural takes on traditional tailoring,
                                    Australian
                                    arbiter of cool
                                    Kym Ellery teams up with Moda
                                    Operandi.</p>
                                <p class="price">$52.00</p>
                            </div>
                        </a>
                        <div class="card-add">
                            <a class="card-add__cart" href="#">
                                <span class="iconify cart_icon" data-inline="false" data-icon="mdi-light:cart"></span>
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </article>

                    <article class="card">
                        <a class="card_link" href="product.html">
                            <img class="card__img" src="./img/card5.jpg" alt="card5">
                            <div class="card__text">
                                <h4>ellery x m'o capsule</h4>
                                <p>Known for her sculptural takes on traditional tailoring,
                                    Australian
                                    arbiter of cool
                                    Kym Ellery teams up with Moda
                                    Operandi.</p>
                                <p class="price">$52.00</p>
                            </div>
                        </a>
                        <div class="card-add">
                            <a class="card-add__cart" href="#">
                                <span class="iconify cart_icon" data-inline="false" data-icon="mdi-light:cart"></span>
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </article>

                    <article class="card">
                        <a class="card_link" href="product.html">
                            <img class="card__img" src="./img/card6.jpg" alt="card6">
                            <div class="card__text">
                                <h4>ellery x m'o capsule</h4>
                                <p>Known for her sculptural takes on traditional tailoring,
                                    Australian
                                    arbiter of cool
                                    Kym Ellery teams up with Moda
                                    Operandi.</p>
                                <p class="price">$52.00</p>
                            </div>
                        </a>
                        <div class="card-add">
                            <a class="card-add__cart" href="#">
                                <span class="iconify cart_icon" data-inline="false" data-icon="mdi-light:cart"></span>
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </article> -->
                    <div class="container">
                        <div class="products cards">

                        </div>
                    </div>
                    <div class="cards__button">
                        <a href="catalog.php" class="button">Посмотреть все</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="privileges">
            <div class="container privileges__info">
                <div class="privileges__offer">
                    <img src="./img/delivery.svg" width="45" height="32" alt="delivery">
                    <h3>Бесплатная Доставка</h3>
                    <p>Доставка по&nbsp;всему миру для всех. Авторитетно трансформируйте инновации следующего поколения
                        с&nbsp;помощью расширенных моделей.</p>
                </div>
                <div class="privileges__offer">
                    <img src="./img/sales.svg" width="40" height="40" alt="sales">
                    <h3>Распродажи и скидки</h3>
                    <p>Мы&nbsp;собрали для Вас все самое интересное: горячие спецпредложения и&nbsp;скидки,
                        беспрецедентные акции, конкурсы с&nbsp;отличными подарками.</p>
                </div>
                <div class="privileges__offer">
                    <img src="./img/quality.svg" width="47" height="35" alt="quality">
                    <h3>Гарантия качества</h3>
                    <p>Мы&nbsp;отвечаем за&nbsp;недостатки Товара, если не&nbsp;докажем, что недостатки возникли после
                        передачи товара клиенту.</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">

        <section class="subscribe">
            <div class="container footer__center">
                <div class="subscribe__feedback">
                    <div class="subscribe__feedback__info">
                        <img src="./img/footerphoto.png" width="96" height="96" alt="photo">
                        <p>“Как может авиакомпания Пакистана! В каждом мультфильме
                            <i>теперь есть репортаж, подушка, соус чили...</i>“
                        </p>
                    </div>
                </div>
                <div class="subscribe__form">
                    <form action="#">
                        <h4>подписаться</h4>
                        <h6>Для подписки внесите e-mail</h6>
                        <div class="input__submit">
                            <input class="mail__input" type="email" placeholder="Введите Ваш E-mail" required>
                            <button class="button__submit" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="social">
            <div class="container social__container">
                <div class="copyright">
                    <p>&copy; 2022 Все Права Бренда Защищены.</p>
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
<script src="catalog.js" defer></script>

</html>