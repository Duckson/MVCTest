<?php

class Make extends AbstractPage
{
    protected $view_file = '/views/make.php';// говорим какое представление использовать

    protected function content()
    {
// делаем что угодно, например получаем посты из базы
        $posts = Post::getAll();// это вернёт там массив постов
        return ['title' => 'Свежие новости', 'posts' => $posts];
    }
}