@extends('layout.tour')



@section('content')


    <section class="container-fluid">
        <div class="row bg-white">


            <div style="background:url(/img/tour/news/big-top.jpg) center center; background-size:cover">
                <div class="wrapper-xl bg-black-opacity bg-dark">
                    <div class="row m-t">


                        <div class="container m-t-md top-desc-block">


                            <div class="col-md-6  text-white" data-mh="event-top-block">

                                <h1 class="h3 padder-v">Вниманию российских туристов на Гаити!</h1>

                                <small class="text-justify">
                                    По сообщению Министерства иностранных дел Российской Федерации через официальный
                                    твиттер ведомства, на востоке Гаити зафиксирована вспышка холеры, жертвами которой
                                    стали 13 человек.
                                </small>

                            </div>


                        </div>


                    </div>
                </div>
            </div>


            <!--<img src="/img/tour/event/1.png" class="img-full"> -->


            <nav class="bg-danger box-shadow-lg">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="icon-location-pin"></i> Главная</a></li>
                        <li class="active">Вниманию российских туристов на Гаити!</li>
                    </ol>
                </div>
            </nav>


        </div>
    </section>




    <div class="container">

        <div class="row m-t-md m-b-md">
            <div class="col-sm-4">


                <div class="panel wrapper-xl b box-shadow-lg padder-lg" data-mh="main-info-block"
                     style="width: 100%; display: flex; align-items: center; justify-content: center; height: 441px; background: rgb(198, 198, 198);">
                    <p style="
    font-size: 16pt;
    text-transform: uppercase;
">Реклама <br>375x460</p>

                </div>



                <article class="panel wrapper-xl b box-shadow-lg padder-lg">
                    <p class="h3 font-thin  m-b-lg">Новостная <span class="text-danger">Рассылка</span></p>
                    <form role="form" data-mh="main-last-block">

                        <div class="form-group form-group-default m-t-md">
                            <label class="text-sm text-left">Адрес электронной почты</label>
                            <input type="email" placeholder="Введите Email" class="form-control">
                        </div>

                        <span class="m-t-md help-block m-b-none text-xs"> *Ваши личные данные не попадут в руки третьих лиц.</span>

                    </form>

                    <p class="text-center"><button type="submit" class="btn btn-outline btn-danger btn-rounded">Подписаться</button></p>

                </article>







            </div>
            <div class="col-sm-8">
                <div class="blog-post">
                    <div class="panel panel-default">
                        <div class="wrapper-lg">
                            <main>
                                <p>По сообщению Министерства иностранных дел Российской Федерации через официальный
                                    твиттер ведомства, на востоке Гаити зафиксирована вспышка холеры, жертвами которой
                                    стали 13 человек.</p>

                                <p>Ростуризм настоятельно призывает туроператоров, реализующих туры на Гаити,
                                    информировать туристов об обстановке в стране, существующих рисках и необходимых
                                    мерах предосторожности, а также рекомендует российским туристам, пребывающим на
                                    территории этой страны, соблюдать правила гигиены.</p>

                                <p>По данным Всемирной Организации Здравоохранения (ВОЗ), для предотвращения
                                    инфицирования необходимо соблюдать следующие правила:</p>


                                <ul class="list-group">
                                    <li class="list-group-item" style="text-align: justify;">пить только кипяченую или
                                        дезинфицированную хлором, йодом или другими соответствующими средствами питьевую
                                        воду. Средства для дезинфекции воды, как правило, продаются в аптеках. Такие
                                        напитки, как горячий чай или кофе, вино, пиво, газированная вода или
                                        безалкогольные напитки, а также фруктовые соки в бутылках или пакетах, обычно
                                        безопасны для питья
                                    </li>
                                    <li class="list-group-item" style="text-align: justify;">не употреблять лёд, если
                                        нет уверенности, что он сделан из безопасной воды
                                    </li>
                                    <li class="list-group-item" style="text-align: justify;">употреблять в пищу горячие
                                        продукты, прошедшие тщательную тепловую обработку. Приготовленные пищевые
                                        продукты, оставленные в течение нескольких часов при комнатной температуре, без
                                        дополнительного разогревания могут стать источником инфекции
                                    </li>
                                    <li class="list-group-item" style="text-align: justify;">не употреблять в пищу сырые
                                        морепродукты и другие продукты в сыром виде. Исключение составляют фрукты и
                                        овощи, собственноручно очищенные (от кожицы, корки и т.п.)
                                    </li>
                                    <li class="list-group-item" style="text-align: justify;">прежде, чем пить
                                        непастеризованное молоко, прокипятить его
                                    </li>
                                    <li class="list-group-item" style="text-align: justify;">мороженое из непроверенных
                                        источников часто бывает зараженным и может привести к заболеванию
                                    </li>
                                    <li class="list-group-item" style="text-align: justify;">убеждаться в том, что
                                        пищевые продукты, купленные у уличных торговцев, проходят тщательную тепловую
                                        обработку в присутствии покупателя и не содержат каких-либо составных частей, не
                                        прошедших такую обработку.
                                    </li>
                                </ul>


                            </main>
                            <div class="text-muted">
                                <i class="fa fa-clock-o text-muted"></i> Февраля 20, 2013
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection