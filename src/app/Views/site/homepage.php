<?= $this->extend('site/mainpage')?>
<?= $this->section('header') ?>
<?= $this->include('templates/header') ?> 
<?= $this->endSection() ?> 
<?= $this->section('content') ?>
<?php $session = \Config\Services::session();?>
    <!--notifications-->
    <?php if (isset($session->success)): ?>
        <div class="alert"> 
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <?= $session->success ?> 
        </div>
    <?php endif; ?>
            <!--search section-------->
            <section class ="wrapperContainer">
                <!--container---------> 
                <div id="container">
                    <!--title--------------------->
                    <h1 class="title">MyVizion</h1>
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
                            <input type="text" class="search-input" placeholder="Search for your interests (Not working!)">
                        </div>
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </section>

                <!--project area----------------------->
                <div class="projects">
                    <!--container------------------------>
                    <div class="box-container">
                        <?php echo view('projects/list') ?>
                    </div> 
                </div>

            <div>
                <!-- niet nodig tijdens testfase -->
                <?php //echo view('templates/cookies.php') ?> 
            </div>

<?= $this->endSection() ?> 
<?= $this->section('footer') ?>
<?= $this->include('templates/footer') ?> 
<?= $this->endSection() ?> 

