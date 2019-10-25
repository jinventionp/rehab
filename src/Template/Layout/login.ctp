<?php
$cakeDescription = 'REHAB';
$webroot = $this->request->getAttribute('webroot');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
            <?= $cakeDescription ?> - 
            <?= $this->fetch('title') ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="." name="description" />
        <meta content="Creamos la Web" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=$webroot?>assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?=$webroot?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=$webroot?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=$webroot?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>                        

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2019 - <?=date('Y')?> &copy; Prowered by <a href="" class="text-white-50">Creamos la Web</a> 
        </footer>

        <!-- Vendor js -->
        <script src="<?=$webroot?>assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?=$webroot?>assets/js/app.min.js"></script>
        
    </body>
</html>