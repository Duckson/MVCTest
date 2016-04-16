<?php

class Index extends AbstractPage
{
    protected $view_file = '/views/index.php';// говорим какое представление использовать

    protected function content()
    {
// делаем что угодно, например получаем посты из базы
        $posts = Post::getAll();// это вернёт там массив постов
        return ['title' => 'Свеживе новости', 'posts' => $posts];
    }
}