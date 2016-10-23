@extends('layout.tour')



@section('content')


    <div class="container">

            <div class="row">
                <div class="col-sm-3 panel box-shadow">

                    <aside id="aside" class="app-aside hidden-xs">
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
                                                    <img src="/img/a3.jpg" alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                                </div>
                                                <span>Markest Casual</span>
                                            </a>
                                        </li>



                                        <li>
                                            <a href="#">
                                                <div class="thumb-xxs m-r-xs">
                                                    <img src="/img/a4.jpg" alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                                </div>
                                                <span>Markest Casual</span>
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#">
                                                <div class="thumb-xxs m-r-xs">
                                                    <img src="/img/a5.jpg" alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                                </div>
                                                <span>Markest Casual</span>
                                            </a>
                                        </li>



                                        <li>
                                            <a href="#">
                                                <div class="thumb-xxs m-r-xs">
                                                    <img src="/img/a6.jpg" alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
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



                    <h5 class="font-bold">Categories</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="">
                                <span class="badge pull-right">15</span>
                                Photograph
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="">
                                <span class="badge pull-right">30</span>
                                Life style
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="">
                                <span class="badge pull-right">9</span>
                                Food
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="">
                                <span class="badge pull-right">4</span>
                                Travel world
                            </a>
                        </li>
                    </ul>
                    <div class="tags m-b-lg l-h-2x">
                        <a href="" class="label bg-primary">Bootstrap</a> <a href="" class="label bg-primary">Application</a> <a href="" class="label bg-primary">Apple</a> <a href="" class="label bg-primary">Less</a> <a href="" class="label bg-primary">Theme</a> <a href="" class="label bg-primary">Wordpress</a>
                    </div>
                    <h5 class="font-bold">Recent Posts</h5>
                    <div>
                        <div>
                            <a class="pull-left thumb thumb-wrapper m-r">
                                <img src="img/b0.jpg">
                            </a>
                            <div class="clear">
                                <a href="" class="font-semibold text-ellipsis">Bootstrap 3: What you need to know</a>
                                <div class="text-xs block m-t-xs"><a href="">Travel</a> 2 minutes ago</div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div>
                            <a class="pull-left thumb thumb-wrapper m-r">
                                <img src="img/b1.jpg">
                            </a>
                            <div class="clear">
                                <a href="" class="font-semibold text-ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                <div class="text-xs block m-t-xs"><a href="">Design</a> 2 hours ago</div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div>
                            <a class="pull-left thumb thumb-wrapper m-r">
                                <img src="img/b2.jpg">
                            </a>
                            <div class="clear">
                                <a href="" class="font-semibold text-ellipsis">Sed diam nonummy nibh euismod tincidunt ut laoreet</a>
                                <div class="text-xs block m-t-xs"><a href="">MFC</a> 1 week ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 b-l">
                    <ol class="breadcrumb">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Онас</a></li>
                        <li class="active">Управляющая компания</li>
                    </ol>
                    <div class="wrapper">
                    <div class="blog-post">
                        <div class="panel">
                            <div>
                                <img src="img/c0.jpg" class="img-full">
                            </div>
                            <div class="wrapper-lg">
                                <h2 class="m-t-none"><a href="">7 things you need to know about the flat design</a></h2>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat.
                                        <br><br>
                                        Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                                </div>
                                <div class="line line-lg b-b b-light"></div>
                                <div class="text-muted">
                                    <i class="fa fa-user text-muted"></i> by <a href="" class="m-r-sm">Admin</a>
                                    <i class="fa fa-clock-o text-muted"></i> Feb 20, 2013
                                    <a href="" class="m-l-sm"><i class="fa fa-comment-o text-muted"></i> 2 comments</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="wrapper-lg">
                                <h2 class="m-t-none"><a href="">Bootstrap 3: What you need to know</a></h2>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat.
                                    </p>
                                    <h3>Html5 and CSS3</h3>
                                    <p>
                                        Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                                </div>
                                <div class="line line-lg b-b b-light"></div>
                                <div class="text-muted">
                                    <i class="fa fa-user text-muted"></i> by <a href="" class="m-r-sm">Admin</a>
                                    <i class="fa fa-clock-o text-muted"></i> Feb 15, 2013
                                    <a href="" class="m-l-sm"><i class="fa fa-comment-o text-muted"></i> 4 comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center m-t-lg m-b-lg">
                        <ul class="pagination pagination-md">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                        </div>
                </div>
            </div>
        </div>


@endsection