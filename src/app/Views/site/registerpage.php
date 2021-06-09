<?= $this->extend('site/mainpage')?>

    
<?= $this->section('content') ?>
   
<div class="l-parent">
    <div class="login">
        <form action="/register" method="post" enctype="multipart/form-data">
                <div class="logo-head">
                    <img src="images/logos/logo 1.1 Dark Red.png" class="biglogo">
                </div>
                <div class="wrappy">
                    <h1>REGISTER</h1>
                    <div class="form-input">
                        <input class="l-input" id="firstname" type="input" name="firstname" placeholder="FIRSTNAME" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="lastname" type="input" name="lastname" placeholder="LASTNAME" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="email" type="input" name="email" placeholder="E-MAIL"/>
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="password" type="input" name="location" placeholder="PASSWORD" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="password-confirm" type="input" name="location" placeholder="CONFIRM PASSWORD" />
                    </div>
                    <input class="login-btn" type="submit" name="login" value="Register"/>
                </div>
        </form>
        <?php if (isset($validation)): ?>
            <div class="warning">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="bottom">
        <p>Already have an account?<a href="<?= route_to('login_page') ?>"> Log in!</a></p>
    </div>
</div>

    <script>
     $(function() {
          $("footer").hide();
     });
     </script>
     
<?= $this->endSection() ?> 