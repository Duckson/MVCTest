<div class="col-sm-2 sidenav">
    <h4>Новости</h4>
    <ul class="nav nav-pills nav-stacked">
        <? foreach ($_SESSION['news'] as $news): ?>
            <li><?= $news['title'] ?></li>
        <? endforeach ?>
    </ul>
    <br>
</div>