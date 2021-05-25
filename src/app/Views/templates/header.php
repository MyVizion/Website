<nav>
    <!--logo----------------------------->
    <a href="<?php redirect()->to('/') ?>" class="logo ">
        <img class = "logo-img" src="/images/logos/logoNobackgroundRed.png" alt="HOME">
    </a>
    <!--menu--------------------------------------->
    <ul class = "navList">
        <li class = "navContent"><a href="<?php redirect()->to('/') ?>" class="active">Projects</a></li>
        <li class = "navContent"><a href="#">Feed</a></li>
        <li class = "navContent"><a href="#">Dashboard</a></li>
        <li class = "navContent"><a href="projects/create">Create Projects</a></li>
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
    <div class="toggle nav-menu"></div>
</nav>
