<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bounce</title>
    <link href="/dist/css/orchid.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
</head>


<body class="agency">


<!-- header -->
<header id="header" class="navbar  navbar-scroll  navbar-fixed-top padder-v">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/" class="navbar-brand m-r-lg v-center">
                <img src="/img/logo.png" class="m-r-sm" alt="Bounce">
               {{-- <span class="h4">Bounce</span> --}}
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/about">About As</a></li>
                <li><a href="/clients">Service</a></li>
                <li><a href="/worker">Portfolio</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>


        </div>
    </div>
</header>
<!-- / header -->
<div id="content" class="">



@yield('content')




</div>



<!-- footer -->
<footer id="footer" class="b-t m-t-md bg-dark">
    <div class="container">
        <div class="row padder-v m-t">
            <div class="col-xs-8">
                <ul class="list-inline">
                    <li><a href="#">Публичная оферта</a></li>
                    <li><a href="#">Об оплате</a></li>
                    <li><a href="#">Гарантии</a></li>
                    <li><a href="#">Команда</a></li>
                    <li><a href="#">Вакансии</a></li>
                </ul>
            </div>
            <div class="col-xs-4 text-right">
                <a href="https://gitter.im/TheOrchid/Dashboard" class="btn btn-link"><i class="fa fa-comments"></i></a>
                <a href="https://vk.com/unknown_art1st"  class="btn btn-link"><i class="fa fa-vk"></i></a>
                <a href="https://github.com/TheOrchid/Dashboard"  class="btn btn-link"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->


</body>


<script src="/dist/js/orchid.js"></script>
</html>