<?php
include_once ROOT . '/models/user.php';
include_once ROOT . '/components/cart.php';


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