<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Стили скрипты  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/index.js" defer></script>

    <!--  Шрифты  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Work+Sans:wght@100&display=swap"
          rel="stylesheet">

    <title>Mover</title>
</head>
<body>

<header class="header" id="header">
    <div class="container">
        <div class="header-content">
            <div class="logo-wrapper">
                <img src="assets/images/icons/logo.svg" alt="logo" class="logo">
            </div>
            <nav class="nav">
                <ul class="header-menu">
                    <li class="menu__item menu-item">
                        <img src="assets/images/icons/search.svg" alt="search-icon" class="menu-item__img">
                        <a href="#" class="menu-item__link"> Искать</a>
                    </li>
                    <li class="menu__item menu-item">
                        <a href="#" class="menu-item__link">Добавить поездку</a>
                    </li>
                    <li class="menu__item menu-item">
                        <a href="#" class="menu-item__link"> <img src="assets/images/icons/user.svg" alt="logo"
                                                                  class="menu-item__img"> </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="section banner">
    <div class="container">
        <div class="section-content banner-content">
            <h1 class="banner__title">Междугородние поездки в любое удобное время</h1>
            <form action="?" class="form banner-form" method="post" name="search">
                <input type="text" class="input banner__input first" name="from" placeholder="Откуда">

                <input type="text" class="input banner__input" name="to" placeholder="Куда">

                <input type="date" class="input banner__input" name="date">

                <input type="text" class="input banner__input" name="quantity" value="1">
                <button class="button banner__button last">Найти</button>
            </form>
        </div>
    </div>
</section>

<section class="section features">
    <div class="container">
        <div class="section-content features-content">
            <div class="grid features-grid">
                <div class="feature">
                    <img src="assets/images/icons/features1.svg" alt="feature" class="feature__img">
                    <h2 class="feature__title">Экономим ваши денги</h2>
                    <p class="feature__text">Куда бы вы ни собирались, вы сможете найти свою
                        идеальную поездку среди множества маршрутов и доехать по самой низкой цене.</p>
                </div>

                <div class="feature">
                    <img src="assets/images/icons/docs.svg" alt="feature" class="feature__img">
                    <h2 class="feature__title">Доверяйте своим попутчикам</h2>
                    <p class="feature__text">Мы стараемся узнать ваших будущих попутчиков как
                        можно лучше. Мы проверяем отзывы, профили и паспортные данные попутчиков, чтобы вы знали, с кем
                        поедете.</p>
                </div>

                <div class="feature">
                    <img src="assets/images/icons/flash.svg" alt="feature" class="feature__img">
                    <h2 class="feature__title">В дорогу за пару кликов!</h2>
                    <p class="feature__text">Забронировать поездку проще простого. В нашем приложении легко разобраться:
                        мощный алгоритм за пару минут найдет водителя поблизости, и вам останется нажать пару кнопок для
                        брони.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section routes">
    <div class="container">
        <div class="section-content routes-content">
            <h2 class="section__title routes__title">Куда вы хотите поехать?</h2>
            <div class="grid routes-grid">
                <a href="#">
                    <div class="route">
                        <div class="route-way">
                            <span class="route-city">Казань</span>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L17 8L10 15M1 8H17H1Z" stroke="#708C91" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="route-city">Москва</span>
                        </div>
                        <div class="route-price">
                            <h3 class="price">890 р.</h3>
                        </div>
                    </div>
                </a>

                <a href="#" >
                    <div class="route grid">
                        <div class="route-way">
                            <span class="route-city">Казань</span>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L17 8L10 15M1 8H17H1Z" stroke="#708C91" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="route-city">Москва</span>
                        </div>
                        <div class="route-price">
                            <h3 class="price">890 р.</h3>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="route grid">
                        <div class="route-way">
                            <span class="route-city">Казань</span>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L17 8L10 15M1 8H17H1Z" stroke="#708C91" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="route-city">Москва</span>
                        </div>
                        <div class="route-price">
                            <h3 class="price">890 р.</h3>
                        </div>
                    </div>
                </a>
            </div>
            <a href="#" class="routes__link">Посмотреть все маршруты</a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="assets/images/icons/logo.svg" alt="logo" class="logo">
            </div>

            <p class="footer__text">Mover, 2022 &copy;</p>
        </div>
    </div>
</footer>


</body>
</html>