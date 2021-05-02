<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/Images/logos/iconDarkRedNoBackground.png" type="image/x-icon">
        <link rel="stylesheet" href="/css/style.css" type="text/css" /><!-- hier naar kijken naar namen -->
        <!-- Jquery File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <!-- Js File -->
        <script src="/js/index.js"></script>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- icon -->
        <link rel="shortcut icon" type="image/png" href="/Images/icon.png"/>
        <title>myVizion</title>
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