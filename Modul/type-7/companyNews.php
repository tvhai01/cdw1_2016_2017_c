<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../companyNews/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/companyNews-less.less', 'css/companyNews-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/companyNews-css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Phan "Comany News -->
        <div class="wf-row">
            <div class="container">
                <h2>Comany News</h2>
                <div class="col-md-4 col-sm-4 wfrowmin">
                    <img src="images/post-4-650x350.jpg">
                    <div class="text-wfrowmin">
                        <a href="#">Secure strong revenue growth</a>
                        <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…</p>
                        <a href="#" class="button">READ MORE    <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wfrowmin">
                    <img src="images/3-650x350.jpg">
                    <div class="text-wfrowmin">
                        <a href="#">Secure strong revenue growth</a>
                        <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…</p>
                        <a href="#" class="button">READ MORE    <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wfrowmin">
                    <img src="images/post-3-650x350.jpg">
                    <div class="text-wfrowmin">
                        <a href="#">Secure strong revenue growth</a>
                        <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…</p>
                        <a href="#" class="button">READ MORE    <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Phan "Comany News -->

    </body>
</html>