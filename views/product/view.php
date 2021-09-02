<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="products-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar-categories col-lg-3">
                <a href="#">
                    <div class="head"><i class="fa fa-bars"></i>Категории</div>
                </a>
                <ul class="main-categories">
                    <?php foreach ($categories as $categoryItem) : ?>
                        <li class=" menu-element current main-nav-list <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- slider_area_start -->

            <!-- Open Content -->
            <div class=" col-lg-9">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-lg-5 mt-5">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="<?php echo Product::getImage($product['id']); ?>" alt="Card image cap" id="product-detail">
                            </div>

                        </div>
                        <!-- col end -->
                        <div class="col-lg-7 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="h2"><?php echo $product['name']; ?></h1>
                                    <p class="h3 py-2">Цена: <?php echo $product['price']; ?> руб.</p>
                                    <h4>Описание:</h4>
                                    <p><?php echo $product['description']; ?></p>
                                    <a class="btn btn-outline-dark  add-to-cart" href="/cart/addAjax/<?php echo $product['id']; ?>" data-id="<?php echo $product['id']; ?>">В корзину&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Close Content -->

        </div>

    </div>
</div>









<?php include ROOT . '/views/layouts/footer.php'; ?>