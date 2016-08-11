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


<body>


<!-- header -->
<header id="header" class="navbar bg-white-only padder-v b-b box-shadow">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/classic/" class="navbar-brand m-r-lg v-center">
                <img src="/img/logo.png" class="m-r-sm" alt="Bounce">
               {{-- <span class="h4">Bounce</span> --}}
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/classic/about">About As</a></li>
                <li><a href="/classic/clients">Service</a></li>
                <li><a href="/classic/worker">Portfolio</a></li>
                <li><a href="/classic/contact">Contact</a></li>


                <li class="dropdown pos-stc">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
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


                <li>


                    <form class="navbar-form navbar-form-sm navbar-left w-sm" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm bg-light no-border rounded padder"
                                       placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
                            </div>
                        </div>
                    </form>

                </li>




            </ul>


        </div>
    </div>
</header>
<!-- / header -->
<div id="content" class="">



@yield('content')




</div>





<!-- footer -->
<footer id="footer" role="footer">

    <div class="bg-white-only box-shadow b-t">
        <div class="container">
            <div class="container-fluid">
                <div class="row padder-v">
                    <div class="col-md-3 v-center">
                        <i class="fa fa-phone fa-2x"></i>
                        <a class="wrapper-sm">Телефон: (4742) 47-23-23</a>
                    </div>
                    <div class="col-md-3 v-center">
                        <i class="fa fa-comments-o fa-2x"></i>
                        <a class="wrapper-sm">Онлайн-консультант</a>
                    </div>
                    <div class="col-md-3 v-center">
                        <i class="fa fa-building-o fa-2x"></i>
                        <a class="wrapper-sm">Контакты</a>
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
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Мосты</a></li>
                        <li><a href="#">Парки</a></li>
                        <li><a href="#">Памятники</a></li>
                        <li><a href="#">Храмы и Соборы</a></li>
                        <li><a href="#">Интересные места</a></li>
                        <li><a href="#">Площади</a></li>
                        <li><a href="#">Улицы</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">МАРШРУТЫ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Пешком</a></li>
                        <li><a href="#">Доступные для инвалидов</a></li>
                        <li><a href="#">На велосипеде</a></li>
                        <li><a href="#">На автомобиле</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">АУДИОГИДЫ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Пешеходные</a></li>
                        <li><a href="#">Автомобильные</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">НОВОСТИ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Туриндустрия</a></li>
                        <li><a href="#">Бюро</a></li>
                        <li><a href="#">Городские</a></li>
                    </ul>


                </div>
                <div class="col-xs-6 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ФОТО</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Достопримечательности</a></li>
                        <li><a href="#">Мосты</a></li>
                        <li><a href="#">Сады и парки</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ВИДЕО</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Познавательное</a></li>
                        <li><a href="#">Творчество</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">РАЗМЕЩЕНИЕ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Гостиницы</a></li>
                        <li><a href="#">Мини-отели</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ГАСТРОНОМИЯ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Кафе</a></li>
                        <li><a href="#">Рестораны</a></li>
                        <li><a href="#">Анти-кафе</a></li>
                        <li><a href="#">Спорт-бары</a></li>
                    </ul>

                </div>
                <div class="clearfix hidden-sm hidden-lg hidden-md"></div>
                <div class="col-xs-6 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ДОСУГ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Театры</a></li>
                        <li><a href="#">Выставочные залы</a></li>
                        <li><a href="#">Ночные клубы</a></li>
                        <li><a href="#">Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">ШОППИНГ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Торговые комплексы</a></li>
                        <li><a href="#">Сувениры</a></li>
                        <li><a href="#">Ночные клубы</a></li>
                        <li><a href="#">Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">БРОНИРОВАНИЕ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Отели</a></li>
                        <li><a href="#">Такси</a></li>
                        <li><a href="#">Ночные клубы</a></li>
                        <li><a href="#">Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">СОБЫТИЯ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Концерты</a></li>
                        <li><a href="#">Выставки</a></li>
                        <li><a href="#">Спектакли</a></li>
                        <li><a href="#">Опера и балет</a></li>
                        <li><a href="#">Спорт</a></li>
                    </ul>


                </div>
                <div class="col-xs-6 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ТРАНСПОРТ</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Аэропорты</a></li>
                        <li><a href="#">Порты морские и речные вокзалы</a></li>
                        <li><a href="#">Международные и междугородние автобусы</a></li>
                        <li><a href="#">Прокат велосипедов</a></li>
                        <li><a href="#">Прокат автомобилей</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ПАМЯТКА ТУРИСТА</h4>
                    <ul class="list-unstyled m-b-md small">
                        <li><a href="#">Туристские центры</a></li>
                        <li><a href="#">Вопрос-ответ</a></li>
                        <li><a href="#">Консульства</a></li>
                        <li><a href="#">Карта Гостя</a></li>
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