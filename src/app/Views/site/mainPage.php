<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://ams3-myvizion-cdn-01.ams3.cdn.digitaloceanspaces.com/srcimages/logos/iconDarkRed.png" type="image/x-icon">
        <!-- CSS Files -->
        <link rel="stylesheet" href="/css/header.css" />
        <link rel="stylesheet" href="/css/homepage.css" />
        <link rel="stylesheet" href="/css/create.css" />
        <link rel="stylesheet" href="/css/projectpage.css" />
        <link rel="stylesheet" href="/css/cookies.css" />
        <link rel="stylesheet" href="/css/profilepage.css" />
        <link rel="stylesheet" href="/css/footer.css" />
        <link rel="stylesheet" href="/css/login.css" />
        <!-- Jquery File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>
        <title>MyVizion</title>
    </head>
    <body>
        <!------------------------ header -->
        <nav>
            <?= $this->renderSection('header') ?>
        </nav>
        
        <!----------------------- content -->
        <main>
            <?= $this->renderSection('content') ?>
        </main>
        
        <!------------------------ footer -->
        <footer>
            <?= $this->renderSection('footer') ?>
        </footer>

        <!-- Js File -->
        <script src="/js/searchbar.js"></script>
        <script src="/js/filename.js"></script>
        <script src="/js/cookies.js"></script>
    </body>
</html>