<?php

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