<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Любитель меда</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/template/css/magnific-popup.css">
    <link rel="stylesheet" href="/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="/template/css/themify-icons.css">
    <link rel="stylesheet" href="/template/css/nice-select.css">
    <link rel="stylesheet" href="/template/css/flaticon.css">
    <link rel="stylesheet" href="/template/css/animate.css">
    <link rel="stylesheet" href="/template/css/slicknav.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="stylesheet" href="/template/css/responsive.css">

    <link rel="stylesheet" href="/assets/css/templatemo.css">

    <!-- slider -->
    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
    <link rel="stylesheet" type="text/css" href="/template/css/slider.css" />
</head>

<body>

    <!-- header-start -->
    <header>


        <div class="header-area ">
            <div class="fa">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <img src="/template/img/logo.png" alt="" class="img-fluid p-0">
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="main-header-area">
                <div class="container-fluid p-0 ">
                    <div class="row align-items-center no-gutters">

                        <div class="col-xl-7 col-lg-6 p-0">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="<?php if ($index == 1) echo 'active'; ?>" href="/">Главная</a></li>
                                        <li><a class="<?php if ($index == 2) echo 'active'; ?>" href="/category/">Каталог</a></li>
                                        <li><a class="<?php if ($index == 3) echo 'active'; ?>" href="/about/">О нас</a></li>
                                        <li><a class="<?php if ($index == 4) echo 'active'; ?>" href="/contacts/">Контакты</a></li>
                                        <li><a class="<?php if ($index == 5) echo 'active'; ?>" href="/delivery/">Оплата и Доставка</a></li>
                                        <li><a class="<?php if ($index == 6) echo 'active'; ?>" href="/feedback/">Обратная связь</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="https://www.instagram.com/lyubitel_meda/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://vk.com/public196266468">
                                                <i class="fa fa-vk"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <p>+7‒913‒098‒50‒00</p>
                                    <!-- <a class="#" href="#">​Барнаул, Социалистический проспект, 128</a> -->
                                </div>

                                <div class="cart">
                                    <a href="/cart">
                                        <i class="fa fa-shopping-cart"></i><span class="cart-word"> Корзина
                                            (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)</span>
                                    </a>
                                </div>
                                <!-- <?php if (User::isGuest()) : ?>
                                    <div class="auth book_btn d-none d-xl-block">
                                        <a href="/user/login/">
                                            <p>Вход</p>
                                        </a>
                                    </div>
                                <?php else : ?>
                                    <div class="account book_btn d-none d-xl-block">
                                        <a href="/cabinet/">
                                            <p>Аккаунт</p>
                                        </a>
                                    </div>
                                    <div class="exit book_btn d-none d-xl-block">
                                        <a href="/user/logout/">
                                            <p>Выход</p>
                                        </a>
                                    </div>
                                <?php endif; ?> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- header-end -->