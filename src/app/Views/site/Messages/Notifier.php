<?= $this->extend('site/mainpage')?>
<?= $this->section('content') ?>
    <script>
    window.addEventListener('load', function(){
        //if session has succes
        <?php if(session()->has("success")) { ?>
        console.log("success")
            //display message
            Swal.fire({
                icon: 'success',
                title: 'Hooray!',
                text: '<?= session("success") ?>'
            })
        <?php } ?>
    });
    </script>  

    <script>
    window.addEventListener('load', function(){
        //if session has error
        <?php if(session()->has("error")) { ?>
            console.log("error")
            //display message
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?= session("error") ?>'
            })
        <?php } ?>
    });
    </script>

    <script>
    window.addEventListener('load', function(){
        //if session has warning
        <?php if(session()->has("warning")) { ?>
            console.log("warning")
            //display message
            Swal.fire({
                icon: 'warning',
                title: 'Great!',
                text: '<?= session("warning") ?>'
            })
        <?php } ?>
    });
    </script>

    <script>
    window.addEventListener('load', function(){
        //if session has info
        <?php if(session()->has("info")) { ?>
            console.log("info")
            //display message
            Swal.fire({
                icon: 'info',
                title: 'Note!',
                text: '<?= session("info") ?>'
            })
        <?php } ?>
    });
    </script>
<?= $this->endSection() ?>  