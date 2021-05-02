<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/Images/logos/iconDarkRed.png" type="image/x-icon">
        <link rel="stylesheet" href="/css/style.css" type="text/css" />
        <!-- Jquery File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <!-- Js File -->
        <script src="/js/index.js"></script>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/Images/icon.png"/>
        <title>myVizion</title>
    </head>
<body>
<?= $this->extend('site/mainPage')?>

<?= $this->section('content') ?>

    <!--search section-------->
    <section class = "wrapperContainer">
        <!--container--------->
        <div id="container">
            <!--title--------------------->
            <h1 class="title">Workspace</h1>
            <!--search bar---------------->
            <div class="form-group">
                <!--dropdown menu--------->
                <div class="dropdown">
                    <div class="default-option">Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <!--dropdown list--------->
                    <div class="dropdown-list">
                        <ul>
                           <li class="category">Cleaning</li>
                           <li>Video</li>
                           <li>Photography</li>
                        </ul>
                    </div>
                </div>

                <div class="search">
                    <input type="text" class="search-input" placeholder="Search for your interests">
                </div>

                <button class="btn" type="submit"><i class="fas fa-search"></i></button>

            </div>
        </div>
    </section>

        <!--project area----------------------->
        <div class="projects">
            <!--container------------------------>
            <div class="box-container">
                <?php echo view('/site/overview.php') ?>
            </div> 
        </div>
        <?= $this->extend('site/mainPage')?>

    <?= $this->endSection() ?> 

        <!--Cookie popup-------------------------->
        <!-- <div id="consent-popup" class="hidden">
                <p>By using this site you agree to our <a href='#'>Terms and conditions</a>.
                    Please Accept these before using our site &#x1F36A;.
                    <button type="button" id="accept" class="accept-btn">Got it!</button>
                </p>     
        </div> -->
</body>
</html>