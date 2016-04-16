<?php
session_start();
// ================================== index.php ===============================================================
// тут некоторый код, который получает настрокий
// соединяется с БД
// и определяет какую страницу надо показать
$root = $_SERVER['DOCUMENT_ROOT'];
require($root . '/model/post.php');
require($root . '/model/AbstractPage.php');
$page = $_GET['page'];// index.php?page=Index
switch ($page) {
    case 'Make':
        include($root . '/pages/make.php');
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
