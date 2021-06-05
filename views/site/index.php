<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 " src="/template/img/slider1.jpg" alt="Первый слайд">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/template/img/slider2.jpg" alt="Второй слайд">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/template/img/slider3.jpg" alt="Третий слайд">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script>
    $('.carousel').carousel()
</script>

<!-- <div class="pieces-slider">
    <div class="pieces-slider__slide">
        <img class="pieces-slider__image" src="template/img/slider1.jpg" alt="">
        <h2 class="pieces-slider__text">Текст 1fsdgdsgdsfgdrsfghsdfgjkdhjkgdfhkgjdfhjkafdsfdsfsdfdsfdsfdsfs</h2>
    </div>
    <div class="pieces-slider__slide">
        <img class="pieces-slider__image" src="template/img/slider2.jpg" alt="">
        <h2 class="pieces-slider__text">Текст 2</h2>
    </div>
    <div class="pieces-slider__slide">
        <img class="pieces-slider__image" src="template/img/slider3.jpg" alt="">
        <h2 class="pieces-slider__text">Текст 3</h2>
    </div>
    <!— Canvas to draw the pieces —>
        <canvas class="pieces-slider__canvas"></canvas>
        <!— Slider buttons: prev and next —>
            <button class="pieces-slider__button pieces-slider__button--prev">prev</button>
            <button class="pieces-slider__button pieces-slider__button--next">next</button>
</div> -->

<div class="products-slider">
    <div class="container-fluid">
        <div class="row">



            <!-- slider_area_start -->

            <div class="content col-12">
                <!-- Pieces Slider -->

                <div class="best_burgers_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section_title text-center mb-80">
                                    <h3>Популярные товары</h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <?php foreach ($popularProducts as $popularItem) : ?>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="single_delicious d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="<?php echo Product::getImage($popularItem['id']); ?>" alt="" width="150px">
                                        </div>
                                        <div class="info">
                                            <h3><a href="product/<?php echo $popularItem['id']; ?>"><?php echo $popularItem['name']; ?></a></h3>
                                            <p>Описание 1</p>
                                            <span><?php echo $popularItem['price']; ?></span>
                                            <div class="iteam_links">
                                                <a class="boxed-btn5 add-to-cart" href="addAjax/<?php echo $popularItem['id']; ?>" data-id="<?php echo $popularItem['id']; ?>">В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div> -->
                        <div class="row">
                            <?php foreach ($popularProducts as $popularItem) : ?>

                                <div class="col-md-4">
                                    <div class="card mb-4 product-wap rounded-0">

                                        <div class="card rounded-0">
                                            <a href="#" class=""><img class="card-img rounded-0 img-fluid" src="<?php echo Product::getImage($popularItem['id']); ?>"></a>
                                            <div class="card-img-overlay rounded-0 product-overlay  d-flex align-items-center justify-content-center">
                                                <ul class="list-unstyled">
                                                    <li><a class="btn btn-success text-white" href="shop-single.html">В корзину&nbsp;&nbsp;</a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="product/<?php echo $popularItem['id']; ?>">Подробнее</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <a href="product/<?php echo $popularItem['id']; ?>">
                                                <p class="text-center mb-0"><?php echo $popularItem['name']; ?></p>
                                            </a>

                                            <p class="text-center mb-0"><?php echo $popularItem['price']; ?> руб.</p>
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
                                        <span>Ваш выбор</span>
                                        <h3>Лучший мед <br>
                                            в Алтайском крае</h3>
                                    </div>
                                    <p>Всем известно, что Алтай достаточно разновидный по географическому принципу и наделен самыми различными и богатыми медоносами. </p>
                                    <p>Природа дарит нам один из самых удивительных продуктов пчеловодства с ярким и сочным вкусом – алтайский мед!</p>
                                    <p>Одной из важнейших отличительных особенностей алтайского меда является его состав. Собирается пчелами с растений, которые нигде больше кроме Алтая не произрастают. Такие травы отдают продукту исключительно полезные и чудодейственные свойства. Мед Алтая ценится за сладкий и в то же время терпковатый вкус и упоительный запах разнотравья. </p>

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