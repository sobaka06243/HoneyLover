<?php

class DeliveryController
{
    public function actionIndex()
    {
        $index = 5;

        require_once(ROOT . '/views/delivery/index.php');
        return true;
    }
}