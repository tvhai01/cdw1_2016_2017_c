<html>
    <head>
        <title>BLOG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/blog.less', 'css/blog.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/blog.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/custom-js.js" type="text/javascript"></script>

    </head>
    <body>
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
            <!---------------------NAVIGATOR------------------------------------------>
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
            <!------------------KET THUC NAVIGATOR------------------------------------------>
        </header>

        <div class="Blog">
            <div class="container">
                Blog
            </div>
        </div>


        <div class="main">
            <div class="container">
                <div class="main-blog-post col-md-9">
                    <div class="post">
                        <div class="col-md-2 post-time">
                            <div class="arrow"></div>
                            <br>
                            <br>
                            <div class="author">
                                By
                                <div> Owner</div>
                            </div>
                            <div class="date">
                                <a href="#">
                                    <span class="day">09</span>
                                    <span class="month">May</span>
                                    <span class="year">16</span>
                                </a>
                            </div>
                            <div class="comment-count text-center">
                                <div>1</div>
                                comment
                            </div>
                        </div>
                        <div class="col-md-10 post-content">
                            <h2 class="node-title">
                                <a href="#">Secure strong revenue growth</a>
                            </h2>
                            <div class="pic">
                                <img src="images/post-4-880x350.jpg">
                            </div>
                            <div class="text-secondary">
                                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nunc dui, scelerisque at purus at, mollis mattis tellus. Aliquam tellus quam, vehicula id cursus ut, euismod id massa. The global economic recovery, alongside strong development in emerging markets, is…</p>
                            </div>
                            <div class="read-more-btn">
                                READ MORE
                                <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="post">
                        <div class="col-md-2 post-time">
                            <div class="arrow"></div>
                            <br>
                            <br>
                            <div class="author">
                                By
                                <div> Owner</div>
                            </div>
                            <div class="date">
                                <a href="#">
                                    <span class="day">28</span>
                                    <span class="month">August</span>
                                    <span class="year">14</span>
                                </a>
                            </div>
                            <div class="comment-count text-center">
                                <div>0</div>
                                comment
                            </div>
                        </div>
                        <div class="col-md-10 post-content">
                            <h2 class="node-title">
                                <a href="#">Excepteur sint occaecat cupidatat</a>
                            </h2>
                            <div class="pic">
                                <img src="images/3-650x350.jpg">
                            </div>
                            <div class="text-secondary">
                                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nunc dui, scelerisque at purus at, mollis mattis tellus. Aliquam tellus quam, vehicula id cursus ut, euismod id massa.</p>
                            </div>
                            <div class="read-more-btn">
                                READ MORE
                                <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="post">
                        <div class="col-md-2 post-time">
                            <div class="arrow"></div>
                            <br>
                            <br>
                            <div class="author">
                                By
                                <div> Owner</div>
                            </div>
                            <div class="date">
                                <a href="#">
                                    <span class="day">28</span>
                                    <span class="month">August</span>
                                    <span class="year">14</span>
                                </a>
                            </div>
                            <div class="comment-count text-center">
                                <div>0</div>
                                comment
                            </div>
                        </div>
                        <div class="col-md-10 post-content">
                            <h2 class="node-title">
                                <a href="#">Excepteur sint occaecat cupidatat</a>
                            </h2>
                            <div class="pic">
                                <img src="images/post-4-880x350.jpg">
                            </div>
                            <div class="text-secondary">
                                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nunc dui, scelerisque at purus at, mollis mattis tellus. Aliquam tellus quam, vehicula id cursus ut, euismod id massa.</p>
                            </div>
                            <div class="read-more-btn">
                                READ MORE
                                <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>


                    <div class="post">
                        <div class="col-md-2 post-time">
                            <div class="arrow"></div>
                            <br>
                            <br>
                            <div class="author">
                                By
                                <div> Owner</div>
                            </div>
                            <div class="date">
                                <a href="#">
                                    <span class="day">28</span>
                                    <span class="month">August</span>
                                    <span class="year">14</span>
                                </a>
                            </div>
                            <div class="comment-count text-center">
                                <div>0</div>
                                comment
                            </div>
                        </div>
                        <div class="col-md-10 post-content">
                            <h2 class="node-title">
                                <a href="#">Aenean nonummy that mauris</a>
                            </h2>
                            <div class="pic">
                                <img src="images/automotive-b-880x350.jpg">
                            </div>
                            <div class="text-secondary">
                                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nunc dui, scelerisque at purus at, mollis mattis tellus. Aliquam tellus quam, vehicula id cursus ut, euismod id massa.</p>
                            </div>
                            <div class="read-more-btn">
                                READ MORE
                                <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="post">
                        <div class="col-md-2 post-time">
                            <div class="arrow"></div>
                            <br>
                            <br>
                            <div class="author">
                                By
                                <div> Owner</div>
                            </div>
                            <div class="date">
                                <a href="#">
                                    <span class="day">28</span>
                                    <span class="month">August</span>
                                    <span class="year">14</span>
                                </a>
                            </div>
                            <div class="comment-count text-center">
                                <div>0</div>
                                comment
                            </div>
                        </div>
                        <div class="col-md-10 post-content">
                            <h2 class="node-title">
                                <a href="#">Fusce suscipit varius mi cum sociis</a>
                            </h2>
                            <div class="pic">
                                <img src="images/heavy-b-2-880x350.jpg">
                            </div>
                            <div class="text-secondary">
                                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nunc dui, scelerisque at purus at, mollis mattis tellus. Aliquam tellus quam, vehicula id cursus ut, euismod id massa.</p>
                            </div>
                            <div class="read-more-btn">
                                READ MORE
                                <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar col-md-3">
                    <section>
                        <form class="searchform" id="searchform" method="get" role="search">
                            <div style="position: relative;">
                                <input type="text" id="s" name="s" value="">
                                <input type="submit" value="Search" id="searchsubmit">
                            </div>
                        </form>
                    </section>
                    <section>		
                        <h2 class="block-title">Recent Posts</h2>
                        <ul>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Secure strong revenue growth</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Need for growth and reliability</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Excepteur sint occaecat cupidatat</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Aenean nonummy that mauris</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Fusce suscipit varius mi cum sociis</a>
                            </li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="block-title">Recent Comments</h2>
                        <ul id="recentcomments">
                            <li class="recentcomments">
                                <i class="fa fa-caret-right"></i>
                                <span class="comment-author-link">
                                    <a href="#" rel="external nofollow" class="url">Mr WordPress</a>
                                </span> on <a href="#">Secure strong revenue growth</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-caret-right"></i>
                                <span class="comment-author-link">Maria</span> on <a href="#">Woo Ninja</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-caret-right"></i>
                                <span class="comment-author-link">Maria</span> on <a href="#">Premium Quality</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-caret-right"></i>
                                <span class="comment-author-link">Maria</span> on <a href="#">Woo Logo</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-caret-right"></i>
                                <span class="comment-author-link">Maria</span> on <a href="#">Ninja Silhouette</a>
                            </li>
                        </ul>
                    </section>
                    <section><h2 class="block-title">Archives</h2>		<ul>
                            <li><i class="fa fa-caret-right"></i><a href="#">May 2016</a></li>
                            <li><i class="fa fa-caret-right"></i><a href="#">August 2014</a></li>
                        </ul>
                    </section>
                    <section>
                        <h2 class="block-title">Categories</h2>
                        <ul>
                            <li class="cat-item cat-item-1">
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Uncategorized</a>
                            </li>
                        </ul>
                    </section>
                    <section><h2 class="block-title">Meta</h2>
                        <ul>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Log in</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

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
                                <li><a href="#">Blog</a></li>
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