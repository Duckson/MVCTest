<div class="col-sm-9">
    <?php $this->echoLinks('Make') ?><br>
    <form action="<?= htmlspecialchars("index.php?page=Make"); ?>" method="post">
        Заголовок новости: <input type="text" name="title"><br>
        Текст новости: <textarea name="text"></textarea><br>
        Категория: <select name="cat">
            <? foreach (Post::getCategories() as $cats): ?>
                <option value="<?= $cats['id'] ?>"><?= $cats['name'] ?></option>
            <? endforeach; ?>
        </select><br>
        <input type="submit">
    </form>
    <br>
</div>
