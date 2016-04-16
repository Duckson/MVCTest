
<div class="col-sm-9">
    <a href="../index.php">Перейти к новостям</a><br>
    <form action="<?= htmlspecialchars("index.php?page=Make"); ?>" method="post">
        Заголовок новости: <input type="text" name="title"><br>
        Текст новости: <textarea name="text"></textarea><br>
        <input type="submit">
    </form>
    <br>
</div>
