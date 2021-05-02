<?= \Config\Services::validation()->listErrors() ?>

<form action="/site/create" method="post">
    <?= csrf_field() ?>

    <input type="input" name="title" placeholder="Title" /><br/>

    <textarea name="info" placeholder="type in project info"></textarea><br/>

    <input type="file" name="image" value=""/><br/>

    <input type="submit" name="submit" value="Create Project" />
</form>