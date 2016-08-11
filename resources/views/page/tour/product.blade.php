@extends('layout.tour')



@section('content')
<section class="container">
    <div class="row">
        <div class="col-sm-2 page-sidebar">

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
                                        <i class="fa fa-desktop icon"></i>
                                        <span>Wath to Wath</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-tag icon"></i>
                                        <span>Recomended</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#">
                                        <i class="fa fa-history icon"></i>
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
        </div>
        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item active">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">First Product</a>
                            </h4>
                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$64.99</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$74.99</h4>
                            <h4><a href="#">Third Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">31 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$84.99</h4>
                            <h4><a href="#">Fourth Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">6 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$94.99</h4>
                            <h4><a href="#">Fifth Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">18 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <h4><a href="#">Like this template?</a>
                    </h4>
                    <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                    <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection