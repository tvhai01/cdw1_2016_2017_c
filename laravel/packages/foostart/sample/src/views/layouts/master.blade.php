<html>
    <head>
        <title>Abundance eCommerce Theme Demo | Just another Kriesi.at Theme Demos Sites site</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/style.css');
        ?>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>              
        <script src="{{asset('js/menu.js')}}" ></script>

    </head>
    <body>
        <div class="type">
            <header>
                @include('nhom_f.modules.type-f-1')
            </header>
            <div class="wrap">
                <div class="container">
                    <div class="shadow">
                        @section('sidebar')
                        @show
                    </div>
                </div>

                <footer>
                    @include('nhom_f.modules.type-f-6')
                </footer>
            </div>   
        </div>
    </body>
    <script src="{{asset('js/scripts_main.js')}}"></script>
    <script src="{{asset('js/wowslider.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
</html>