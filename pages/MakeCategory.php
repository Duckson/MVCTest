<?php
class MakeCategory extends AbstractPage
{
    protected $view_file = '/views/makeCategory.php';// говорим какое представление использовать
    protected $current_page = 'Cat';

    protected function content()
    {
        if (isset($_POST['category'])) Post::addCategory($_POST["category"]);

    }
}