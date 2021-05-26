<?= $this->extend('site/mainpage')?>
<?= $this->section('content') ?>
<main>
    <div class="parent">
    <?= \Config\Services::validation()->listErrors() ?>
        <form action="/projects/create" method="post" enctype="multipart/form-data">
                <h1>Create Project</h1>
                <?= csrf_field() ?>
                    <!--Title-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="title" placeholder="Title" value="<?= ($data) ?'pietjepuk': ''; ?>" />
                    </div>
                    <!--Username-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="creator" placeholder="Username" />
                    </div>
                    <!--Location-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="location" placeholder="Location" />
                    </div>
                    <!--Time-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="time" placeholder="Time" />
                    </div>
                    <!--Category-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="category" placeholder="Category" />
                    </div>
                    <!--Needs-->
                    <div class="grow-wrap">
                        <input class="ph-title" type="input" name="needs" placeholder="Stuff needed" />
                    </div>
                    <!--Info-->
                   <div class="grow-wrap">
                        <textarea class="ph-info" name="info" placeholder="Type in project info"></textarea>
                    </div>
                    <!--File-->
                    <div class="file-input">
                        <input class="file" id="file" type="file" name="image"/>
                            <label for="file">
                                Select file
                                <p class="fileName"></p>
                            </label>
                    </div>
            <input class="create-btn" type="submit" name="submit" value="Create Project"/>
        </form>
    </div>
</main>
<?= $this->endSection() ?>                                                                                                                                                                                                                                