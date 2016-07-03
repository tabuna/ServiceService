@extends('layout.app')

@section('content')



    <div class="container m-t-md">

        <div class="page-header">
            <h1>Example page header
                <small>Subtext for header</small>
            </h1>
        </div>



        <div class="col-md-8 col-md-offset-2 padder-v">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <img alt="pic" src="img/team/richard.png" class="img-responsive center">
                    <div class="text-center padder-v">
                        <p class="h4 font-thin text-danger">Richard Hendricks</p>
                        <small class="text-muted">CEO</small>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <img alt="pic" src="img/team/jared.png" class="img-responsive center">
                    <div class="text-center padder-v">
                        <p class="h4 font-thin text-danger">Jared (Donald) Dunn</p>
                        <small class="text-muted">Head of Business Development</small>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <img alt="pic" src="img/team/erlich.png" class="img-responsive center">
                    <div class="text-center padder-v">
                        <p class="h4 font-thin text-danger">Erlich Bachman</p>
                        <small class="text-muted">Majority Investor</small>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <img alt="pic" src="img/team/gilfoyle.png" class="img-responsive center">
                    <div class="text-center padder-v">
                        <p class="h4 font-thin text-danger">Bertram Gilfoyle</p>
                        <small class="text-muted">Senior Systems Architect</small>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <img alt="pic" src="img/team/dinesh.png" class="img-responsive center">
                    <div class="text-center padder-v">
                        <p class="h4 font-thin text-danger">Dinesh Chugtai</p>
                        <small class="text-muted">Senior Programmer</small>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <img alt="pic" src="img/team/bighead.png" class="img-responsive center">
                    <div class="text-center padder-v">
                        <p class="h4 font-thin text-danger">Nelson "Big Head" Bighetti</p>
                        <small class="text-muted">Majority Investor</small>
                    </div>
                </div>

            </div>
        </div>


        <!--end of row-->
    </div>





    <div class="container">
        <div class="row padder-v">
            <div class="col-md-6">
                <h4 class="text-dark font-bold m-b-lg">Passion About Work</h4>
                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="small"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="small"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div> <!-- end col-md-6 -->

            <div class="col-sm-6">
                <h4 class="text-dark font-bold m-b-lg">Save your time with the great tools</h4>
                <ul class="list-unstyled  m-t-xl">
                    <li>
                        <i class="fa fa-check pull-left text-lg m-r m-t-sm"></i>
                        <p class="clear m-b-lg"><strong>Using Less</strong>, Angulr's CSS is built on Less, a preprocessor with additional functionality like variables, mixins, and functions for compiling CSS. </p>
                    </li>
                    <li>
                        <i class="fa fa-check pull-left text-lg m-r m-t-sm"></i>
                        <p class="clear m-b-lg"><strong>Grunt Task</strong>, Angulr using Grunt to automate development tasks, like compiling less to css, concatenating and minifying js files...</p>
                    </li>
                    <li>
                        <i class="fa fa-check pull-left text-lg m-r m-t-sm"></i>
                        <p class="clear m-b-lg"><strong>Bower Package</strong>, fetching and installing packages from all over, finding, downloading, and saving the stuff you’re looking for.</p>
                    </li>
                </ul>
            </div>
        </div> <!-- end row -->
    </div>













































@endsection