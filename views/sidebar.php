<div class="col-sm-2 sidenav">
    <h4>Новости</h4>
    <ul class="nav nav-pills nav-stacked">
        <? foreach (Post::getAll() as $news): ?>
            <li><?= $news['id'] . ") " . $news['title'] ?></li>
        <? endforeach ?>
    </ul>
    <br>
</div>