<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



<div id="carouselExampleIndicators" class="carousel slide p-0" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 " src="/template/img/slider1.png" alt="Первый слайд">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/template/img/slider2.png" alt="Второй слайд">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/template/img/slider3.png" alt="Третий слайд">
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
                        <div class="row">
                            <?php foreach ($popularProducts as $popularItem) : ?>
                                <div class="col-sm-6 col-md-4 col-lg-4 product-container">
                                    <div class="product">
                                        <a href="/product/<?php echo $popularItem['id']; ?>" class="img-prod"><img class="img-fluid" src="<?php echo Product::getImage($popularItem['id']); ?>" alt="Colorlib Template"></a>
                                        <div class="text py-3 px-3">
                                            <div class="info">
                                                <h3><a href="/product/<?php echo $popularItem['id']; ?>"><?php echo $popularItem['name']; ?></a></h3>
                                                <div class="d-flex">
                                                    <div class="pricing">
                                                        <p class="price"><span><?php echo $popularItem['price']; ?> руб.</span></p>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="btn-add">
                                                <p class="bottom-area d-flex">
                                                    <a class="btn btn-outline-dark     add-to-cart text-center" href="/cart/addAjax/<?php echo $popularItem['id']; ?>" data-id="<?php echo $popularItem['id']; ?>">В корзину</a>
                                                </p>
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

                                   
                                        <img src="template/img/aboutus33.jpg" alt="">
                                   
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