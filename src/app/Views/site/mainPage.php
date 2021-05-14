<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/Images/logos/iconDarkRed.png" type="image/x-icon">
        <!-- CSS Files -->
        <link rel="stylesheet" href="/css/style.css" type="text/css" />
        <link rel="stylesheet" href="/css/create.css" type="text/css" />
        <link rel="stylesheet" href="/css/header.css" type="text/css">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <!-- Jquery File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <!-- Js File -->
        <script src="/js/index.js"></script>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>
        <!-- Sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyVizion</title>
    </head>
    <body>
        <?= $this->renderSection('header') ?>
        <!-- header -->

        <?= $this->renderSection('content') ?>
        <!-- content -->

        <?= $this->renderSection('footer') //voor als we footer hebben ?>
        <!-- footer -->

    </body>
</html>