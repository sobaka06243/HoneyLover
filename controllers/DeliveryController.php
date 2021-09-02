<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';
class DeliveryController
{
    public function actionIndex()
    {
        $index = 5;

        require_once(ROOT . '/views/delivery/index.php');
        return true;
    }
}