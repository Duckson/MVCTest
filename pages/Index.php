<?php

class Index extends AbstractPage
{
    protected $view_file = '/views/index.php';// говорим какое представление использовать
    protected $current_page = 'Index';
    
    protected function content()
    {
// делаем что угодно, например получаем посты из базы
        $posts = Post::getAll();// это вернёт там массив постов
        return ['title' => 'Свежие новости', 'posts' => $posts];
    }
}