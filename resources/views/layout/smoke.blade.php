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


<body class="smoke">


<!-- header -->
<header id="header" class="navbar navbar-default bg-dark  dker b-b  box-shadow">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/" class="navbar-brand m-r-lg v-center">
                <img src="/img/smoke/logo.png" class="m-r-sm" alt="Bounce">
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







<footer class="container-fluid b-t b-light m-b-md">






    <div class="row m-t-xl">
        <div class="col-sm-3">
            <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Информация</span> о нас</h4>
            <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>О нас</a></li>
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Вакансии</a></li>
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Лицензии</a></li>
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Обратная связь</a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Информация</span> покупателю</h4>
            <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Способы оплаты</a></li>
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Доставка товара</a></li>
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Возврат товара</a></li>
                <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Подарочные сертификаты</a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Адрес</span> магазина</h4>
            <p class="text-sm">Россия, Липецкая область, <br>
                г.Липецк ул. Юных Натуралистов <br>
                д. 11a
            </p>
            <p>Телефон: <a href="mailto:hey@example.com" class="font-bold">+7-825-44-88</a></p>
        </div>
        <div class="col-sm-3">
            <h4 class="text-u-c m-b-xl font-thin"><span class="b-b b-dark font-bold">Оффициальные</span> страницы</h4>
            <div class="m-b-xl">
                <a href="#" class="btn btn-icon btn-rounded b b-dark"><i class="fa fa-youtube-play"></i></a>
                <a href="#" class="btn btn-icon btn-rounded b b-dark"><i class="fa fa-facebook"></i></a>
                <a href="#" class="btn btn-icon btn-rounded b b-dark"><i class="fa fa-twitter"></i></a>
                <a href="#" class="btn btn-icon btn-rounded b b-dark"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="btn btn-icon btn-rounded b b-dark"><i class="fa fa-vk"></i></a>
                <a href="#" class="btn btn-icon btn-rounded b b-dark"><i class="fa fa-odnoklassniki"></i></a>
            </div>
        </div>
    </div>





</footer>







</body>


<script src="/dist/js/orchid.js"></script>
</html>