<?php
$title = "Каталог";
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

    <header class="catalog">
        <div class="container catalog__header">
            <h1>новинки</h1>
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

        <div class="container filters">
            <div class="filters__left">
                <details class="filter">
                    <summary class="filter__main__title"> <span class="summary__span">фильтр</span> <svg class="filter__svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.833333 10H4.16667C4.625 10 5 9.625 5 9.16667C5 8.70833 4.625 8.33333 4.16667 8.33333H0.833333C0.375 8.33333 0 8.70833 0 9.16667C0 9.625 0.375 10 0.833333 10ZM0 0.833333C0 1.29167 0.375 1.66667 0.833333 1.66667H14.1667C14.625 1.66667 15 1.29167 15 0.833333C15 0.375 14.625 0 14.1667 0H0.833333C0.375 0 0 0.375 0 0.833333ZM0.833333 5.83333H9.16667C9.625 5.83333 10 5.45833 10 5C10 4.54167 9.625 4.16667 9.16667 4.16667H0.833333C0.375 4.16667 0 4.54167 0 5C0 5.45833 0.375 5.83333 0.833333 5.83333Z" />
                        </svg></summary>
                    <details class="filter__class">
                        <summary class="filter__title">Каталог</summary>
                        <ul class="filter__list">
                            <li><a href="#">Сумки</a></li>
                            <li><a href="#">Аксессуары</a></li>
                            <li><a href="#">Джинсы</a></li>
                            <li><a href="#">Толстовки и свитшоты</a></li>
                            <li><a href="#">Куртки и пальто</a></li>
                            <li><a href="#">Поло</a></li>
                            <li><a href="#">Рубашки</a></li>
                            <li><a href="#">Обувь</a></li>
                            <li><a href="#">Свитера и трикотаж</a></li>
                            <li><a href="#">Футболки</a></li>
                        </ul>
                    </details>
                    <details class="filter__class">
                        <summary class="filter__title">бренд</summary>
                        <ul class="filter__list">
                            <li><a href="#">Balenciaga</a></li>
                            <li><a href="#">Gucci</a></li>
                            <li><a href="#">Moncler</a></li>
                            <li><a href="#">D&G</a></li>
                            <li><a href="#">Versace</a></li>
                            <li><a href="#">Prada</a></li>
                        </ul>
                    </details>
                    <details class="filter__class">
                        <summary class="filter__title">дизайнер</summary>
                        <ul class="filter__list">
                            <li><a href="#">BTom Ford</a></li>
                            <li><a href="#">Betsey Johnson</a></li>
                            <li><a href="#">Ralph Lauren</a></li>
                            <li><a href="#">Marc Jacobs</a></li>
                            <li><a href="#">Valentino</a></li>
                            <li><a href="#">Dolce & Gabbana</a></li>
                        </ul>
                    </details>
                </details>
            </div>
            <div class="filters__right">
                <div class="features features_hov-pink">тренд сезона<span class="iconify features_icon" data-inline="false" data-icon="majesticons:chevron-down-line"></span></div>
                <div class="features features_hov features_hov-pink">размер<span class="iconify features_icon" data-inline="false" data-icon="majesticons:chevron-down-line"></span>
                    <div class="features__checkbox">
                        <label for="xs">
                            <input type="checkbox" id="xs">xs
                        </label>
                        <label for="s">
                            <input type="checkbox" id="s">s
                        </label>
                        <label for="m">
                            <input type="checkbox" id="m">m
                        </label>
                        <label for="l">
                            <input type="checkbox" id="l">l
                        </label>
                    </div>
                </div>
                <div class="features features_hov features_hov-pink">цена<span class="iconify features_icon" data-inline="false" data-icon="majesticons:chevron-down-line"></span>
                    <div class="features__checkbox">
                        <label for="xs">
                            <input type="checkbox" id="xs">&lt; 1000
                        </label>
                        <label for="s">
                            <input type="checkbox" id="s">&gt; 1000
                        </label>
                        <label for="m">
                            <input type="checkbox" id="m">&gt; 5000
                        </label>
                        <label for="l">
                            <input type="checkbox" id="l">&gt; 10000
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <!-- ТОВАРЫ КАТАЛОГА -->
            <div class="container">
                <div class="products cards">

                </div>
            </div>

            <nav>
                <ul class="pagination">
                    <li><a href="#"><span class="iconify pagination__icon" data-inline="false" data-icon="dashicons:arrow-left-alt2" style="font-size: 20px;"></span></a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">.....</a></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><span class="iconify pagination__icon" data-inline="false" data-icon="dashicons:arrow-right-alt2" style="font-size: 20px;"></span></a></li>
                </ul>
            </nav>
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