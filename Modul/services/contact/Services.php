<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

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
        <script src="js/header-js.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(".type .chu2").click(function () {
                    $(this).next().toggle();
                    $(this).css("background", "#106EAA");
                });
            });
        </script>
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
                    <div class="col-md-3">

                        <aside class="sidebar" role="complementary">
                            <section>
                                <ul class="menu">
                                    <li class="current-menu-item"><a href="#">Process Engineering</a></li>
                                    <li><a href="#">Assembly Of Steel</a></li>
                                    <li><a href="#">Automotive Industry</a></li>
                                    <li><a href="#">Heavy Industry &amp; Mining</a></li>
                                    <li><a href="#">Agricultural Engineering</a></li>
                                    <li><a href="#">Chemical Industry</a></li>
                                    <li><a href="#  ">Glass &amp; aluminum</a></li>
                                </ul>
                            </section>
                            <section>
                                <h2 class="block-title">Documents</h2>			
                                <div class="textwidget"><div class="widget-documents">
                                        <span class="widget-subtitle">Here is some useful documents</span>
                                        <ul>
                                            <li><i class="fa fa-file-pdf-o"></i><a href="#" title="Finacial Results of 2015">Finacial Results of 2015</a></li>
                                            <li><i class="fa fa-file-word-o"></i><a href="#" title="Press Release Number 5">Press Release Number 5</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section><section><h2 class="block-title">Certifications</h2>			
                                <div class="textwidget"><img src="images/iso.jpg" rel="iso-9001"></div>
                            </section>		
                        </aside>

                    </div>
                    <div class="col-md-9">

                        <div class="row">
                            <div class="hinh col-md-12 col-sm-12 col-xs-12 ">
                                <img src="images/1-850x500.jpg" alt=""/>    
                            </div>
                            <div class="chu col-md-12 col-sm-12 col-xs-12">
                                <h2>Process Engineering Solutions</h2>
                                <p>Yet what we also understand is that our values should express themselves not just through our churches or synagogues, 
                                    temples or mosques; they should express themselves through our government. 
                                    We would be making the same mistake that Reverend Wright made in his 
                                    offending sermons about America – to simplify and stereotype and amplify the negative to the point that it distorts reality.</p>

                                <p>I’ve made a huge tiny mistake. Whoa whoa whoa whoa. 
                                    Wait. Are you telling me you have a multi-stage trick with hidden identities? Can’t a guy call his mother pretty without it seeming strange? Amen.
                                    And how about that little piece of tail on her? Cute! I hear the jury’s still out on science.</p>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="hinh1">
                                    <img  class="img-responsive" src="images/3-420x270.jpg" alt=""/>
                                </div>

                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="chu1">
                                    <p>No, she’s in it. She’s a contestant. It’s sorta like an inner beauty pageant. 
                                        Ah, there it is. You stay on top of her, Buddy. Don’t be afraid to ride her. Hard. Second-of-ly,
                                        I know you’re the big marriage expert. Oh I’m sorry, I forgot, your wife is dead.</p>

                                    <p>Get a dog up ya shag on a rock when it’ll be cream. 
                                        Grab us a ridgy-didge no worries trent from punchy sunnies. 
                                        Built like a bogged heaps you little ripper vb. 
                                        As cunning as a cleanskin when lets get some larrikin.</p>
                                </div>
                            </div>


                        </div>

                        <div class="clearfix"></div>
                        <div class="vien">
                            <div class="chu2">
                                <h3>How I can contact you?</h3>
                                <h4>-</h4>                      
                            </div>
                            <div class="chu3">
                                <p>Lorem ipsum dolor sit amet, facilisi sententiae delicatissimi et vix, suscipit splendide constituto ex eum. Ullum repudiandae vix no.
                                    Pri et ludus animal, voluptua urbanitas persequeris has cu, ut per solum explicari. 
                                    Ei per placerat persequeris, sit te everti mentitum offendit, nec ei duis gloriatur. Eu explicari hendrerit concludaturque nec.</p>
                            </div>
                        </div>
                        <div class="vien">
                            <div class="chu2">
                                <h3>How I can contact you?</h3>
                                <h4>-</h4>                      
                            </div>
                            <div class="chu3">
                                <p>Lorem ipsum dolor sit amet, facilisi sententiae delicatissimi et vix, suscipit splendide constituto ex eum. Ullum repudiandae vix no.
                                    Pri et ludus animal, voluptua urbanitas persequeris has cu, ut per solum explicari. 
                                    Ei per placerat persequeris, sit te everti mentitum offendit, nec ei duis gloriatur. Eu explicari hendrerit concludaturque nec.</p>
                            </div>
                        </div>
                        <div class="vien">
                            <div class="chu2">
                                <h3>How I can contact you?</h3>
                                <h4>-</h4>                      
                            </div>
                            <div class="chu3">
                                <p>Lorem ipsum dolor sit amet, facilisi sententiae delicatissimi et vix, suscipit splendide constituto ex eum. Ullum repudiandae vix no.
                                    Pri et ludus animal, voluptua urbanitas persequeris has cu, ut per solum explicari. 
                                    Ei per placerat persequeris, sit te everti mentitum offendit, nec ei duis gloriatur. Eu explicari hendrerit concludaturque nec.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                       




                    </div>
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