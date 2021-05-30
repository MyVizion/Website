<?= $this->extend('site/mainpage')?>
<?= $this->section('content') ?>
    <div class="parent">
    <?= \Config\Services::validation()->listErrors() ?>
        <form action="/projects/create" method="post" enctype="multipart/form-data">
                <h1>Create Project</h1>
                <?= csrf_field() ?>
                    <!--Title-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="title" placeholder="Title" value="<?= ($data) ?'title': ''; ?>" />
                    </div>
                    <!--Username-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="creator" placeholder="Username" value="<?= ($data) ?'username': ''; ?>" />
                    </div>
                    <!--Location-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="location" placeholder="Location" value="<?= ($data) ?'location': ''; ?>"/>
                    </div>
                    <!--Time-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="time" placeholder="Time" value="<?= ($data) ?'time': ''; ?>" />
                    </div>
                    <!--Category-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="category" placeholder="Category" value="<?= ($data) ?'category': ''; ?>" />
                    </div>
                    <!--Needs-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="needs" placeholder="Stuff needed" value="<?= ($data) ?'needs': ''; ?>" />
                    </div>
                    <!--Info-->
                    <div class="grow-wrap">
                        <textarea class="ph-info" name="info" placeholder="Type in project info" value="<?= ($data) ?'info': ''; ?>"></textarea>
                    </div>
                    <!--File-->
                    <div class="file-input">
                        <input class="file" id="file" type="file" name="image" value="<?= ($data) ?'title': ''; ?>"/>
                            <label for="file">
                                Select file
                                <p class="fileName"></p>
                            </label>
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