@extends('layout.lawyer')

@section('content')


    <div class="b-b">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class=" m-t-md m-b-md">
                        <div class="pull-left m-r-md">
                            <i class="fa fa-home fa-3x"></i>
                        </div>
                        <div class="text">
                            <strong>Свяжитесь с нами +7 (4742) 227-887</strong><br>
                            <small class="font-thin">г. Липецк, ул. Октябрьская 61</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="m-t-md m-b-md">
                        <div class="pull-left m-r-md">
                            <i class="fa fa-clock-o fa-3x"></i>
                        </div>
                        <div class="text">
                            <strong>График работы</strong><br>
                            <small class="font-thin">Пн - Пт: 8:00 - 21:00, Сб: 8:00 - 14:00</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="m-t-md m-b-md">
                        <div class="pull-left  m-r-md ">
                            <i class="fa fa-phone fa-3x"></i>
                        </div>
                        <div class="text">
                            <strong>Заказать звонок</strong><br>
                            <small class="font-thin">Мы ответим на Ваши вопросы</small>
                        </div>
                        <a href="/feedback" class="link"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container m-t-xxl m-b-xxl">


        <section class="container wrapper b-b">
            <div class="row">
                <div class="col-md-6">
                    <p class="h1 font-thin">
                        Связаться с нами </p>

                    <div class="m-t-md">
                        <small>
                            Повседневная практика показывает, что постоянное нашей деятельности представляет  </small>


                        <form role="form" class="m-t-md">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group  form-group-default">
                                        <label class="small">Имя</label>
                                        <input type="text" class="form-control" placeholder="Иван">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group  form-group-default">
                                        <label class="small">Фамилия</label>
                                        <input type="text" class="form-control" placeholder="Иванов">
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-xs">
                                <div class="col-sm-6">
                                    <div class="form-group  form-group-default">
                                        <label for="email" class="small">Электронная почта</label>
                                        <input type="email" class="form-control" name="email" required="" placeholder="ivan@ivanov.ru">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label for="phone" class="small">Телефон</label>
                                        <input type="text" class="form-control" name="phone" required="" placeholder="89513054555">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group form-group-default  m-t-xs">
                                <label class="small">Сообщение</label>
                                <textarea placeholder="Пожалуйста изложите тему вопроса" rows="5" class="form-control  no-resize"></textarea>
                            </div>



                            <div class="m-t-md clearfix">
                                <p class="pull-left small m-t-xs">Я согласен на обработку персональных данных. </p>
                                <button class="btn btn-dark btn-rounded pull-right">
                                    Отправить
                                </button>
                            </div>








                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper-xs">

                        <p class="small">Повседневная практика показывает, что рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации. </p>
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="text-black-dk text-uppercase">Липецк </h5>
                                <address class="m-t-10">Липецкая область
                                    <br> 7465 ул. Октябрьская 61
                                    <br> оффис 220
                                </address>
                                <br>

                                <p><span class="text-uppercase">Телефон</span>
                                    <span class="font-thin">(425) 882-8080</span></p>

                                <p><span class="text-uppercase">Факс</span>
                                    <span class="font-thin">(425) 706-7329</span></p>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="text-black-dk  text-uppercase">Москва</h5>
                                <address class="m-t-10">Липецкая область
                                    <br> 7465 ул. Октябрьская 61
                                    <br> оффис 220
                                </address>
                                <br>


                                <p><span class="text-uppercase">Телефон</span>
                                    <span class="font-thin">(425) 882-8080</span></p>

                                <p><span class="text-uppercase">Факс</span>
                                    <span class="font-thin">(425) 706-7329</span></p>
                            </div>
                        </div>

                        <h5 class="padder-v">Лицензия на ведения деятельности</h5>

                        <div class="row">
                            <div class="col-sm-6">
                                <p class="text-uppercase">Телефон </p>

                                <p><ins>(425) 882-8080</ins></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-uppercase">Email </p>

                                <p><ins>email@exemple.com</ins></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>



    <div class="container m-t-xxl">
        <div class="col-sm-4 text-center">

            <svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <!-- Generator: Sketch 3.2.2 (9983) - http://www.bohemiancoding.com/sketch -->
                <title>Parachute</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="outlined" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Activities_sliced" sketch:type="MSLayerGroup" transform="translate(-360.000000, -960.000000)"></g>
                    <g id="Activities" sketch:type="MSLayerGroup" transform="translate(-374.000000, -961.000000)" stroke="#535353" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Parachute" transform="translate(380.000000, 965.000000)" sketch:type="MSShapeGroup">
                            <path d="M48,24 C48,10.745166 37.254834,0 24,0 C10.745166,0 0,10.745166 0,24 C0,20.6862915 2.6862915,18 6,18 C9.3137085,18 12,20.6862915 12,24 L12,24 C12,20.6862915 14.6862915,18 18,18 C21.3137085,18 24,20.6862915 24,24 C24,20.6862915 26.6862915,18 30,18 C33.3137085,18 36,20.6862915 36,24 C36,20.6862915 38.6862915,18 42,18 C45.3137085,18 48,20.6862915 48,24 Z" id="Oval-1022"></path>
                            <circle id="Oval-1026" cx="24.5" cy="46.5" r="2.5"></circle>
                            <path d="M27,52 L31,48" id="Line"></path>
                            <path d="M18,52 L22,48" id="Line-280" transform="translate(20.000000, 50.000000) scale(-1, 1) translate(-20.000000, -50.000000) "></path>
                            <path d="M2.00000001,27 L19.2173745,43.2692779" id="Path-2429"></path>
                            <path d="M29.2883044,27 L46.5056789,43.2692779" id="Path-2429" transform="translate(38.000000, 35.028512) scale(-1, 1) translate(-38.000000, -35.028512) "></path>
                            <path d="M12.6258957,26.3556054 L22.2108584,40.8520585" id="Path-2431"></path>
                            <path d="M26.5,26.3556054 L36.0849626,40.8520585" id="Path-2431" transform="translate(31.292481, 33.603832) scale(-1, 1) translate(-31.292481, -33.603832) "></path>
                            <path d="M23.9911083,22.9999973 L23.9911083,37.7549954" id="Path-2433"></path>
                        </g>
                    </g>
                </g>
            </svg>


            <h4 class="block">Эффиктивность <i class="fa fa-angle-right m-l-md"></i></h4>
            <p class="w-lg center">Повседневная практика показывает, что рамки и место обучения кадров . </p>
            <small class="block padder-v text-muted">Идейные соображения высшего порядка</small>
        </div>
        <div class="col-sm-4 text-center">


            <svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <!-- Generator: Sketch 3.2.2 (9983) - http://www.bohemiancoding.com/sketch -->
                <title>Prizemedalion</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="outlined" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Activities_sliced" sketch:type="MSLayerGroup" transform="translate(-720.000000, 0.000000)"></g>
                    <g id="Activities" sketch:type="MSLayerGroup" transform="translate(-734.000000, -1.000000)" stroke="#535353" stroke-width="2" stroke-linejoin="round">
                        <g id="Prizemedalion" transform="translate(741.000000, 9.000000)" sketch:type="MSShapeGroup">
                            <circle id="Oval-810" stroke-linecap="round" cx="23" cy="33" r="14"></circle>
                            <circle id="Oval-811" stroke-linecap="round" cx="23" cy="33" r="10"></circle>
                            <path d="M20.2663117,29.378475 L23,27.5941876 L23,38" id="Path-1890" stroke-linecap="round"></path>
                            <path d="M27,19 L38,0" id="Line" stroke-linecap="square"></path>
                            <path d="M8,19 L19,0" id="Line" stroke-linecap="square" transform="translate(13.500000, 9.500000) scale(-1, 1) translate(-13.500000, -9.500000) "></path>
                            <path d="M0,24 L11,5" id="Line" stroke-linecap="square" transform="translate(5.500000, 14.500000) scale(-1, 1) translate(-5.500000, -14.500000) "></path>
                            <path d="M35,24 L46,5" id="Line" stroke-linecap="square"></path>
                        </g>
                    </g>
                </g>
            </svg>


            <h4 class="block">Отзывчивость <i class="fa fa-angle-right m-l-md"></i></h4>
            <p class="w-lg center">Повседневная практика показывает, что рамки и место обучения кадров . </p>
            <small class="block padder-v text-muted">Идейные соображения высшего порядка,</small>
        </div>
        <div class="col-sm-4 text-center">


            <svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <!-- Generator: Sketch 3.2.2 (9983) - http://www.bohemiancoding.com/sketch -->
                <title>Umbrella</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="outlined" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Activities_sliced" sketch:type="MSLayerGroup" transform="translate(-240.000000, 0.000000)"></g>
                    <g id="Activities" sketch:type="MSLayerGroup" transform="translate(-254.000000, -1.000000)" stroke="#535353" stroke-width="2" stroke-linejoin="round">
                        <g id="Umbrella" transform="translate(260.000000, 5.000000)" sketch:type="MSShapeGroup">
                            <path d="M12.9170416,31 C12.4409635,33.8377133 9.97299629,36 7,36 C4.02700371,36 1.55903653,33.8377133 1.08295844,31 L1,31 L1,24 L49,24 L49,31 L48.9170416,31 C48.4409635,33.8377133 45.9729963,36 43,36 C40.0270037,36 37.5590365,33.8377133 37.0829584,31 L36.9170416,31 C36.4409635,33.8377133 33.9729963,36 31,36 C28.0270037,36 25.5590365,33.8377133 25.0829584,31 L24.9170416,31 C24.4409635,33.8377133 21.9729963,36 19,36 C16.0270037,36 13.5590365,33.8377133 13.0829584,31 L12.9170416,31 Z" id="Oval-800" stroke-linecap="round"></path>
                            <polygon id="Triangle-27" stroke-linecap="round" points="25 4 50 24 0 24 "></polygon>
                            <path d="M25,4 L25,0" id="Line" stroke-linecap="square"></path>
                            <path d="M23,39 L23,54" id="Line" stroke-linecap="square"></path>
                            <path d="M27,39 L27,54" id="Line" stroke-linecap="square"></path>
                        </g>
                    </g>
                </g>
            </svg>

            <h4 class="block">Рационально <i class="fa fa-angle-right m-l-md"></i></h4>
            <p class="w-lg center">Повседневная практика показывает, что рамки и место обучения кадров . </p>
            <small class="block padder-v text-muted">Идейные соображения высшего порядка,</small>
        </div>
    </div>

@endsection