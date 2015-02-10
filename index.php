<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sofia F. Rocha</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-fluid">
            <div class="main">

                <div class="content">
                    
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h1 id="title">Hello<br> world!</h1>
                            <h4>I'm Sofia, a design and multimedia student.<br>Here are some recent (possibly wip) projects:</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5">
                        
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table class="table table-bordered table-responsive">

                                        <?php

                                        $path = ".";

                                        $filenames = scandir($path);

                                        if (scandir($path) == false) {
                                            echo "something went terribly wrong.";
                                        }
                                        else {
                                            for ($i=0; $i < count($filenames); $i++) {
                                                if ($filenames[$i] !== "." && $filenames[$i] !== ".." && $filenames[$i] !== ".DS_Store") {

                                                    //don't show the folders being used by the index page
                                                    if ($filenames[$i] !== "css" && $filenames[$i] !== "fonts" && $filenames[$i] !== "js" && $filenames[$i] !== "img" && $filenames[$i] !== "index.php") {
                                                        # code...
                                                    
                                                        echo '<tr><td><i class="fa fa-folder-o folder-icon"></i>
<a href="' .$path . "/" . $filenames[$i] . '">' . $filenames[$i] . '</a></td></tr>';
                                                    }
                                                }
                                            }
                                        }

                                        ?>
                                    </table>
                                </div>
                            </div>

                            <div class="logos">
                                <h5>You can also find me here:</h5>
                                <a href="https://www.behance.net/sofiafrocha" id="behance"><i class="fa fa-behance fa-2x"></i></a>
                                <a href="https://github.com/sofiafrocha" id="github"><i class="fa fa-github fa-2x"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
                    
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>