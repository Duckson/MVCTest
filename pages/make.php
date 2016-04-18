<?php

class Make extends AbstractPage
{
    protected $view_file = '/views/make.php';// говорим какое представление использовать
    protected $current_page = 'Make';

    protected function content()
    {
        if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['cat'])) Post::addPost($_POST["title"], $_POST["text"], $_POST["cat"]);
        
    }
}