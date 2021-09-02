<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';
class AboutController
{
    public function actionIndex()
    {
        $index = 3;

        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT . '/views/about/index.php');
        return true;
    }
}