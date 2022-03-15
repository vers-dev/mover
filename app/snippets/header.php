<header class="header" id="header">
    <div class="container">
        <div class="header-content">
            <div class="logo-wrapper">
                <img src="assets/images/icons/logo.svg" alt="logo" class="logo">
            </div>
            <nav class="nav">
                <ul class="header-menu">
                    <li class="menu__item menu-item">
                        <a href="/search.php" class="menu-item__link">Искать</a>
                    </li>
                    <li class="menu__item menu-item">
                        <a href="/create-trip.php" class="menu-item__link">Добавить поездку</a>
                    </li>
                    <li class="menu__item menu-item dropdown">
                        <!--                        <a class="menu-item__link dropdown-toggle">-->
                        <!---->
                        <!--                        </a>-->

                        <a class="menu-item__link nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                           role="button"
                           aria-expanded="false"><img src="assets/images/icons/user.svg" alt="logo"
                                                      class="menu-item__img">
                        </a>
                        <ul class="dropdown-menu">

                            <?php if (isset($_SESSION['id'])): ?>
                                <li><a class="dropdown-item" href="/profile.php">Профиль</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/app/actions/exit.action.php">Выход</a></li>

                            <?php else: ?>

                                <li><a class="dropdown-item" href="/login.php">Авторизация</a></li>
                                <li><a class="dropdown-item" href="/registration.php">Регистрация</a></li>

                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
