<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';
include_once ROOT . '/components/cart.php';


class CatalogController
{
    public function actionCategory($categoryId, $page = 1)
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);




        $total = Product::getTotalProductsInCategory($categoryId);

        $countCategories = count($categories);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

    public function actionIndex()
    {
        
        $categories = array();
        $categories = Category::getCategoriesList();

        $newProducts = array();
        $newProducts = Product::getNewProducts();

        $countCategories = count($categories);
        $index = 2;

        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }



}