<?php
$title = "Карточка товара";
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

    <header class="product">
        <div class="container product__header">
            <h1>НОВЫЕ ПОСТУПЛЕНИЯ</h1>
            <nav>
                <ul class="catalog__breadcrumbs">
                    <li><a href="index.php">главная</a></li>
                    <li><a href="#">мужское</a></li>
                    <li>новинки</li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Карусель слайдов -->

        <section class="product__img">
            <button class="product__img__button">
                <span class=" iconify pib__icon" data-inline="false" data-icon="dashicons:arrow-left-alt2"></span>
            </button>
            <div class="gallery gallery-box product__img">
                <div class="tabs">
                </div>
                <div class="main">
                </div>

            </div>
            <!-- <div class="product__img-img">
                    <img src="./img/product_photo.jpg" alt="photo">
                </div> -->
            <button class="product__img__button">
                <span class="iconify pib__icon" data-inline="false" data-icon="dashicons:arrow-right-alt2"></span>
            </button>

        </section>

        <!-- <section id="gallery" class="gallery-box product__img">
            <div>
                1
                <button class="product__img__button button"><span class=" iconify pib__icon prev" data-inline="false"
                        data-icon="dashicons:arrow-left-alt2"></span>
                </button>
            </div>
            <div class="photos product__img-img">
                2
                <img src="img/card1.jpg" class="showed">
                <img src="img/card2.jpg">
                <img src="img/card3.jpg">
                <img src="./img/product_photo.jpg">
                <img src="./img/product_photo.jpg">
                <img src="./img/product_photo.jpg">
            </div> -->

        <!-- <div>
                <button class="product__img__button button"><span class="iconify pib__icon next" data-inline="false"
                        data-icon="dashicons:arrow-right-alt2"></span>
                </button>
            </div> 
        </section>-->

        <section>
            <div class="container product__info">
                <p class="product__info__h">мужская коллекция</p>
                <span></span>
                <h3>РОСКОШЬ И ШИК MOSCHINO</h3>
                <p class="product__info__text">Его с&nbsp;юных лет очень забавляла чрезмерная серьезность надменных
                    неулыбающихся манекенщиц, торжественно вышагивающих по&nbsp;подиуму. Поэтому, основав собственную
                    модную марку, он&nbsp;первым делом превратил свои дефиле в&nbsp;дерзкий перфоманс, хэппенинг,
                    балаган&nbsp;&mdash; забавный <nobr>театр-бурлеск</nobr>, комедию масок Дель Арте, в&nbsp;которой
                    отвел себе роль Арлекина.</p>
                <p class="product__info__price">14000 руб</p>
                <hr>
                <div class="product__info__features">
                    <button class="features features_hov-pink">цвет <span class="iconify features_icon" data-inline="false" data-icon="majesticons:chevron-down-line"></span></button>
                    <button class="features features_hov-pink">размер <span class="iconify features_icon" data-inline="false" data-icon="majesticons:chevron-down-line"></span></button>
                    <button class="features features_hov-pink">количество <span class="iconify features_icon" data-inline="false" data-icon="majesticons:chevron-down-line"></span></button>
                </div>
                <button class="product__info__button" type="submit"><span class="iconify pib__icon" data-inline="false" data-icon="mdi-light:cart"></span><span class="pib__text">Добавить в
                        корзину</span></button>
            </div>
        </section>

        <section>
            <div class="container products__bottom">
                <!-- ТОВАРЫ КАТАЛОГА -->
                <!-- <article class="card">
                    <a href="product.html">
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
                </article> -->
                <div class="container">
                    <div class="products cards">

                    </div>
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
    <script src="script.js">
    </script>
</body>
<script src="gallery.js"></script>
<script src="catalog.js" defer></script>

</html>