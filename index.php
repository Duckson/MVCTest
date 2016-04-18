<?php
session_start();
date_default_timezone_set("UTC");
// ================================== index.php ===============================================================
// тут некоторый код, который получает настрокий
// соединяется с БД
// и определяет какую страницу надо показать
$root = $_SERVER['DOCUMENT_ROOT'];
require($root . '/model/post.php');

spl_autoload_register('Post::Loader');

require($root . '/core/AbstractPage.php');
$page = $_GET['page'];

switch ($page) {
    case 'Make':
        $page = new Make();
        $_SESSION['page_title'] = "Make";
        break;
    case "Cat":
        $page = new MakeCategory();
        $_SESSION['page_title'] = "Cat";
        break;
    default :
        $page = new Index();
        $_SESSION['page_title'] = "Index";
}

try {                                                        // ловим ошибки
    $page->run();                                // вызываем "главный" метод класса-страницы
} catch (Exception $e) {
    $err_page = new Error($e);
    $err_page->run();
}

