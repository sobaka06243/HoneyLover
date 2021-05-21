<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/models/product.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $popularProducts = array();
        $popularProducts = Product::getPopularProducts();

        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}