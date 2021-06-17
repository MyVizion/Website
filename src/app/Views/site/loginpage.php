<?= $this->extend('site/mainpage')?>

    
<?= $this->section('content') ?>

<div class="l-parent">
    <div class="login">
        <form action="/login" method="post" enctype="multipart/form-data">
                <div class="logo-head">
                    <img src="https://ams3-myvizion-cdn-01.ams3.cdn.digitaloceanspaces.com/srcimages/logos/logo%201.1%20Dark%20Red.png" class="biglogo">
                </div>
                <?php if (isset($validation)): ?>
                  <div class="warning">
                    <?= $validation->listErrors() ?>
                  </div>
                <?php endif; ?>
                <div class="wrappy">
                    <h1>LOGIN</h1>
                    <div class="form-input">
                        <input class="l-input" id="email" type="text" name="email" placeholder="USERNAME" value="<?= set_value('email') ?>" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="password" type="password" name="password" placeholder="PASSWORD" value="" />
                    </div>
                    <input class="login-btn" type="submit" name="login" value="Login"/>
                    <p><a href="#">Forgot your password?</a></p>
                </div>
        </form>
    </div>

    <div class="bottom">
        <p>Don't have an account?<a href="<?= route_to('register_page') ?>"> Sign Up!</a></p>
    </div>
</div>

    <script>
     $(function() {
          $("footer").hide();
     });
    </script>
     
<?= $this->endSection() ?> 
