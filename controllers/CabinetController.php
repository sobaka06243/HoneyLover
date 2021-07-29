<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';


class CabinetController
{
    public function actionIndex()
    {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }
}