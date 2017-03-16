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

        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/questions-js.js" type="text/javascript"></script>
        <script src="js/peopleShow-js.js" type="text/javascript"></script>
        <script src="js/header-js.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type">
            <header>
                <div class="row">
                    <div class="container">
                        <div class="header-left col-md-5">
                            <ul>
                                <li class="flickr">
                                    <a href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li class="facebook">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="vimeo">
                                    <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-right col-md-7">
                            <div class="langset">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/en.png">
                                            <span class="icl_lang_sel_current icl_lang_sel_native">English</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="list-lang">
                                            <li>
                                                <a href="#"><img src="images/fr.png">
                                                    <span class="icl_lang_sel_native">Francais</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/es.png">
                                                    <span class="icl_lang_sel_native">Francais</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-info">
                                <i class="fa fa-envelope"></i><span> 154 Av the good, New York </span>
                                <i class="fa fa-phone"></i> <span>Phone: +124 548 698 254</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="header-navigator">
                    <div class="container">
                        <div class="logo">
                            <a href="#"><img src="images/logo_42-1.png"></a>
                        </div>
                        <div class="toggle-topbar menu-icon">
                            <a><p>MENU <i class="fa fa-navicon"></i></p></a>
                        </div>
                        <a class="button right primary home-cta" href="#">Request a Quote <i class="fa fa-long-arrow-right"></i></a>

                        <ul class="menu-nav">
                            <li><a href="#">Home</a>
                                <ul class="sub-menu dropdown ">
                                    <li id="menu-item-12" class="color-2">
                                        <a href="#">Home One</a>
                                    </li>
                                    <li id="menu-item-2362" class="color-2">
                                        <a href="#">Home Two</a>
                                    </li>
                                    <li id="menu-item-2427" class="color-2">
                                        <a href="#">Home Three</a>
                                    </li>
                                    <li id="menu-item-2426" class="color-2">
                                        <a href="#">Home Four</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a>
                                <ul class="sub-menu dropdown ">
                                    <li id="menu-item-2252" class="color-4">
                                        <a href="#">Glass &amp; aluminum</a>
                                    </li>
                                    <li id="menu-item-2253" class="color-4">
                                        <a href="#">Automotive Industry</a>
                                    </li>
                                    <li id="menu-item-2254" class="color-4">
                                        <a href="#">Heavy Industry &amp; Mining</a>
                                    </li>
                                    <li id="menu-item-2255" class="color-4">
                                        <a href="#">Agricultural Engineering</a>
                                    </li>
                                    <li id="menu-item-2256" class="color-4">
                                        <a href="#">Chemical Industry</a>
                                    </li>
                                    <li id="menu-item-2257" class="color-4">
                                        <a href="#">Assembly Of Steel</a>
                                    </li>
                                    <li id="menu-item-2258" class="color-4">
                                        <a href="#">Process Engineering</a>
                                    </li>
                                </ul>

                            </li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="chu">
                            <h2>Presentation</h2>
                            <p>Welcome, I am happy to introduce our website ipsum dolor sit amet,
                                consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                pulvinar dapibus leo. I am text block. Click edit button to change this text. 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.Welcome, 
                                I am happy to introduce our website ipsum dolor sit amet, consectetur adipiscing elit.
                                Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. I am text block. 
                                Click edit button to change this text.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <p>There are many variations of passages of Lorem Ipsum available, 
                                but the majority have suffered alteration in some form, by injected humour, 
                                or randomised words which don’t look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hinh">
                            <img src="images/founders.jpg" alt=""/>
                        </div>                           
                    </div>
                </div>
                <div class="wd-row">
                    <div class="container">
                        <div class="col-md-4 col-sm-6  pic-wd">
                            <img src="images/agriculture.jpg">
                            <h4>Agricultural Engineering</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>
                        </div>
                        <div class="col-md-4 col-sm-6  pic-wd">
                            <img src="images/agriculture.jpg">
                            <h4>Agricultural Engineering</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>
                        </div>
                        <div class="col-md-4 col-sm-6  pic-wd">
                            <img src="images/agriculture.jpg">
                            <h4>Agricultural Engineering</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>
                        </div>
                    </div>
                </div>
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
                <div class="clearfix"></div>

                <div class="nen">
                    <h2>Board of Management</h2>
                    <div class="hinh">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="hinhanh">
                                    <img src="images/team-9.jpg" alt=""/>
                                    <div class="title">
                                        <h3>Aleen Valzac </h3>
                                        <h4>CEO</h4>

                                    </div>
                                    <div class="textleft">
                                        <p>Europan lingues es membres del sam familie. Lor separat existentie </p>
                                    </div>
                                    <div class="icons">
                                        <ul>
                                            <li><i class="fa fa-twitter"></i></a></li>
                                            <li><i class="fa fa-facebook"></i></a></li>
                                            <li><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hinhanh">
                                    <img src="images/team-12.jpg" alt=""/>
                                    <div class="title">
                                        <h3>Alex Joan </h3>
                                        <h4>Project Manager</h4>

                                    </div>
                                    <div class="textleft">
                                        <p>Europan lingues es membres del sam familie. Lor separat existentie </p>
                                    </div>
                                    <div class="icons">
                                        <ul>
                                            <li><i class="fa fa-twitter"></i></a></li>
                                            <li><i class="fa fa-facebook"></i></a></li>
                                            <li><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hinhanh">
                                    <img src="images/team-10.jpg" alt=""/>
                                    <div class="title">
                                        <h3>John Harris </h3>
                                        <h4>Product Manager</h4>

                                    </div>
                                    <div class="textleft">
                                        <p>Europan lingues es membres del sam familie. Lor separat existentie </p>
                                    </div>
                                    <div class="icons">
                                        <ul>
                                            <li><i class="fa fa-twitter"></i></a></li>
                                            <li><i class="fa fa-facebook"></i></a></li>
                                            <li><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hinhanh">
                                    <img src="images/team-11.jpg" alt=""/>
                                    <div class="title">
                                        <h3>Amine Jazouli </h3>
                                        <h4>Designer</h4>

                                    </div>
                                    <div class="textleft">
                                        <p>Europan lingues es membres del sam familie. Lor separat existentie </p>
                                    </div>
                                    <div class="icons">
                                        <ul>
                                            <li><i class="fa fa-twitter"></i></a></li>
                                            <li><i class="fa fa-facebook"></i></a></li>
                                            <li><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="fluid">
            <div class="container">
                <div class="fluid-question col-md-6">
                    <ul>
                        <li class="active-li fluid-question-li-1">What do we do?</li>
                        <div class="text-li text-li1">
                            <p>We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.</p>
                            <p>We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.</p>
                        </div>
                        <li class="fluid-question-li-2">Why do we do it?</li>
                        <div class="text-li text-li2">
                            <p>We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.</p>
                            <p>We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.</p>
                        </div>
                    </ul>


                </div>
                <div class="fluid-titles col-md-6">
                    <div class="fluid-titles-panel">
                        <h4 class="active-titles-panel"><i class="fa fa-life-ring"></i>SAFETY<i class="fa fa-minus titles-panel-i"></i></h4>
                        <p class="active-titles-panel-p">A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
                    </div>
                    <div class="fluid-titles-panel">
                        <h4><i class="fa fa-life-ring"></i>QUALITY<i class="fa fa-plus titles-panel-i"></i></h4>
                        <p>A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
                    </div>
                    <div class="fluid-titles-panel">
                        <h4><i class="fa fa-balance-scale"></i>INTEGRITY<i class="fa fa-plus titles-panel-i"></i></h4>
                        <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </div>
            </div>
        </div>
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
        <!-------------------------Footer--------------->
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

            </div>
        </div>
    </body>
</html>