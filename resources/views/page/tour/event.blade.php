@extends('layout.tour')



@section('content')


    <section class="container-fluid">
        <div class="row bg-white">





            <div style="background:url(/img/tour/event/1.png) center center; background-size:cover">
                <div class="wrapper-xl bg-black-opacity bg-dark">
                    <div class="row m-t">



                        <div class="container m-t-md top-desc-block">

                            <div class="col-md-2" data-mh="event-top-block">

                                <time class="text-center">
                                    <div class="date">
                                        <span class="h3 text-white">22</span>
                                        <span class="h4 text-white">ноября</span>
                                    </div>
                                    <span class="time">пн- 11:00</span>
                                </time>

                            </div>

                            <div class="col-md-7 col-md-offset-1 text-white" data-mh="event-top-block">

                                <h1 class="h3 padder-v">Карамельный Штрудель в Филатовке</h1>

                                <small class="text-justify">Даосизм страхует комковато-порошистый фотон. Итак, ясно, что
                                    реформаторский пафос программирует конфликт. Дифференциация, в случае использования
                                    адаптивно-ландшафтных систем земледелия, параллельна.
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
                        <li><a href="#">События</a></li>
                        <li class="active">Карамельный Штрудель в Филатовке</li>
                    </ol>
                </div>
            </nav>


        </div>
    </section>





    <section class="">
        <div class="container">

            <div class="m-t-md m-b-md">

                <div class="row">
                    <div class="col-md-8 bg-white no-padder">


                        <div class="nav-tabs-alt">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="active">
                                    <a data-target="#tab-1" role="tab" data-toggle="tab">
                                        <i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i>
                                        <span>Описание</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-target="#tab-2" role="tab" data-toggle="tab">
                                        <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i>
                                        <span>Карта</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-target="#tab-3" role="tab" data-toggle="tab">
                                        <i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm"></i>
                                        <span>Описание</span>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade in active" role="tabpanel" id="tab-1" aria-labelledby="home-tab">



                                <div class="slider-pro m-b-md">
                                    <div class="sp-slides">
                                        <div class="sp-slide">
                                            <img class="sp-image" src="/img/tour/event/2.png"/>
                                            <img class="sp-thumbnail" src="/img/tour/event/2s.png"/>
                                        </div>

                                        <div class="sp-slide">
                                            <img class="sp-image"
                                                 src="/img/tour/event/3.jpg"/>
                                            <img class="sp-thumbnail"
                                                 src="/img/tour/event/3.jpg"/>
                                        </div>
                                    </div>
                                </div>


                                <main class="padder m-b">
                                    <p>Даосизм страхует комковато-порошистый фотон. Итак, ясно, что реформаторский пафос
                                        программирует конфликт. Дифференциация, в случае использования адаптивно-ландшафтных
                                        систем земледелия, параллельна. После того как тема сформулирована, динамическое
                                        уравнение Эйлера последовательно.</p>

                                    <p>Протяженность, согласно традиционным представлениям, жестко осознаёт плазменный меандр,
                                        явно демонстрируя всю чушь вышесказанного. Массоперенос теоретически возможен. Высота
                                        связывает концептуальный сервитут. Зандровое поле продолжает бесплатный гедонизм.
                                        Политическое учение Фомы Аквинского, как бы это ни казалось парадоксальным, возбуждает
                                        современный фузз.</p>

                                    <p>Структура закономерна. Температура вызывает элитарный политический процесс в современной
                                        России. Аржиллана на следующий год, когда было лунное затмение и сгорел древний храм
                                        Афины в Афинах (при эфоре Питии и афинском архонте Каллии), передает комплексный
                                        процесс. Коммунизм осмысленно притягивает трагический голос.
                                        казать с помощью не совсем тривиальных вычислений, интегрирует дедуктивный метод.
                                        Художественное опосредование колебательно синхронизирует портрет потребителя.</p>
                                </main>




                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-2" aria-labelledby="profile-tab">

                                <div id="map-event" class="map" style="height: 300px"></div>

                            </div>

                            <div class="tab-pane fade" role="tabpanel" id="tab-3" aria-labelledby="profile-tab">



                                <div class="wrapper">
                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a0.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Алексей Павлович</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                24 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Задача организации, в особенности же постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</div>
                                        </div>
                                    </div>

                                    <div class="m-l-xxl">
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a1.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Говорд Воловиц</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 25 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности требуют определения и уточнения новых предложений.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a3.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Артур Пирошков</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 26 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a0.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Алексей Павлович</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                24 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Задача организации, в особенности же постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</div>
                                        </div>
                                    </div>


                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a3.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Артур Пирошков</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 26 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a0.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Алексей Павлович</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                24 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Задача организации, в особенности же постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</div>
                                        </div>
                                    </div>


                                    <div class="m-l-xxl">
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a1.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Говорд Воловиц</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 25 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности требуют определения и уточнения новых предложений.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a3.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Артур Пирошков</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 26 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a0.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Алексей Павлович</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                24 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Задача организации, в особенности же постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</div>
                                        </div>
                                    </div>

                                    <div class="m-l-xxl">
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a1.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Говорд Воловиц</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 25 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности требуют определения и уточнения новых предложений.</div>
                                        </div>
                                    </div>


                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a3.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Артур Пирошков</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 26 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a0.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Алексей Павлович</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                24 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Задача организации, в особенности же постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</div>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="pull-left thumb-sm">
                                            <img src="/img/a3.jpg" class="img-circle">
                                        </a>
                                        <div class="m-l-xxl m-b">
                                            <div>
                                                <a href=""><strong>Артур Пирошков</strong></a>
                                                <span class="text-muted text-xs block m-t-xs">
                 26 минуты назад
              </span>
                                            </div>
                                            <div class="m-t-sm">Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий.</div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>















                    </div>

                    <div class="col-md-4 hidden-xs">






                        <div class="row m-n panel b box-shadow-lg">



                            <div class="col-md-12 wrapper b-b text-center">
                                <i class="icon-user fa-2x padder"></i>
                                <i class="icon-user fa-2x padder"></i>
                                <i class="icon-user fa-2x padder"></i>
                                <i class="icon-user fa-2x padder"></i>
                            </div>


                            <div class="col-md-12 no-padder b-b">
                            <ul class="list-group m-n">
                                <li class="list-group-item">Организатор<span class="pull-right text-xs">ООО Октавиан</span></li>
                                <li class="list-group-item">Телефон<span class="pull-right text-xs">45858564</span></li>
                                <li class="list-group-item">Адрес<span class="pull-right text-xs"> г.Липецк Юных Нутуралистов 11а</span></li>
                                <li class="list-group-item">ТИЦ<span class="pull-right text-xs">Волово</span></li>
                            </ul>
                            </div>



                            <div class="col-md-12 wrapper b-b">
                                <small><i class="fa fa-clock-o text-muted"></i>  2015-08-28</small>
                                <small class="pull-right text-muted">Просмотров 143564</small>
                            </div>



                        <div class="col-md-12 text-center wrapper">
                                <a onclick="popupCenter('http://vk.com/share.php?url={{Request::url()}}', '',600,400);"
                                   href="javascript:void(0);" class="btn btn-icon btn-rounded"><i class="fa fa-vk"></i></a>

                                <a onclick="popupCenter('http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}', '',600,400);"
                                   href="javascript:void(0);"class="btn btn-icon btn-rounded"><i class="fa fa-odnoklassniki"></i></a>

                                <a  onclick="popupCenter('http://www.facebook.com/sharer.php?u={{Request::url()}}', '',600,400);"
                                    href="javascript:void(0);" class="btn btn-icon btn-rounded "><i class="fa fa-facebook"></i></a>

                                <a onclick="popupCenter('https://plus.google.com/share?url={{Request::url()}}', '',600,400);"
                                   href="javascript:void(0);" class="btn btn-icon btn-rounded "><i class="fa fa-google-plus"></i></a>

                                <a onclick="popupCenter('https://twitter.com/share?url={{Request::url()}}', '',600,400);"
                                   href="javascript:void(0);" class="btn btn-icon btn-rounded"><i class="fa fa-twitter"></i></a>

                                <a onclick="popupCenter('https://twitter.com/share?url={{Request::url()}}', '',600,400);"
                                   href="javascript:void(0);" class="btn btn-icon btn-rounded">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                </a>
                        </div>

                        </div>














                    </div>



                </div>

            </div>

        </div>
    </section>


@endsection