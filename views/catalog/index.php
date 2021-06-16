<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


<!-- <div class="products-slider">
    <div class="container-fluid">
        <div class="row">

            <div class="content col-4">
                <?php foreach ($categories as $categoryItem) : ?>
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="single_delicious d-flex align-items-center">
                            <div class="thumb">
                                <img src="<?php echo Category::getImage($categoryItem['id']); ?>" alt="" width="150px">
                            </div>
                            <div class="info">
                                <h3><a href="/product/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>


        </div>
    </div>
</div> -->





<!-- Start Content -->
<div class="container py-5 catalog">
    <div class="row">
        <div class="col-12 pl-5">
            <h1>Новые товары</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-3">
            <div class="sidebar-categories">
                <div class="head">Категории</div>
                <ul class="main-categories">
                    <?php foreach ($categories as $categoryItem) : ?>
                        <li class="current main-nav-list <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <div class="col-lg-9">
            <div class="row">

                <?php foreach ($newProducts as $popularItem) : ?>

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">

                            <div class="card rounded-0">
                                <a href="#" class=""><img class="card-img rounded-0 img-fluid" src="<?php echo Product::getImage($popularItem['id']); ?>"></a>
                                <div class="card-img-overlay rounded-0 product-overlay  d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white add-to-cart" href="/cart/addAjax/<?php echo $popularItem['id']; ?>" data-id="<?php echo $popularItem['id']; ?>">В корзину&nbsp;&nbsp;</a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="/product/<?php echo $popularItem['id']; ?>">Подробнее</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <a href="/product/<?php echo $popularItem['id']; ?>">
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
</div>

<!-- End Content -->







<?php include ROOT . '/views/layouts/footer.php'; ?>