<div class="col-sm-9">
    <?php echoLinks('Index') ?><br>

    <? foreach ($posts as $news): ?>
        <div class="news">
            <h3><?= $news['title'] ?>
                <small>Категория: <?= $news['category'] ?></small>
            </h3>
            <p><?= $news['text'] ?></p>
        </div>
    <? endforeach ?>
</div>