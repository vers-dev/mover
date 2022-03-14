<?php
require('app/QueryDataBase.php');
$database = new QueryDataBase();
session_start();

require('app/models/User.php');
require('app/models/Trip.php');

//$array = ['Mercedes-Benz CLA  AMG седан','Mercedes-Benz CLS  седан','Mercedes-Benz S седан','Mercedes-Benz Maybach S седан','Mercedes-Benz A седан','Mercedes-Benz C AMG купе','Mercedes-Benz C AMG седан','Mercedes-Benz C седан','Mercedes-Benz C купе','Mercedes-Benz E AMG седан','Mercedes-Benz E купе','Mercedes-Benz E седан','Mercedes-Benz AMG GT купе','Mercedes-Benz A хэтчбек','Mercedes-Benz E универсал','Mercedes-Benz AMG GT хэтчбек','Mercedes-Benz GLE Coupe кроссовер','Mercedes-Benz GLA кроссовер','Mercedes-Benz GLB внедорожник','Mercedes-Benz GLE Coupe AMG кроссовер','Mercedes-Benz GLS внедорожник','Mercedes-Benz EQC кроссовер','Mercedes-Benz GLE кроссовер','Mercedes-Benz G внедорожник','Mercedes-Benz G AMG внедорожник','Mercedes-Benz GLC кроссовер','Mercedes-Benz GLC AMG кроссовер','Mercedes-Benz GLC Coupe кроссовер','Mercedes-Benz GLC Coupe AMG кроссовер','Mercedes-Benz Sprinter фургон','Mercedes-Benz Sprinter микроавтобус','Mercedes-Benz Vito фургон','Mercedes-Benz Vito микроавтобус','Mercedes-Benz V микроавтобус','Mercedes-Benz 200','Mercedes-Benz A','Mercedes-Benz A AMG','Mercedes-Benz AMG GT','Mercedes-Benz B','Mercedes-Benz C','Mercedes-Benz C AMG','Mercedes-Benz Citan','Mercedes-Benz CL','Mercedes-Benz CL AMG','Mercedes-Benz CLA ','Mercedes-Benz CLA  AMG','Mercedes-Benz CLC','Mercedes-Benz CLK','Mercedes-Benz CLS ','Mercedes-Benz CLS AMG','Mercedes-Benz E','Mercedes-Benz E AMG','Mercedes-Benz G','Mercedes-Benz G AMG','Mercedes-Benz GL','Mercedes-Benz GL AMG','Mercedes-Benz GLA','Mercedes-Benz GLA AMG','Mercedes-Benz GLC','Mercedes-Benz GLC AMG','Mercedes-Benz GLC Coupe','Mercedes-Benz GLC Coupe AMG','Mercedes-Benz GLE','Mercedes-Benz GLE AMG','Mercedes-Benz GLE Coupe','Mercedes-Benz GLE Coupe AMG','Mercedes-Benz GLK','Mercedes-Benz GLS','Mercedes-Benz GLS AMG','Mercedes-Benz M','Mercedes-Benz M AMG','Mercedes-Benz Maybach S','Mercedes-Benz R','Mercedes-Benz R AMG','Mercedes-Benz S','Mercedes-Benz S AMG','Mercedes-Benz SL','Mercedes-Benz SL AMG','Mercedes-Benz SLC','Mercedes-Benz SLC AMG','Mercedes-Benz SLK','Mercedes-Benz SLK AMG','Mercedes-Benz SLR','Mercedes-Benz SLS AMG','Mercedes-Benz Sprinter','Mercedes-Benz V','Mercedes-Benz Vaneo','Mercedes-Benz Vario','Mercedes-Benz Viano','Mercedes-Benz Vito','Mercedes-Benz W100','Mercedes-Benz X-class'];
$cars = $database->getAllData("cars");
//echo '<pre>';
//print_r($cars);
//echo '</pre>';



//    $database->getLink()->query("INSERT INTO cars (name) VALUES('$car')");

?>

<select class="input form__input">
    <?php foreach ($cars as $car): ?>
        <option value="<?php echo $car['id'];?>"><?php echo $car['name'];?></option>
    <?php endforeach; ?>
</select>

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

<?php require('app/snippets/header.php'); ?>

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