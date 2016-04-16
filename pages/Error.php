<?php

class ErrorPage extends AbstractPage
{
    protected $view_file = '/views/error.php';// говорим какое представление использовать
    private $error_message;

    public function __construct(Exception $e)
    {
        $this->error_message = $e->GetMessage();
    }

    protected function content()
    {
// делаем что угодно, например получаем посты из базы
        $posts = Post::getAll();// это вернёт там массив постов
        return ['title' => 'Ошибка', 'message' => $this->error_message];
    }
}
