<?= $this->extend('site/mainpage')?>

    
<?= $this->section('content') ?>

<div class="l-parent">
    <div class="login">
        <form action="/" method="post" enctype="multipart/form-data">
                <div class="logo-head">
                    <img src="images/logos/logo 1.1 Dark Red.png" class="biglogo">
                </div>
                <div class="wrappy">
                    <h1>LOGIN</h1>
                    <div class="form-input">
                        <input class="l-input" id="email" type="input" name="title" placeholder="USERNAME" value="<?= set_value('email') ?>" />
                    </div>
                    <div class="form-input">
                        <input class="l-input" id="password" type="input" name="location" placeholder="PASSWORD" value="<?= set_value('password') ?>" />
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
