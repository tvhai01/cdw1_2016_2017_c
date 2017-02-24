<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../Show-off-Your-Creativity/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/Show-off-Your-Creativity-less.less', 'css/Show-off-Your-Creativity-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/Show-off-Your-Creativity-css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Phan "Show off Your Creativity" -->
        <div class="wpb-collum">
            <div class="container">
                <div class="show-text col-md-8">
                    <h2>Show off Your Creativity</h2>
                    <hr>    
                    <h4>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h4>
                </div>
            </div>
        </div>
        <!--/Ket thuc "Show off Your Creativity"-->

        <!-- Phan video -->
        <div class="vc-row">
            <div class="container">
                <div class="video-box col-md-6 col-sm-6">
                    <iframe src="https://player.vimeo.com/video/59035269" width="625" height="352" frameborder="0" title="Factory Visit to NITTO" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6 col-sm-6 text-box">
                    <div class="box-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <h3 class="box-title">Ethical Management</h3>
                    <p class="box-body">Business ethics has normative and descriptive dimensions. As a corporate practice and a career specialization, the field is primarily normative. Academics attempting to understand business behavior employ descriptive methods. The range and quantity of business ethical issues reflects the interaction of profit-maximizing behavior with non-economic concerns.</p>
                    <p>Interest in business ethics accelerated dramatically during the 1980s and 1990s, both within major corporations and within academia. For example, most major corporations today promote their commitment to non-economic values under headings. </p>
                </div>
            </div>
        </div>
        <!--/Ket thuc phan "video"-->
    </body>
</html>