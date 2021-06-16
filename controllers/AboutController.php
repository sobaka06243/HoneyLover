<?php

class AboutController
{
    public function actionIndex()
    {
        $index = 3;

        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT . '/views/about/index.php');
        return true;
    }
}