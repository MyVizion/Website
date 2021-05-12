<?= $this->extend('site/mainpage')?>
<?= $this->section('content') ?>
<main>
<?php $session = \Config\Services::session();?>
    <?php if (isset($session->success)): ?>
        <div class="alert aler-success text-center alert-dismissable fade mb-o" role="o">
            <?= $session->success ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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
                        <?php echo view('site/overview.php') ?>
                    </div> 
                </div>
       
</main>
<?= $this->endSection() ?> 