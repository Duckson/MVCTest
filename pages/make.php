<?php

class Make extends AbstractPage
{
    protected $view_file = '/views/make.php';// говорим какое представление использовать

    protected function content()
    {
        if (!isset($_SESSION['news'])) $_SESSION['news'] = [];
        $title = filter_var($_POST["title"], FILTER_SANITIZE_SPECIAL_CHARS);
        $text = filter_var($_POST["text"], FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($title) && !empty($text)) Post::writePost($title, $text);
        return [0, 0];
    }
}