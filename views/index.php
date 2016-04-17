<div class="col-sm-9">
    <a href=<?="/index.php?page=Make"?>>Добавить новость</a><br>

    <? foreach ($posts as $news): ?>
        <div class="news">
            <h3><?= $news['title'] ?></h3>
            <p><?= $news['text'] ?></p>
        </div>
    <? endforeach ?>
</div>