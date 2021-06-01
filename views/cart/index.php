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

            <div class="content col-10" id="cart-products">
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