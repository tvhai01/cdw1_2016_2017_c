<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../peopleShow/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/peopleShow-less.less', 'css/peopleShow-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/peopleShow-css.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/peopleShow-js.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="people-slide">
            <div class="container">
                <div class="people-slide-text">
                    <div class="people-text active-slide" stt="0">  
                        <i class="fa fa-quote-left"></i>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore Ventage or dorent eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident rum.
                        <h6>MICHAEL STROMBACH</h6>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <div class="people-text" stt="1">  
                        <i class="fa fa-quote-left btn-left"></i>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        <h6>STROMBACH MICHAEL</h6>
                        <i class="fa fa-quote-right btn-right"></i>
                    </div>
                </div>
                <div class="flex-btn">
                    <i class="fa fa-circle active-flex-btn" stt="0"></i>
                    <i class="fa fa-circle" stt="1"></i>
                </div>
                <div class="people-pic">
                    <i class="fa fa-chevron-left"></i>
                    <ul>
                        <li><img src="images/team-10-70x70.jpg"></li>
                        <li><img src="images/team-9-70x70.jpg"></li>
                    </ul>
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>

        <!---------------LOGO SHOW----------------------->       
        <div class="container logo-sliderow">
            <i class="fa fa-chevron-left"></i>
            <div class="logo-slide" stt="1">
                <div class="logo-item cloned"><img src="images/logo-1-1.jpg"></div>
                <div class="logo-item cloned"><img src="images/logo-6-1.jpg"></div>
                <div class="logo-item cloned"><img src="images/logo-2.jpg"></div>
                <div class="logo-item cloned"><img src="images/logo-3-1.jpg"></div>
                <div class="logo-item cloned"><img src="images/logo-4-1.jpg"></div>
                <div class="logo-item"><img src="images/logo-1-1.jpg"></div>
                <div class="logo-item"><img src="images/logo-2-1.jpg"></div>
                <div class="logo-item"><img src="images/logo-6-1.jpg"></div>
                <div class="logo-item"><img src="images/logo-1-1.jpg"></div>
                <div class="logo-item"><img src="images/logo-2.jpg"></div>
            </div>
            <i class="fa fa-chevron-right"></i>

            <div class="flex-btn-logo">
                <i class="fa fa-circle fa-two fa-active" stt="0"></i>
                <i class="fa fa-circle fa-two" stt="1"></i>
            </div>
        </div>
        <!---------------LOGO SHOW----------------------->
    </body>
</html>