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
        return ['title' => 'Ошибка', 'message' => $this->error_message];
    }
}
