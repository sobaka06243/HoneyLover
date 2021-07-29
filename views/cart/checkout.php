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



            <div class="content col-9 p-1" id="cart-products">
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Корзина</h2>


                        <?php if ($result) : ?>
                            <p>Заказ оформлен. Мы Вам перезвоним.</p>
                        <?php else : ?>

                            <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, $</p><br />

                            <?php if (!$result) : ?>

                                <div class="col-sm-4">
                                    <?php if (isset($errors) && is_array($errors)) : ?>
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li> - <?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                    <div class="login-form">
                                        <form action="#" method="post">

                                            <p>Ваша имя</p>
                                            <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>" />

                                            <p>Номер телефона</p>
                                            <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>" />

                                            <!-- <p>Адресс</p>
                                            <input type="text" name="userAdress" placeholder="" value="<?php echo $userAdress; ?>" /> -->

                                            <p>Комментарий к заказу</p>
                                            <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>" />

                                            <br />
                                            <br />
                                            <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                        </form>
                                    </div>
                                </div>

                            <?php endif; ?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>









<?php include ROOT . '/views/layouts/footer.php'; ?>