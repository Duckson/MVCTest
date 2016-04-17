<?php

class Make extends AbstractPage
{
    protected $view_file = '/views/make.php';// говорим какое представление использовать

    protected function content()
    {
        if (isset($_POST['title']) && isset($_POST['text'])) Post::addPost($_POST["title"],$_POST["text"]);

    }
}