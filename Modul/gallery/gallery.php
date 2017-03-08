<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type">
            <div class="container">
                <div class="row">

                    <div class="img">
                        <div class=" col-md-4">
                            <div class="hinh1">
                                <img src="images/steel-b-377x250.jpg" alt=""/>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="hinh2">
                                <img src="images/steel-b2-377x250.jpg" alt=""/>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="hinh3">
                                <img src="images/heavy-b-377x250.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="img">
                        <div class=" col-md-4">
                            <div class="hinh1">
                                <img src="images/post-1-377x250.jpg" alt=""/>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="hinh2">
                                <img src="images/7-377x250.jpg" alt=""/>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="hinh3">
                                <img src="images/6-377x250.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="img">
                        <div class=" col-md-4">
                            <div class="hinh1">
                                <img src="images/1-377x250.jpg" alt=""/>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="hinh2">
                                <img src="images/3-1-377x250.jpg" alt=""/>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="hinh3">
                                <img src="images/automotive-b-377x250.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
