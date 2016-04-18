<div class="col-sm-9">
    <?php Post::echoLinks('Cat') ?><br>
    <form action="<?= htmlspecialchars("index.php?page=Cat"); ?>" method="post">
        Категория: <input type="text" name="category"><br>
        <input type="submit">
    </form>
    <br>
</div>