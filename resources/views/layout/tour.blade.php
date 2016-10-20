<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bounce</title>
    <link href="/dist/css/orchid.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
</head>


<body>






<div class="adb" style="
height: 100px;
width: 100%;
background: #c6c6c6;
display: flex;
align-items: center;
  justify-content: center;
">
    <p style="
    font-size: 16pt;
    text-transform: uppercase;
">Реклама 1920x100</p>
</div>



<header id="header" class="navbar bg-white-only b-b box-shadow-lg">
        <div class="container padder-v navbar-center-brand">
            <div class="navbar-header">
                <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="#" class="navbar-brand m-r-lg navbar-brand-centered">
                    <img src="/img/tour/logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/classic/about">О области</a></li>
                    <li><a href="/classic/about">События</a></li>
                    <li><a href="/classic/about">Инвесторам</a></li>
                    <li><a href="/classic/about">Тиц</a></li>
                    <li class="dropdown pos-stc">
                        <a href="#" data-toggle="dropdown" class=" dropdown-toggle" aria-expanded="true">
                            <i class="icon-options" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu wrapper w-full bg-white">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled l-h-2x">
                                                <li>
                                                    <a href="/classic/about"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>About</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/about2"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>About2</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/about3"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>About3</a>
                                                </li>

                                                <li>
                                                    <a href="/classic/contact"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Контакты</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/invoice"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Счёт</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled l-h-2x">
                                                <li>
                                                    <a href="/classic/price"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/news"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>News</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/team"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Team</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/post"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                                                </li>
                                                <li>
                                                    <a href="/classic/404"><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>404</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 b-l b-light">
                                    <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled l-h-2x">

                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="list-unstyled l-h-2x">

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 b-l b-light">
                                    <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><i class="icon-login m-r-xs"></i> Вход</a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-ios-search m-r-xs"></i>Поиск</a>
                        </li>
                    <li>
                        <a href="#"><i class="icon-globe m-r-xs"></i> Ru/En</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


<div id="content" class="">



@yield('content')




</div>





<!-- footer -->

<footer id="footer" role="footer">



    <div class="bg-white-only box-shadow-lg b-t  padder-v">
        <div class="container">
            <div class="container-fluid">
                <div class="row padder-v">
                    <div class="col-md-3 v-center">
                        <i class="icon-phone fa-2x"></i>
                        <a class="wrapper-sm">Телефон: (4742) 47-23-23</a>
                    </div>
                    <div class="col-md-3 v-center">
                        <i class="icon-info fa-2x"></i>
                        <a class="wrapper-sm">Полезные ссылки</a>
                    </div>
                    <div class="col-md-3 v-center">
                        <i class="icon-eye fa-2x"></i>
                        <a class="wrapper-sm">Версия для слабовидящих</a>
                    </div>


                    <div class="col-md-3">
                        <p>
                            <a href="#" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-vk"></i></a>
                            <a href="#" class="btn btn-icon btn-rounded btn-grey"><i
                                        class="fa fa-odnoklassniki"></i></a>
                            <a href="#" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-icon btn-rounded btn-grey"><i
                                        class="fa fa-instagram"></i></a>
                            <a href="#" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-twitter"></i></a>
                        </p>

                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="wrapper b-t bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3">

                    <h4 class="text-u-c m-b font-thin text-uppercase">ДОСТОПРИМЕЧАТЕЛЬНОСТИ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Мосты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Парки</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Памятники</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Храмы и Соборы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Интересные места</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Площади</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Улицы</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">МАРШРУТЫ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Пешком</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Доступные для инвалидов</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>На велосипеде</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>На автомобиле</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">АУДИОГИДЫ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Пешеходные</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Автомобильные</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">НОВОСТИ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Туриндустрия</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Бюро</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Городские</a></li>
                    </ul>


                </div>
                <div class="col-xs-6 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ФОТО</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Достопримечательности</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Мосты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Сады и парки</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ВИДЕО</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Познавательное</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Творчество</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">РАЗМЕЩЕНИЕ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Гостиницы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Мини-отели</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ГАСТРОНОМИЯ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Кафе</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Рестораны</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Анти-кафе</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Спорт-бары</a></li>
                    </ul>

                </div>
                <div class="clearfix hidden-sm hidden-lg hidden-md"></div>
                <div class="col-xs-6 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ДОСУГ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Театры</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Выставочные залы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Ночные клубы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">ШОППИНГ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Торговые комплексы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Сувениры</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Ночные клубы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">БРОНИРОВАНИЕ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Отели</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Такси</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Ночные клубы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">СОБЫТИЯ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Концерты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Выставки</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Спектакли</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Опера и балет</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Спорт</a></li>
                    </ul>


                </div>
                <div class="col-xs-6 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ТРАНСПОРТ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Аэропорты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Порты морские и речные вокзалы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Международные и междугородние автобусы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Прокат велосипедов</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Прокат автомобилей</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ПАМЯТКА ТУРИСТА</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Туристские центры</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Вопрос-ответ</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Консульства</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Карта Гостя</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->


</body>


<script src="/dist/js/orchid.js"></script>
</html>