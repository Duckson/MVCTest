<?php
session_start();
date_default_timezone_set("UTC");
// ================================== index.php ===============================================================
// тут некоторый код, который получает настрокий
// соединяется с БД
// и определяет какую страницу надо показать
if (!isset($_SESSION['news'])) $_SESSION['news'] = [];
$title = filter_var($_POST["title"], FILTER_SANITIZE_SPECIAL_CHARS);
$text = filter_var($_POST["text"], FILTER_SANITIZE_SPECIAL_CHARS);

if (!empty($title) && !empty($text))
    $_SESSION['news'][] = [
        'title' => $title,
        'text' => $text
    ];
$root = $_SERVER['DOCUMENT_ROOT'];
require($root . '/model/post.php');
require($root . '/model/AbstractPage.php');
$page = $_GET['page'];
switch ($page) {
    case 'Make':
        include($root . '/pages/Make.php');
        $page = new Make();
        $_SESSION['page_title'] = "Make";
        break;
    default :
        include($root . '/pages/Index.php');
        $page = new Index();
        $_SESSION['page_title'] = "Index";
}
try {                                                        // ловим ошибки
    $page->run();                                // вызываем "главный" метод класса-страницы
} catch (Exception $e) {
    $err_page = new Error($e);
    $err_page->run();
}

