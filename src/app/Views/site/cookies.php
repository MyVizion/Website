<!--Cookie popup-------------------------->
<?= $this->extend('site/mainPage')?>

<?= $this->section('footer') ?>

<div id="consent-popup" class="hidden">
        <p>By using this site you agree to our <a href='#'>Terms and conditions</a>.
            Please Accept these before using our site &#x1F36A;.
            <button type="button" id="accept" class="accept-btn">Got it!</button>
        </p>     
</div>

<?= $this->endSection() ?>
