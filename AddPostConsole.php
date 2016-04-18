<?php
$sql = new mysqli('localhost', 'root', 'root', "News");
$title = filter_var($argv[1], FILTER_SANITIZE_SPECIAL_CHARS);
$text = filter_var($argv[2], FILTER_SANITIZE_SPECIAL_CHARS);
$cat = $argv[3];
$cat_id = $sql->query("SELECT id FROM categories WHERE name='$cat'");
$cat_id = $cat_id->fetch_row()[0];

if (!empty($title) && !empty($text) && !empty($cat_id)) {

    $sql->query("INSERT INTO news(title, text, category) VALUES('$title', '$text', '$cat_id')");
}
else echo "Nay!";