<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../Here-is-Our-Gallery/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/Here-is-Our-Gallery-less.less', 'css/Here-is-Our-Gallery-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/Here-is-Our-Gallery-css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Phan co 8 cai hinh -->
        <div class="wpb-row">
            <div class="container">
                <div class="col-md-4 text-wpbrow">
                    <h2>Here is Our Gallery</h2>
                    <hr>
                    <h4>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam doloremque laudantium, totam rem aperiam.</h4>
                </div>
                <div class="col-md-8 pic-wpbrow">
                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/chemical-b-1024x640.jpg">
                    </a>
                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/agriculture-b-1024x640.jpg">
                    </a>
                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">

                        <img src="images/Agricultural-1024x682.jpg">
                    </a>
                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/glass-b-1024x640.jpg">

                    </a>

                    <div class="clearfix"></div>

                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/engine.jpg">
                    </a>
                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/4.jpg">
                    </a>

                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/5.jpg">
                    </a>
                    <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                        <img src="images/8.jpg">
                    </a>
                </div>
            </div>
        </div>
        <!-- /Ket thuc phan "8 cai hinh" -->
    </body>
</html>