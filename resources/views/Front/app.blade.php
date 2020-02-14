<!DOCTYPE html>
<head>
    <title>Polygon CSS Website Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--
    Polygon Template
    https://templatemo.com/tm-400-polygon
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/templatemo_misc.css') }}" rel="stylesheet" >
    <link href="{{ url('css/templatemo_style.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>



</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
<div class="site-header">
    <div class="main-navigation">

        <div class="container">
            <div class="row templatemo_gallerygap">
                <div class="col-md-12 responsive-menu">
                    <a href="#" class="menu-toggle-btn">
                        <i class="fa fa-bars"></i>
                    </a>
                </div> <!-- /.col-md-12 -->
                <div class="col-md-3 col-sm-12">
                    <a href="/"><img src="{{ url('images/templatemo_logo.jpg') }}" alt="Polygon HTML5 Template"></a>
                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-navigation -->
</div>


<div id="menu-container">
    <!-- gallery start -->
    <div class="content homepage" id="menu-1">
        <div class="container">
            @yield('content')
        </div>
    </div>

</div>
<!-- gallery end -->

<div class="clear"></div>

<script src="{{ url('js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('js/jquery.lightbox.js') }}"></script>
<script src="{{ url('js/templatemo_custom.js') }}"></script>
<script>
    function showhide()
    {
        var div = document.getElementById("newpost");
        if (div.style.display !== "none")
        {
            div.style.display = "none";
        }
        else {
            div.style.display = "block";
        }
    }
</script>
</body>
</html>
