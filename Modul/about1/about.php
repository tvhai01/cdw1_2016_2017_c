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
    </head>
    <body>
        <div class="type">
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
            </div>
        </div>
    </body>
</html>