<?php

abstract class AbstractPage
{
    protected $view_file; // будет определено позже

    public function run()
    {
        // делаем обязательные для каждой страницы действия
        // и далее вызываем рассчёт контента страницы
        $page_data = $this->content();
        $this->render($view_file, $page_data);
    }

    protected function render($view_file, $page_data)
    {
        // делаем элементы массива полноценными переменными
        // это работает так, пусть есть массив $arr=['a'=>123,'b'=>456]
        // extract($arr); Делает так что теперь нам доступны переменные $a и $b
        extract($page_data);

        include($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
        include($_SERVER['DOCUMENT_ROOT'] . $view_file); // подключаем разметку, которая эти переменные использует
        include($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
    }

    protected abstract function content(); // обязываем нас создать метод который формирует контент
}