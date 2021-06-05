<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/models/user.php';
include_once ROOT . '/components/cart.php';

class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $product = Product::getProductById($productId);

        $popularProducts = Product::getPopularProducts();

        require_once(ROOT . '/views/product/view.php');

        return true;
    }


}