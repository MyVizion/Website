<?= $this->extend('site/mainpage')?>
<?= $this->section('content') ?>
<main>
    <div class="parent">
    <?= \Config\Services::validation()->listErrors() ?>
        <form action="/site/create" method="post" enctype="multipart/form-data">
                <h1>Create Project</h1>
                <?= csrf_field() ?>
                    <!--Title-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="title" placeholder="Title" /><br/>
                    </div>
                    <!--Info-->
                    <div class="form-input">
                        <input class="ph-title" type="input" name="creator" placeholder="Username" /><br/>
                    </div>
                    <!--Username-->
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
        <!-- Js File -->
        <script src="/js/file.js"></script>
</main>
<?= $this->endSection() ?>                                                                                                                                                                                                                                