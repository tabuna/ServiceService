<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="/dist/css/orchid.css" rel="stylesheet" type="text/css">
</head>


<body>

<div class="app">

    <nav class="navbar navbar-default collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" class="img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo"
                      data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm bg-light no-border  padder"
                                   placeholder="Search video...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light"><i class="fa fa-search"></i></button>
              </span>
                        </div>
                    </div>
                </form>


                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
                            <i class="icon-bell fa-fw"></i>
                            <span class="visible-xs-inline">Notifications</span>
                            <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                        </a>
                        <!-- dropdown -->
                        <div class="dropdown-menu w-xl animated fadeInUp">
                            <div class="panel bg-white">
                                <div class="panel-heading b-light bg-light">
                                    <strong>You have <span>2</span> notifications</strong>
                                </div>
                                <div class="list-group">
                                    <a href="" class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                                    </a>
                                    <a href="" class="list-group-item">
                    <span class="clear block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                                    </a>
                                </div>
                                <div class="panel-footer text-sm">
                                    <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                                    <a href="#notes" data-toggle="class:show animated fadeInRight">See all the
                                        notifications</a>
                                </div>
                            </div>
                        </div>
                        <!-- / dropdown -->
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" aria-expanded="false">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
                            <span class="hidden-sm hidden-md">John.Smith</span>

                        </a>
                        <!-- dropdown -->
                        <ul class="dropdown-menu animated fadeInRight w">
                            <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                                <div>
                                    <p>300mb of 500mb used</p>
                                </div>
                                <div class="progress progress-xs m-b-none dker">
                                    <div class="progress-bar progress-bar-info" data-toggle="tooltip"
                                         data-original-title="50%" style="width: 50%"></div>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <span class="badge bg-danger pull-right">30%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a ui-sref="app.page.profile">Profile</a>
                            </li>
                            <li>
                                <a ui-sref="app.docs">
                                    <span class="label bg-info pull-right">new</span>
                                    Help
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a ui-sref="access.signin">Logout</a>
                            </li>
                        </ul>
                        <!-- / dropdown -->
                    </li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <aside id="aside" class="app-aside hidden-xs b-r">
        <div class="aside-wrap">
            <div class="navi-wrap">

                <!-- nav -->
                <nav class="navi clearfix  wrapper-sm">
                    <ul class="nav">

                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="text-danger">EXPLODE</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-screen-desktop icon"></i>
                                <span>Wath to Wath</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-tag icon"></i>
                                <span>Recomended</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <i class="icon-layers icon"></i>
                                <span>History</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <i class="icon-wallet icon"></i>
                                <span>Subscriptions</span>
                                <b class="label bg-danger pull-right">2</b>
                            </a>
                        </li>


                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="text-danger">PLAYLISTITS</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-heart icon"></i>
                                <span>Like Videos</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-star icon"></i>
                                <span>Favorites</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-clock icon"></i>
                                <span>Wath Later</span>
                            </a>
                        </li>



                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="text-danger">SUBCRIPION</span>
                        </li>



                        <li>
                            <a href="#">
                                <div class="thumb-xxs m-r-xs">
                                    <img src="/img/a3.jpg"
                                         alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                </div>
                                <span>Markest Casual</span>
                            </a>
                        </li>



                        <li>
                            <a href="#">
                                <div class="thumb-xxs m-r-xs">
                                    <img src="/img/a4.jpg"
                                         alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                </div>
                                <span>Markest Casual</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <div class="thumb-xxs m-r-xs">
                                    <img src="/img/a5.jpg"
                                         alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                </div>
                                <span>Markest Casual</span>
                            </a>
                        </li>



                        <li>
                            <a href="#">
                                <div class="thumb-xxs m-r-xs">
                                    <img src="/img/a6.jpg"
                                         alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                </div>
                                <span>Markest Casual</span>
                            </a>
                        </li>


                    </ul>

                </nav>
                <!-- nav -->

            </div>
        </div>
    </aside>


    <div id="content" class="app-content box-shadow bg-white-only" role="main">

        <div class="app-content-body ">
            <div class="container-fluid m-t">

                <section class="padder-lg">
                    <header>
                        <h1 class="font-thin h2 m-t m-b">Recommeded</h1>
                    </header>

                    <div class="row">

                        <div class="col-md-6  col-xs-6">

                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>
                            </article>

                        </div>

                        <div class="col-md-6 col-xs-6">


                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                            </article>

                        </div>

                    </div>
                </section>


                <!--Just it-->
                <section class="padder-lg">
                    <header>
                        <h1 class="font-thin h2 m-t m-b">Video</h1>
                    </header>

                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="item">
                                <div class="pos-rlt">
                                    <div class="item-overlay opacity r r-2x bg-black">
                                        <div class="center text-center m-t-n">
                                            <a href="#video">
                                                <i class="icon-control-play i-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#video" title="#">
                                        <img src="/img/video/1.jpg" class="r r-2x img-full " alt="#">
                                    </a>
                                </div>

                                <div class="m-t-sm m-b-lg item-desc">
                                    <a href="#video" title="#" class="text-ellipsis">Taylor Swift – Shake It Off</a>
                                    <a href="#author">
                                        <small class="text-muted">By Majety Castical</small>
                                    </a>
                                </div>
                            </article>
                        </div>

                    </div>
                </section>
                <!--Just it-->


            </div>


        </div>
    </div>



</div>





</div>




<!-- footer -->
<footer id="footer" class="app-footer" role="footer">



    <div class="wrapper-md bg-light dker">


        <div class="col-xs-8">
            <ul class="list-inline">
                <li><a href="#">Sales</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Job</a></li>
            </ul>
        </div>
        <div class="col-xs-4 text-right">
            YouTube © 2016
        </div>


    </div>
</footer>
<!-- / footer -->



</body>


<script src="/dist/js/orchid.js"></script>
</html>