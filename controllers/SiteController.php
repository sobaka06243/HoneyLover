<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/models/user.php';
include_once ROOT . '/components/cart.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $popularProducts = array();
        $popularProducts = Product::getPopularProducts();
        $countCategories = count($categories);

        $index = 1;

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

}