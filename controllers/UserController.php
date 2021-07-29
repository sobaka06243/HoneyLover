<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/components/cart.php';
include_once ROOT . '/models/product.php';
include_once ROOT . '/components/Pagination.php';
include_once ROOT . '/models/user.php';


class UserController
{

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;

            //валидация полей
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный email';
            }
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль не должен быть кароче 6-ти символов';
            }

            //проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if($userId == false){
                $errors[] = 'Неправильные данные для входа на сайт';
            }
            else{
                //если данные правильные, запоминает пользователя (сессия)
                User::auth($userId);

                //перенаправляем пользовыателя в закрытую часть - кабинет
                header("Location: /admin/");
            }
        }

        $url = $_SERVER['REQUEST_URI'];
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

}