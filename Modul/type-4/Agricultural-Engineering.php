<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../Agricultural-Engineering/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/Agricultural-Engineering-less.less', 'css/Agricultural-Engineering-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/Agricultural-Engineering-css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Phan  gioi thieu mo hinh-->
        <div class="wd-row">
            <div class="container">
                <div class="col-md-4 col-sm-6  pic-wd">
                    <img src="images/agriculture.jpg">
                    <h4>Agricultural Engineering</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>
                </div>
                <div class="col-md-4 col-sm-6 pic-wd">

                    <img src="images/pipeline.jpg">
                    <h4>Heavy Industry</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="style">
                        <a class="pic-wd" href="#">
                            <img src="images/services-2-100x70.jpg">
                        </a>
                        <div class="text-wd">
                            <h6>Mechanical & Piping Construction</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                    <div class="style">
                        <a class="pic-wd" href="#">
                            <img src="images/Automotive-100x70.png">
                        </a>
                        <div class="text-wd">
                            <h6>Automotive Industry</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                    <div class="style">
                        <a class="pic-wd" href="#">
                            <img src="images/glass-building-100x70.jpg">
                        </a>
                        <div class="text-wd">
                            <h6>Gas & Oil</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                    <div class="style">
                        <a class="pic-wd" href="#">
                            <img src="images/services-2-100x70.jpg">
                        </a>
                        <div class="text-wd">
                            <h6>Glass & aluminum</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Ket thuc phan "Gioi thieu mo hinh"-->

    </body>
</html>