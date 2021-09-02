<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="products-slider">
    <div class="container-fluid ">
        <div class="row">


            <!-- slider_area_start -->

            <div class="content col-12 clear-product" id="cart-products">
                <?php Cart::getTableProduct(); ?>
            </div>
        </div>

    </div>
</div>









<?php include ROOT . '/views/layouts/footer.php'; ?>