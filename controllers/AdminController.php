<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';
include_once ROOT . '/components/adminBase.php';

class AdminController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

/*     public function actionCatalog()
    {
        self::checkAdmin();

        require_once(ROOT . '/views/admin_category/index.php');
        return true;
    } */


}