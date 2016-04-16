<?php

class Post
{
    public $title;
    public $text;
    // Это статический метод. Он вызывается без создание объекта
    // Вызывается вот так Класс::метод()
    // т.е. Post::getAll()
    public static function getAll()
    {
        $obj_array = [];
        foreach ($_SESSION['news'] as $news) {
            $post_obj = new Post();
            $post_obj->title = $news['title'];
            $post_obj->text = $news['text'];
            $obj_array[] = $post_obj;
        }
        return $obj_array; // возвращаем массив объектов
    }

    public static function writePost()
    {
        if (!isset($_SESSION['news'])) $_SESSION['news'] = [];
        $title = filter_var($_POST["title"], FILTER_SANITIZE_SPECIAL_CHARS);
        $text = filter_var($_POST["text"], FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($title) && !empty($text))
            $_SESSION['news'][] = [
                'title' => $title,
                'text' => $text
            ];
    }
}