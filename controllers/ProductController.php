<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';

class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $product = Product::getProductById($productId);

        $popularProducts = Product::getPopularProducts();
        $index = 2;

        require_once(ROOT . '/views/product/view.php');

        return true;
    }


}