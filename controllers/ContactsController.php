<?php

class ContactsController
{
    public function actionIndex()
    {
        $index = 4;

        require_once(ROOT . '/views/contacts/index.php');
        return true;
    }
}