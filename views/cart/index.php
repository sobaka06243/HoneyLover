<?php include ROOT . '/views/layouts/header.php'; ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="products-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-1">
                <div class="sidebar-categories">
                    <div class="head">Категории</div>
                    <ul class="main-categories">
                        <?php foreach ($categories as $categoryItem) : ?>
                            <li class="current main-nav-list <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

            <!-- slider_area_start -->

            <div class="content col-9 p-1" id="cart-products">
                <?php Cart::getTableProduct(); ?>
            </div>
            <!-- <script>
                $(document).ready(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'select.php',
                        success: function(response) {
                            $('#cart-products').html(response);
                        }
                    });
                });
            </script> -->
        </div>

    </div>
</div>









<?php include ROOT . '/views/layouts/footer.php'; ?>