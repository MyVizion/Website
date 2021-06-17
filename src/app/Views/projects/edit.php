<?= $this->extend('site/mainPage')?>
<?= $this->section('content') ?>
    <div class="parent">
    <?= \Config\Services::validation()->listErrors() ?>
        <form action="<?= route_to('update', $projects['id']) ?>" method="post" enctype="multipart/form-data">
                <h1>Edit Project</h1>
                <?= csrf_field() ?>
                    <!--Title-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="title" placeholder="Title" value="<?= $projects['title'] ?>" />
                    </div>
                    <!--Location-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="location" placeholder="Location" value="<?= $projects['location'] ?>" />
                    </div>
                    <!--Time-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="time" placeholder="Time" value="<?= $projects['time'] ?>" />
                    </div>
                    <!--Category-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="category" placeholder="Category" value="<?= $projects['category'] ?>" />
                    </div>
                    <!--Needs-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="needs" placeholder="Stuff needed" value="<?= $projects['needs'] ?>" />
                    </div>
                    <!--Info-->
                    <div class="grow-wrap">
                        <textarea class="ph-info" name="info" placeholder="Type in project info"><?= $projects['info'] ?></textarea>
                    </div>
            <input class="create-btn" type="submit" name="submit" value="Submit"/>
        </form>
    </div>

    <script>
     $(function() {
          $("footer").hide();
     });
     </script>
<?= $this->endSection() ?>                                                                                                                                                                                                                                