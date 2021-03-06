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
<footer id="footer" class="b-t">
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