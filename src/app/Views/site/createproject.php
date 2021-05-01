<h2><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<form action="/site/createproject" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="info">Text</label>
    <textarea name="info"></textarea><br />

    <input type="submit" name="submit" value="Create Project" />
</form>