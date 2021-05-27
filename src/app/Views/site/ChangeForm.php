<?= $this->extend('site/mainpage')?>
<?= $this->section('content') ?>

<section>
    <form>
        <label>username</label>
        <input type ="text" value = <?= $changeUserName ?> >
    </form>
</section>

<?= $this->endSection() ?>