<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="products-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar-categories col-2">
                <div class="head">Категории</div>
                <ul class="main-categories">
                    <?php foreach ($categories as $categoryItem) : ?>
                        <li class="current main-nav-list <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- slider_area_start -->

            <div class="content col-10">

                <div class="best_burgers_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section_title text-center mb-80">

                                    <h3></h3>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xl-6 col-md-6 col-lg-6">
                                <div class="single_delicious d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="/template/img/popular1.jpg" alt="" width="150px">
                                    </div>
                                    <div class="info">
                                        <h3><?php echo $product['name']; ?></h3>
                                        <p>Описание 1</p>
                                        <span><?php echo $product['price']; ?></span>
                                        <div class="iteam_links">
                                            <a class="boxed-btn5" href="Menu.html">В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- features_room_startt -->




            </div>

        </div>

    </div>
</div>









<?php include ROOT . '/views/layouts/footer.php'; ?>