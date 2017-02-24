<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../footer/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/footer-less.less', 'css/footer-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer-css.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!--Phan Footer -->
        <footer>
            <div class="container">
                <div class="col-md-3 col-sm-6 footermin">
                    <div class="footermin1">
                        <h2>ABOUT US</h2>
                        <p>Aenean ut libero vitae sapien ullamcorper semper sed quis turpis. Donec congue felis sed dignissim porttitor.

                            Sed sapien libero, gravida sit amet tortor ac, viverra elementum purus.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footermin">
                    <div class="footermin2">
                        <h2>CONTACT</h2>
                        <p><i class="fa fa-phone"></i>Phone: +(048) 880 440 110</p>
                        <p><i class="fa fa-file-o"></i>Fax: +(048) 880 440 110</p>
                        <p><i class="fa fa-envelope-o"></i>Email: <a href="#">info (at) ourwebsite.com</a></p>
                        <p><i class="fa fa-map-marker"></i>Adress: 124BP, Lacasa Ave New York</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footermin">
                    <div class="footermin3">
                        <h2>LASTEST POSTS</h2>
                        <div class="post-title">
                            <ul>
                                <li>
                                    <div class="pic-post">
                                        <a href="#"><img src="images/post-4.jpg"></a>
                                    </div>
                                    <div class="text-post">
                                        <h3><a href="#">Secure strong revenue growth</a></h3>
                                        <p>09 May,2016</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="pic-post">
                                        <a href="#"><img src="images/pipeline.jpg"></a>
                                    </div>
                                    <div class="text-post">
                                        <h3><a href="#">Need for growth and reliability</a></h3>
                                        <p>28 August,2014</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 footermin">
                    <div class="footermin4">
                        <h2>EXTRA NAVIGATION</h2>
                        <div class="nav-title">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="Blog.php">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-final">
            <div class="container">
                <p class="col-md-5">Powered by <a href="#">Your Company</a></p>
                <p>© 2016 Factory All rights reserved.</p>
            </div>
        </div>
    </body>
</html>