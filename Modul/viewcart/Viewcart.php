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
            <main class="l-main">
                <div class="main row">	

                    <article>
                        <div class="body field">
                            <div class="woocommerce">
                                <form action="http://themes.webdevia.com/factory/cart/" method="post">


                                    <table class="shop_table shop_table_responsive cart" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="cart_item">

                                                <td class="product-remove">
                                                    <a href="http://themes.webdevia.com/factory/cart/?remove_item=7cbbc409ec990f19c78c75bd1e06f215&amp;_wpnonce=a3d497a332" class="remove" title="Remove this item" data-product_id="70" data-product_sku="">×</a>					</td>

                                                <td class="product-thumbnail">
                                                    <a href="http://themes.webdevia.com/factory/product/flying-ninja/"><img width="180" height="180" src="http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="poster_2_up" srcset="http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-180x180.jpg 180w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-150x150.jpg 150w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-300x300.jpg 300w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-768x768.jpg 768w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-140x140.jpg 140w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-370x370.jpg 370w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-600x600.jpg 600w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up.jpg 1000w" sizes="(max-width: 180px) 100vw, 180px"></a>					</td>

                                                <td class="product-name" data-title="Product">
                                                    <a href="http://themes.webdevia.com/factory/product/flying-ninja/">Flying Ninja</a>					</td>

                                                <td class="product-price" data-title="Price">
                                                    <span class="amount">£12.00</span>					</td>

                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <input type="number" step="1" min="0" max="" name="cart[7cbbc409ec990f19c78c75bd1e06f215][qty]" value="2" title="Qty" class="input-text qty text" size="4">
                                                    </div>
                                                </td>

                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="amount">£24.00</span>					</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="actions">

                                                    <div class="coupon">

                                                        <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">

                                                    </div>

                                                    <input type="submit" class="button" name="update_cart" value="Update Cart">


                                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="a3d497a332"><input type="hidden" name="_wp_http_referer" value="/factory/cart/">			</td>
                                            </tr>

                                        </tbody>
                                    </table>


                                </form>

                                <div class="cart-collaterals">

                                    <div class="cart_totals ">


                                        <h2>Cart Totals</h2>

                                        <table cellspacing="0" class="shop_table shop_table_responsive">

                                            <tbody><tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal"><span class="amount">£24.00</span></td>
                                                </tr>






                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="amount">£24.00</span></strong> </td>
                                                </tr>


                                            </tbody></table>

                                        <div class="wc-proceed-to-checkout">

                                            <a href="#" class="checkout-button button alt wc-forward">
                                                Proceed to Checkout </a>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </article>

                </div>  
            </main>
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