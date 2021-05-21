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
                            <li class="current <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <!-- slider_area_start -->

            <div class="content col-10">

                <div class="best_burgers_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section_title text-center mb-80">
                                    <?php foreach ($categories as $categoryItem) : ?>
                                        <h3><?php if ($categoryId == $categoryItem['id']) {
                                                echo $categoryItem['name'];
                                                break;
                                            } ?></h3>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($categoryProducts as $product) : ?>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="single_delicious d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="/template/img/popular1.jpg" alt="" width="150px">
                                        </div>
                                        <div class="info">
                                            <h3><a href="/product/<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a></h3>
                                            <p>Описание 1</p>
                                            <span><?php echo $product['price']; ?></span>
                                            <div class="iteam_links">
                                                <a class="boxed-btn5" href="Menu.html">В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- features_room_startt -->
                <div class="pagination-block">
                    <?php echo $pagination->get(); ?>
                </div>


            </div>

        </div>

    </div>
</div>








<?php include ROOT . '/views/layouts/footer.php'; ?>