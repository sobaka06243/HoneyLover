<?php

class AboutController
{
    public function actionIndex()
    {
        $index = 3;

        require_once(ROOT . '/views/about/index.php');
        return true;
    }
}