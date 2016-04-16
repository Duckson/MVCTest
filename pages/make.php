<?php
session_start();
if (!isset($_SESSION['news'])) $_SESSION['news'] = [];
$title = filter_var($_POST["title"], FILTER_SANITIZE_SPECIAL_CHARS);
$text = filter_var($_POST["text"], FILTER_SANITIZE_SPECIAL_CHARS);

if (!empty($title) && !empty($text))
    $_SESSION['news'][] = [
        'title' => $title,
        'text' => $text
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require "title.php" ?>
    <title>Title</title>
</head>
<body>
<div class="container-fluid">
    <div class="row content">
        <?php require "sidebar.php" ?>
        <div class="col-sm-9">
            <a href="../index.php">Перейти к новостям</a><br>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                Заголовок новости: <input type="text" name="title"><br>
                Текст новости: <textarea name="text"></textarea><br>
                <input type="submit">
            </form>
            <br>
        </div>
    </div>
</div>
</body>
</html>
