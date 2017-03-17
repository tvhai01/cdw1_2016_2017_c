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
                            <div class="aa">
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
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1441816065210" style="color: ;}"><div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch=""><div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1422465694522">
                                            <div class="wpb_wrapper">
                                                <div class="row">
                                                    <div class="large-12 columns page-sub-title text-center">
                                                        <p>In hac habitasse platea dictumst. Pellentesque in aliquet risus. In at consequat ipsum. Aenean leo elit, imperdiet ac volutpat ornare, mattis vel est. Aliquam rhoncus mi non tortor sodales placerat vel in dolor. Praesent lorem tellus, porta vitae enim sit amet, interdum imperdiet.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div></div></div><div class="vc_row wpb_row vc_row-fluid table-div big vc_custom_1422697257843" style="color: ;}"><div class="wpb_column vc_column_container vc_col-sm-6 vc_custom_1462381335726" data-equalizer-watch=""><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f4-p20-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="/factory/contact/#wpcf7-f4-p20-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="4">
                                                    <input type="hidden" name="_wpcf7_version" value="4.4.2">
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p20-o1">
                                                    <input type="hidden" name="_wpnonce" value="2fef35bfc2">
                                                </div>
                                                <p>Your Name (required)<br>
                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
                                                <p>Your Email (required)<br>
                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
                                                <p>Subject<br>
                                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
                                                <p>Your Message<br>
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit button"><img class="ajax-loader" src="http://themes.webdevia.com/factory/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></p>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_custom_1462381324738" data-equalizer-watch=""><div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">

                                                <div class="map">
                                                    <div id="map-canvas" style="height: 400px; position: relative; overflow: hidden;" data-latitude="-37.817612" data-longitude="144.959399" data-zoom="16" data-companyname="Envato Office" data-decription="2 Elizabeth St, Melbourne Victoria 3000 Australia"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 20px; top: -6px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 20px; top: 250px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 276px; top: -6px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 276px; top: 250px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -236px; top: -6px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -236px; top: 250px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 532px; top: -6px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 532px; top: 250px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 20px; top: -6px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 20px; top: 250px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 276px; top: -6px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 276px; top: 250px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -236px; top: -6px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -236px; top: 250px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 532px; top: -6px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 532px; top: 250px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: -236px; top: -6px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59155!3i40214!4i256!2m3!1e0!2sm!3i375059982!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=40610" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 532px; top: -6px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59158!3i40214!4i256!2m3!1e0!2sm!3i375060006!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=118926" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -236px; top: 250px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59155!3i40215!4i256!2m3!1e0!2sm!3i375059982!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=47724" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 276px; top: -6px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59157!3i40214!4i256!2m3!1e0!2sm!3i375060006!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=20203" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 276px; top: 250px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59157!3i40215!4i256!2m3!1e0!2sm!3i375060006!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=27317" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 20px; top: -6px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59156!3i40214!4i256!2m3!1e0!2sm!3i375060006!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=52551" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 532px; top: 250px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59158!3i40215!4i256!2m3!1e0!2sm!3i375060006!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=126040" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 20px; top: 250px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i59156!3i40215!4i256!2m3!1e0!2sm!3i375060006!3m14!2svi-VN!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cC52Om9ufHAuczotMTAwfHAubDoyMCxzLnQ6M3xwLnY6b258cC5zOi0xMDB8cC5sOjQwLHMudDo2fHAudjpvbnxwLnM6LTEwfHAubDozMCxzLnQ6ODF8cC52OnNpbXBsaWZpZWR8cC5zOi02MHxwLmw6MTAscy50OjgyfHAudjpzaW1wbGlmaWVkfHAuczotNjB8cC5sOjYwLHMudDoyfHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYwLHMudDo0fHAudjpvZmZ8cC5zOi0xMDB8cC5sOjYw!4e0&amp;token=59665" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div style="cursor: default; position: absolute; width: 328px; height: 66px; left: 126px; top: 110px; z-index: 110;"><div style="position: absolute; left: 0px; top: 0px;"><div style="width: 0px; height: 0px; border-right: 10px solid transparent; border-left: 10px solid transparent; border-top: 24px solid rgba(0, 0, 0, 0.0980392); position: absolute; left: 154px; top: 66px;"></div><div style="position: absolute; left: 0px; top: 0px; background-color: rgba(0, 0, 0, 0.2); border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; width: 328px; height: 66px;"></div><div style="border-top-width: 24px; position: absolute; left: 154px; top: 63px;"><div style="position: absolute; overflow: hidden; left: -6px; top: -1px; width: 16px; height: 30px;"><div style="position: absolute; left: 6px; background-color: rgb(255, 255, 255); transform: skewX(22.6deg); transform-origin: 0px 0px 0px; height: 24px; width: 10px; box-shadow: rgba(0, 0, 0, 0.6) 0px 1px 6px;"></div></div><div style="position: absolute; overflow: hidden; top: -1px; left: 10px; width: 16px; height: 30px;"><div style="position: absolute; left: 0px; background-color: rgb(255, 255, 255); transform: skewX(-22.6deg); transform-origin: 10px 0px 0px; height: 24px; width: 10px; box-shadow: rgba(0, 0, 0, 0.6) 0px 1px 6px;"></div></div></div><div style="position: absolute; left: 1px; top: 1px; border-radius: 2px; background-color: rgb(255, 255, 255); width: 326px; height: 64px;"></div></div><div class="gm-style-iw" style="top: 9px; position: absolute; left: 15px; width: 298px;"><div style="display: inline-block; overflow: auto; max-height: 309px; max-width: 479px;"><div style="overflow: auto;"><div class="map-description"><h4>Envato Office</h4> 2 Elizabeth St, Melbourne Victoria 3000 Australia</div></div></div><div style="border-top: 1px solid rgb(204, 204, 204); margin-top: 9px; padding: 6px; display: none; visibility: hidden; font-size: 13px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; font-family: Roboto, Arial;"><a href="" target="_blank" style="cursor: pointer; color: rgb(66, 127, 237); text-decoration: none;">Xem trên Google Maps</a></div></div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 10px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><iframe style="visibility: hidden; z-index: 0; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></iframe></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=-37.817612,144.959399&amp;z=16&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 140px; top: 110px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div><div style="font-size: 13px;">Dữ liệu bản đồ ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 196px; bottom: 0px; width: 145px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="">Dữ liệu bản đồ ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@-37.817612,144.959399,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Phóng to" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Thu nhỏ" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Người hình mắc áo ở đầu Bản đồ" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Hiển thị bản đồ phố" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 34px;">Bản đồ</div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px; min-width: 54px; font-weight: 500;">Styled Map</div></div></div><div draggable="false" class="gm-style-cc" style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 100px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>100 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 53px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); left: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div></div></div></div>
                                                </div>




                                            </div>
                                        </div>
                                    </div></div></div><div class="vc_row wpb_row vc_row-fluid paddingless vc_custom_1441816323794" style="color: ;}"><div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch=""><div class="wpb_wrapper"></div></div></div>
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