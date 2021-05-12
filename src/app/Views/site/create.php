<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="shortcut icon" href="/Images/logos/iconDarkRed.png" type="image/x-icon">
            <link rel="stylesheet" href="/css/create.css" type="text/css" />
         
            <!-- Jquery File -->
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <!-- Fontawesome -->
            <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Create</title>
        </head>
    <body>
        <div class="parent">
        <?= \Config\Services::validation()->listErrors() ?>
            <form action="/site/create" method="post" enctype="multipart/form-data">
                 <h1>Create Project</h1>
                    <?= csrf_field() ?>
                        <!--Title-->
                        <div class="form-group">
                            <input class="ph-title" type="input" name="title" placeholder="Title" /><br/>
                        </div>
                        <!--Info-->
                        <div class="form-group">
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
    </body>
</html>                                                                                                                                                                                                                                  