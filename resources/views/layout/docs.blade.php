@extends('layout.classic')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-sm-2 page-sidebar">

                <aside id="aside" class="app-aside hidden-xs b-r">
                    <div class="aside-wrap">
                        <div class="navi-wrap">

                            <!-- nav -->
                            <nav class="navi clearfix  wrapper-sm">
                                <ul class="nav">

                                    <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                        <span class="text-danger">CSS</span>
                                    </li>
                                    <li>
                                        <a href="/ui/type">
                                            <i class="fa fa-desktop icon"></i>
                                            <span>Typography</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/ui/table">
                                            <i class="fa fa-tag icon"></i>
                                            <span>Tables</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="/ui/buttons">
                                            <i class="fa fa-history icon"></i>
                                            <span>Buttons</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="/ui/images">
                                            <i class="icon-wallet icon"></i>
                                            <span>Images</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/ui/grid">
                                            <i class="icon-wallet icon"></i>
                                            <span>Grid system</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/ui/helps">
                                            <i class="icon-wallet icon"></i>
                                            <span>Helper classes</span>
                                        </a>
                                    </li>


                                    <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                        <span class="text-danger">Components</span>
                                    </li>


                                    <li class="active"><a href="#glyphicons">Glyphicons</a></li>

                                    <li><a href="#dropdowns">Dropdowns</a></li>
                                    <li><a href="#btn-groups">Button groups</a></li>
                                    <li><a href="#btn-dropdowns">Button dropdowns</a></li>
                                    <li><a href="#input-groups">Input groups</a></li>
                                    <li><a href="#nav">Navs</a></li>
                                    <li><a href="#navbar">Navbar</a></li>
                                    <li><a href="#breadcrumbs">Breadcrumbs</a></li>
                                    <li><a href="#pagination">Pagination</a></li>
                                    <li><a href="#labels">Labels</a></li>
                                    <li><a href="#badges">Badges</a></li>
                                    <li><a href="#jumbotron">Jumbotron</a></li>
                                    <li><a href="#page-header">Page header</a></li>
                                    <li><a href="#thumbnails">Thumbnails</a></li>
                                    <li><a href="#alerts">Alerts</a></li>
                                    <li><a href="#progress">Progress bars</a></li>
                                    <li><a href="#media">Media object</a></li>
                                    <li><a href="#list-group">List group</a></li>
                                    <li><a href="#panels">Panels</a></li>
                                    <li><a href="#responsive-embed">Responsive embed</a></li>
                                    <li><a href="#wells">Wells</a></li>


                                    <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                        <span class="text-danger">JavaScript</span>
                                    </li>


                                    <li class=""><a href="#js-overview">Overview</a></li>
                                    <li><a href="#transitions">Transitions</a></li>
                                    <li><a href="#modals">Modal</a></li>
                                    <li><a href="#dropdowns">Dropdown</a></li>
                                    <li><a href="#scrollspy">Scrollspy</a></li>
                                    <li><a href="#tabs">Tab</a></li>
                                    <li><a href="#tooltips">Tooltip</a></li>
                                    <li><a href="#popovers">Popover</a></li>
                                    <li><a href="#alerts">Alert</a></li>
                                    <li><a href="#buttons">Button</a></li>
                                    <li><a href="#collapse">Collapse</a></li>
                                    <li><a href="#carousel">Carousel</a></li>
                                    <li><a href="#affix">Affix</a></li>


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

            <div class="col-sm-10 page-content">
                <div class="wrapper-md">


                    @yield('ui')


                </div>
            </div>

        </div>

    </div>




@endsection