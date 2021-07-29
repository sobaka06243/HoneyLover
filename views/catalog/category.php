<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<!-- Start Content -->

<div class="container-fluid py-5 catalog">

    <div class="row">

        <div class="col-lg-3">
            <div class="sidebar-categories">
                <a href="#">
                    <div class="head"><i class="fa fa-bars"></i>Категории</div>
                </a>
                <ul class="main-categories">
                    <?php foreach ($categories as $categoryItem) : ?>
                        <li class=" menu-element current main-nav-list <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-12 text-center section_title p-3">
                    <?php foreach ($categories as $categoryItem) : ?>
                        <h1><?php if ($categoryItem['id'] == $categoryId) echo $categoryItem['name']; ?></h1>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">

                <?php foreach ($categoryProducts as $popularItem) : ?>

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


                <div class="pagination-block">
                    <?php echo $pagination->get(); ?>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- End Content -->











<?php include ROOT . '/views/layouts/footer.php'; ?>