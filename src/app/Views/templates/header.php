<?php if(session()->get('isLoggedIn')): ?>
    <!------------------------------------- Logo -->
    <a href="/" class="logo">
        <img class ="logo-img" src="https://ams3-myvizion-cdn-01.ams3.cdn.digitaloceanspaces.com/srcimages/logos/logoNobackgroundRed.png" alt="HOME">
    </a>
    <!------------------------------------- Menu -->
    <ul class = "navList">
        <li class = "navContent"><a href="/" class="active">Projects</a></li>
        <li class = "navContent"><a href="#">Feed</a></li>
        <li class = "navContent"><a href="#">Dashboard</a></li>
        <li class = "navContent"><a href="<?= route_to('create_page') ?>">Create Projects</a></li>
        <li class = "navContent"><a href="#">Profile</a></li>
        <li class = "navContent"><a href="#">Survey</a></li>
    </ul>
    <!-- Hamburger Menu -->
    <div class="toggle nav-menu"></div>

        <div class="btn-container">
            <button class="loginButton Hbtn">
                <a href="<?= route_to('logout_page') ?>">Log Out</a>
            </button>
                <a class="fas fa-user-circle Hicon"></a>
                <a class="fas fa-envelope Hicon"></a>
                <a class="fas fa-bell Hicon"></a>
        </div>
            
            <!-- Header if someone is not logged in -->
            <?php else: ?>
            <div class="nav-parent">
                <!------------------------------------- Logo -->
                <a href="/" class="logo">
                    <img class ="logo-img" src="https://ams3-myvizion-cdn-01.ams3.cdn.digitaloceanspaces.com/srcimages/logos/logoNobackgroundRed.png" alt="HOME">
                </a>
                <!------------------------------------- Menu -->
                <ul class = "navList">
                    <li class = "navContent"><a href="/" class="active">Projects</a></li>
                    <li class = "navContent"><a href="#">Feed</a></li>
                    <li class = "navContent"><a href="#">Dashboard</a></li>
                    <li class = "navContent"><a href="<?= route_to('create_page') ?>">Create Projects</a></li>
                    <li class = "navContent"><a href="#">Survey</a></li>
                </ul>
            </div>
            <!-- Hamburger Menu -->
            <div class="toggle nav-menu"></div>

            <div class="btn-container">
                <button class="loginButton Hbtn">
                    <a href="<?= route_to('login_page') ?>">Login</a>
                </button>
                <button class="joinButton Hbtn">
                    <a href="<?= route_to('register_page') ?>">Join</a>
                </button>
            <div> 
<?php endif; ?>
