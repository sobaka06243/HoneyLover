<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="products-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="products col-2">
                <div class="logo">
                    <a href="#welcome">
                        <h1>Товары</h1>
                    </a>
                </div>
                <nav class="left-nav">
                    <ul id="nav">
                        <?php foreach ($categories as $categoryItem) : ?>
                            <li class="current"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <!-- slider_area_start -->

            <div class="content col-10">
                <!-- Pieces Slider -->
                <div class="pieces-slider">
                    <!-- Each slide with corresponding image and text -->
                    <div class="pieces-slider__slide">
                        <img class="pieces-slider__image" src="template/img/slider1.jpg" alt="">
                        <h2 class="pieces-slider__text">Текст 1</h2>
                    </div>
                    <div class="pieces-slider__slide">
                        <img class="pieces-slider__image" src="template/img/slider2.jpg" alt="">
                        <h2 class="pieces-slider__text">Текст 2</h2>
                    </div>
                    <div class="pieces-slider__slide">
                        <img class="pieces-slider__image" src="template/img/slider3.jpg" alt="">
                        <h2 class="pieces-slider__text">Текст 3</h2>
                    </div>
                    <!-- Canvas to draw the pieces -->
                    <canvas class="pieces-slider__canvas"></canvas>
                    <!-- Slider buttons: prev and next -->
                    <button class="pieces-slider__button pieces-slider__button--prev">prev</button>
                    <button class="pieces-slider__button pieces-slider__button--next">next</button>
                </div>

                <div class="best_burgers_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section_title text-center mb-80">
                                    <h3>Популярные товары</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($popularProducts as $popularItem) : ?>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="single_delicious d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="template/img/popular1.jpg" alt="" width="150px">
                                        </div>
                                        <div class="info">
                                            <h3><a href="product/<?php echo $popularItem['id'];?>"><?php echo $popularItem['name'];?></a></h3>
                                            <p>Описание 1</p>
                                            <span><?php echo $popularItem['price'];?></span>
                                            <div class="iteam_links">
                                                <a class="boxed-btn5" href="addAjax/<?php echo $popularItem['id'];?>">В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- features_room_startt -->

                <!-- about_area_start -->
                <div class="about_area">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about_thumb2">
                                    <div class="img_1">
                                        <img src="template/img/aboutus1.jpg" alt="">
                                    </div>
                                    <div class="img_2">
                                        <img src="template/img/aboutus33.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                                <div class="about_info">
                                    <div class="section_title mb-20px">
                                        <span>О нас</span>
                                        <h3>Лучший мед <br>
                                            в Алтайском крае</h3>
                                    </div>
                                    <p>Любите вкусный и натуральный мёд? И, конечно же, экологически чистый?

                                        Тогда Вы нашли то, что искали!

                                        Наша пасека расположена в экологически чистом районе Алтайского края. Более 10 лет мы с любовью занимаемся пчеловодством и продаём мёд. Честно и добросовестно относимся к делу, поэтому наш мёд имеет отменные вкусовые качества, хорошую текстуру и богатый витаминно-минеральный состав. Для Вас мы отбираем товары пчеловодства (перга, подмор, пчелиная пыльца, прополис, восковая моль) только лучшего качества.

                                        Зарядитесь энергией и силой Алтая, укрепите свой организм вкусным и полезным лакомством!</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about_area_end -->

                <!-- testimonial_area_start  -->
                <div class="testimonial_area ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title mb-60 text-center">
                                    <h3>Счастливые клиенты</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testmonial_active owl-carousel">
                                    <div class="single_carousel">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="single_testmonial text-center">
                                                    <p>Отличный мёд, самый вкусный, который пробовала) помимо мёда, огромный ассортимент товаров в подарок и для души)</p>
                                                    <div class="testmonial_author">
                                                        <div class="thumb">
                                                            <img src="template/img/testmonial/1.png" alt="">
                                                        </div>
                                                        <h4>Александра Атанян</h4>
                                                        <div class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_carousel">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="single_testmonial text-center">
                                                    <p>Очень обходительные сотрудники, доступно проконсультировали о продукции. Огромное спасибо за вкусный и свежий мёд! Будем вас обязательно советовать друзьям и знакомым.</p>
                                                    <div class="testmonial_author">
                                                        <div class="thumb">
                                                            <img src="template/img/testmonial/2.png" alt="">
                                                        </div>
                                                        <h4>​Инна Писанова</h4>
                                                        <div class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_carousel">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="single_testmonial text-center">
                                                    <p>Широкий ассортимент, вежливый и грамотный продавец. Бесплатная дегустация.</p>
                                                    <div class="testmonial_author">
                                                        <div class="thumb">
                                                            <img src="template/img/testmonial/3.png" alt="">
                                                        </div>
                                                        <h4>Виктор Агафонов</h4>
                                                        <div class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial_area_ned  -->
            </div>

            <!-- slider_area_end -->
        </div>

    </div>
</div>









<?php include ROOT . '/views/layouts/footer.php'; ?>