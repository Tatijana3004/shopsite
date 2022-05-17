<?php
$title = "Регистрация";
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
    <title><?= $title ?></title>
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

    <header class="reg">
        <div class="container reg__header">
            <h1>регистрация</h1>
        </div>
    </header>

    <main>
        <div class="container registration">
            <section class="reg__input">
                <form class="reg__form" action="#">
                    <h4>Ваше Имя</h4>
                    <input class="input__name" type="text" placeholder="First Name" autofocus required>
                    <input class="input__last" type="text" placeholder="Last Name" required>
                    <div class="check__gender">
                        <input type="radio" name="gender" id="men" checked> <label class="check__label" for="men">Мужчина</label>
                        <input type="radio" name="gender" id="women"> <label class="check__label" for="women">Женщина</label>
                    </div>
                    <h4>Логин и пароль для входа в систему</h4>
                    <input class="input__mail" type="email" placeholder="Email" required>
                    <input class="input__pass" type="password" placeholder="Пароль" required minlength="8">
                    <p class="text__reg">Пожалуйста, используйте 8 или более символов, по&nbsp;крайней мере, с&nbsp;1
                        цифрой и&nbsp;смесью прописных и&nbsp;строчных букв.</p>
                    <button class="reg__submit" type="submit">присоединяйтесь сейчас<span class="iconify icon__submit" data-inline="false" data-icon="bi:arrow-right" style="font-size: 20px;"></span></button>
                </form>
            </section>

            <section class="reg__info">
                <h2>У лояльности есть свои преимущества</h2>
                <p>Участвуйте в&nbsp;программе лояльности, где вы&nbsp;можете зарабатывать баллы и&nbsp;получать
                    серьезные льготы. Начиная с&nbsp;них, как только вы&nbsp;присоединитесь:</p>
                <p><span class="iconify icon__text" data-inline="false" data-icon="websymbol:ok"></span>Приветственное
                    предложение со&nbsp;скидкой 15%</p>
                <p><span class="iconify icon__text" data-inline="false" data-icon="websymbol:ok"></span>Бесплатная
                    доставка, возврат и&nbsp;обмен по&nbsp;всем заказам</p>
                <p><span class="iconify icon__text" data-inline="false" data-icon="websymbol:ok"></span>Скидка
                    1000&nbsp;рублей на&nbsp;покупку в&nbsp;твой день рождения</p>
                <p><span class="iconify icon__text" data-inline="false" data-icon="websymbol:ok"></span>Ранний доступ
                    к&nbsp;товарам</p>
                <p><span class="iconify icon__text" data-inline="false" data-icon="websymbol:ok"></span>Эксклюзивные
                    предложения и&nbsp;бонусы</p>
            </section>
        </div>
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

</html>