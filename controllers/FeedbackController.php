<?php

class FeedbackController
{
    public function actionIndex()
    {

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['message'] = $_POST['message'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                FeedBack::GetMessage($options);
            }
        }

        $index = 6;
        require_once(ROOT . '/views/feedback/index.php');
        return true;
    }
}