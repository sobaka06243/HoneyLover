<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';

class ContactsController
{
    public function actionIndex()
    {
        $index = 4;

        require_once(ROOT . '/views/contacts/index.php');
        return true;
    }
}