<?= $this->extend('site/mainpage')?>

    
<?= $this->section('content') ?>
   
<div class="l-parent">
    <div class="login">
        <form action="/register" method="post" enctype="multipart/form-data">
                <div class="logo-head">
                    <img src="https://ams3-myvizion-cdn-01.ams3.cdn.digitaloceanspaces.com/srcimages/logos/logo%201.1%20Dark%20Red.png" class="biglogo">
                </div>
                <?php if (isset($validation)): ?>
                    <div class="warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <div class="wrappy">
                    <h1>REGISTER</h1>
                    <div class="form-input">
                        <input class="l-input" id="firstname" type="text" name="firstname" placeholder="FIRSTNAME" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="lastname" type="text" name="lastname" placeholder="LASTNAME" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="email" type="text" name="email" placeholder="E-MAIL"/>
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="password" type="password" name="password" placeholder="PASSWORD" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="password-confirm" type="password" name="password_confirm" placeholder="CONFIRM PASSWORD" />
                    </div>
                    <input class="login-btn" type="submit" name="register" value="Register"/>
                </div>
        </form>
     
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