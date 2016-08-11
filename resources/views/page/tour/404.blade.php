@extends('layout.tour')



@section('content')



    <div class="container-fluid">

        <div class="row b-b box-shadow">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <ol class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <li class="active">404</li>
                        </ol>


                        <div class="page-header">
                            <h1>404 <small>Страница не найдена</small></h1>
                        </div>



                        <div>
                            <p class="h4 padder-v">
                            Непереживайте это всёголишь ошибка пилота
                            </p>
                            <p class="small">
                                стандартный код ответа HTTP о том, что клиент был в состоянии общаться с сервером, но сервер не может найти данные согласно запросу. Ошибку 404 не следует путать с ошибкой «Сервер не найден» или иными ошибками, указывающими на ограничение доступа к серверу. Ошибка 404 означает, что запрашиваемый ресурс может быть доступен в будущем, что однако не гарантирует наличие прежнего содержания.

                            </p>

                        </div>


                    </div>

                    <div class="col-md-6">

                        <div class='pageOption pull-right'>
                            <a href='#' class='option'>
                                <img src='/img/404.jpg'>
                            </a>
                        </div>
                    </div>



                </div>
            </div>




        </div>

    </div>








<!-- sitemap -->
<div>

    <div class="bg-white-only box-shadow">
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
                        <i class="fa fa-map-signs fa-2x"></i>
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

    <div class="sitemap wrapper b-t bg-gray">
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
</div>
<!-- / sitemap -->

@endsection