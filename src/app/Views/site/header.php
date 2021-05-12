<?= $this->extend('site/mainPage')?>

<?= $this->section('header') ?>

<link rel="stylesheet" href="/css/header.css" type="text/css">

<!--navigation--------------------------->
<nav>
    <!--logo----------------------------->
    <a href="#" class="logo ">
        <img class = "logo-img" src="/images/logos/logoNoBackGroundRed.png" alt="HOME">
    </a>
    <!--menu--------------------------------------->
    <ul class = "navList">
        <li class = "navContent"><a href="#" class="active">Projects</a></li>
        <li class = "navContent"><a href="#">Feed</a></li>
        <li class = "navContent"><a href="#">Dashboard</a></li>
        <li class = "navContent"><a href="site/create">Create Projects</a></li>
        <li class = "navContent"><a href="#">Profile</a></li>
    </ul>
        <!-- <div class="btn-container">
            <button class="loginButton Hbtn">Login</button>
            <button class="joinButton Hbtn">Join</button>
            <a class="fas fa-user-circle Hicon"></a>
            <a class="fas fa-envelope Hicon"></a>
            <a class="fas fa-bell Hicon"></a>
        <div> -->
    

    <!--hamburger--------------->
    <div class="toggle"></div>
</nav>

<?= $this->endSection() ?>