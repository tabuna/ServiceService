<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bounce</title>
    <link href="/dist/css/orchid.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
</head>


<body>





<!-- header -->
<header id="header" class="navbar bg-white-only b-b box-shadow">
        <div class="navbar-header" style="width: auto">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/orchid/" class="navbar-brand v-center" style="    padding: 15px 15px!important;">
                <img src="http://orchid.ga/dist/img/logo.svg" height="20px" class="m-r-sm" alt="Bounce">
            </a>
        </div>
        <div class="collapse navbar-collapse" style="margin-left: auto">

            <ul class="nav navbar-nav navbar-left">
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


            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-target="#modalSeachIn" data-toggle="modal"><i class="ion-ios-search m-r-xs"></i>Поиск</a>
                </li>
                <li>
                    <a href="#"><i class="icon-globe m-r-xs"></i> Ru/En</a>
                </li>
                <li>
                    <a href="#"><i class="icon-login m-r-xs"></i> Вход</a>
                </li>
            </ul>


        </div>
</header>
<!-- / header -->
<div id="content" class="">



    @yield('content')




</div>



<!-- footer -->
<footer id="footer" class="b-t">
    <div class="bg-white-only box-shadow-lg">
        <div class="container">
            <div class="container-fluid">
                <div class="row padder-v">
                    <div class="col-md-3 vi-col-4">
                        <a class="wrapper-sm v-center">
                            <i class="icon-phone fa-2x m-r-xs"></i>
                            Телефон: (4742) 47-23-23
                        </a>
                    </div>
                    <div class="col-md-3 hidden-xs vi-hide">
                        <a class="wrapper-sm v-center" role="button" data-toggle="collapse" href="#collapse-recommended-links" aria-expanded="false" aria-controls="collapse-recommended-links">
                            <i class="icon-info fa-2x  m-r-xs"></i>
                            Полезные ссылки
                        </a>
                    </div>
                    <div class="col-md-3 vi-col-4">
                        <a class="wrapper-sm click-visually v-center" data-toggle="visually-impaired" data-target="#html">
                            <i class="icon-eye fa-2x m-r-xs"></i>
                            Версия для слабовидящих
                        </a>
                    </div>





                    <div class="col-md-3 vi-hide">
                        <p>
                            <a href="https://vk.com/lipsobtur" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-vk"></i></a>

                            <a href="http://ok.ru/group/57780474019888" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-odnoklassniki"></i></a>

                            <a href="#" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-facebook"></i></a>

                            <a href="#" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-google-plus"></i></a>

                            <a href="https://twitter.com/lipsobtur" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-twitter"></i></a>

                            <a href="#" target="_blank" class="btn btn-icon btn-rounded btn-grey">
                                <i class="fa fa-rss" aria-hidden="true"></i>
                            </a>

                        </p>

                    </div>

                </div>


            </div>


            <div class="collapse" id="collapse-recommended-links" aria-expanded="false">
                <div class="row m-n b-t padder-v">


                    <div class="col-md-12 m-b-md">
                        <div class="pos-rlt">
                            <a class="wrapper-sm  top-right text-muted" role="button" data-toggle="collapse" href="#collapse-recommended-links" aria-expanded="false" aria-controls="collapse-recommended-links">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>

                        <p class="h3 font-thin ">Наши <span class="text-danger">Партнёры</span></p>
                        <div class="col-md-6 pull-in m-t-md">
                            <small>
                                Вы оплачиваете товар после его получения в почтовом отделении или курьеру при доставке. Таким образом, вы снижаете риск обмана - никаких предоплат не требуется!
                            </small>
                        </div>
                    </div>
                    <div class="col-md-12">


                        <div class="row">
                            <div class="col-md-2">
                                <a href="" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Федеральное агентство по туризму. Национальный туристический портал" data-original-title="" title="">
                                    <img src="/img/tour/partner/1.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Календарь событий Липецкой области" data-original-title="" title="">
                                    <img src="/img/tour/partner/2.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Центр событийного туризма проводит областной конкурс «Я живу в Липецкой области!»" data-original-title="" title="">
                                    <img src="/img/tour/partner/3.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Глянцевый журнал о внутреннем и въездном туризме. Репортажи о путешествиях, туристические новости, интервью, фотографии уникальных мест России и стран СНГ." data-original-title="" title="">
                                    <img src="/img/tour/partner/4.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Автотуристский кластер «Задонщина»" data-original-title="" title="">
                                    <img src="/img/tour/partner/5.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="По городам и весям ТРК Липецкое время" data-original-title="" title="">
                                    <img src="/img/tour/partner/6.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</footer>
<!-- / footer -->


</body>


<script src="/dist/js/orchid.js"></script>
</html>