<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="shortcut icon" href="/Images/logos/iconDarkRed.png" type="image/x-icon">
            <link rel="stylesheet" href="/css/create.css" type="text/css" />
            <!-- Js File -->
            <script src="/js/file.js"></script>
            <!-- Fontawesome -->
            <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>myVizion</title>
        </head>
    <body>
        <div class="parent">
        <?= \Config\Services::validation()->listErrors() ?>
            <form action="/site/create" method="post" enctype="multipart/form-data">
                 <h1>Create Project</h1>
                    <?= csrf_field() ?>
                        <div class="form-group">
                            <input class="ph-title" type="input" name="title" placeholder="Title" /><br/>
                        </div>
                        <div class="grow-wrap">
                            <textarea class="ph-info" name="info" placeholder="Type in project info"></textarea>
                        </div>
                        <div class="file-input">
                            <input class="file" id="file" type="file" name="image"/>
                                    <label for="file">
                                        Select file
                                        <p class="fileName"></p>
                                    </label>
<<<<<<< HEAD
                            </div> 
                
=======
                            </div> -->
              
                <input class="file-btn" type="file" name="image"/><br/>

>>>>>>> 9d6533647275bd3c2e63035bc95a16c9677710b4
                <input class="create-btn" type="submit" name="submit" value="Create Project"/>
            </form>
        </div>
    </body>
</html>