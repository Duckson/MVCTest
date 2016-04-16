<?php

class Make extends AbstractPage
{
    protected $view_file = '/views/make.php';// говорим какое представление использовать

    protected function content()
    {
        Post::writePost();
    }
}