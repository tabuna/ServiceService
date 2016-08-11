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
            <a href="/lawyer/" class="navbar-brand m-r-lg v-center font-normal">
                <img src="/img/logo10.png" class="m-r-sm" alt="Адвокаты">
               <span class="m-l-sm">Адвокаты</span>
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/lawyer/about">Об Адвокате</a></li>
                <li><a href="/lawyer/news">Новости</a></li>
                <li><a href="/lawyer/post">Услуги</a></li>
                <li><a href="/lawyer/team">Медиаторы</a></li>
                <li><a href="/lawyer/contact">Контакты</a></li>

                <li>


                    <form class="navbar-form navbar-form-sm navbar-left w-sm" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm bg-light no-border rounded padder"
                                       placeholder="Поиск...">
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
                    <li><a href="/lawyer/about">Об Адвокате</a></li>
                    <li><a href="/lawyer/clients">Новости</a></li>
                    <li><a href="/lawyer/worker">Услуги</a></li>
                    <li><a href="/lawyer/contact">Медиаторы</a></li>
                    <li><a href="/lawyer/contact">Контакты</a></li>
                </ul>
            </div>
            <div class="col-xs-4 text-right">
                <span class="m-r-xs">Адвокаты</span> <i class="fa fa-copyright"></i> 2016
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->


</body>


<script src="/dist/js/orchid.js"></script>
</html>