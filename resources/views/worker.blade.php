@extends('layout.app')

@section('content')




    <div class="container-fluid">

        <div class="row b-b box-shadow">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <ol class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Онас</a></li>
                            <li class="active">Управляющая компания</li>
                        </ol>


                        <div class="page-header">
                            <h1>Управляющая компания <small>Сведения</small></h1>
                        </div>


                        <p class="text-justify">
                            Управляющая компания – Открытое акционерное общество «Особая экономическая зона промышленно-производственного типа «Липецк».
                        </p>


                        <p class="text-justify">
                            Дополнительное Соглашение № С-102-ОС/Д 14 от 03 апреля 2013 г. к Соглашению об управлении особой экономической зоной промышленно-производственного типа, созданной на территории Грязинского района Липецкой области, от 30 августа 2012 г. № С-305-ОС/Д 25.
                        </p>


                    </div>

                    <div class="col-md-6">

                        <div class='pageOption pull-right'>
                            <a href='#' class='option'>
                                <img src='/img/hero27.jpg'>
                            </a>
                        </div>
                    </div>



                </div>
            </div>




        </div>

    </div>






{{--
    <section class="container-fluid">
        <!-- Наши достоинства -->
        <div class="row">
            <div class="paralax-3  parallax-main text-center v-center" data-type="background" data-speed="10">
                <div class="container padder-v text-white">


                    <div class="row">
                        <div class="col-md-7 col-sm-9">
                            <h2>Beautiful Web Components</h2>
                            <p class="lead">
                                Pillar comes packed with flexible content blocks and Variant Page Builder - this makes building your perfect layout easier than ever before.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <div class="feature">
                                <h6>Beautifully Responsive</h6>
                                <p>
                                    Every one of Pillar’s stylish blocks are fully responsive,meaning that your site shines - regardless of the device your users are viewing from.
                                </p>
                            </div>
                            <div class="feature">
                                <h6>Six Months Free Support</h6>
                                <p>
                                    Each purchase of Pillar comes with six months of our much-lauded customer support. We have our own dedicated support forum setup to help you.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
--}}

    <div class="container m-t-xxl">
        <div class="row row-sm text-center">
            <div class="col-md-3">
                <div class="panel  box-shadow padder-v item">
                    <div class="h1 text-danger font-thin h1">521</div>
                    <span class="text-muted text-xs">Клиентов</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel  box-shadow padder-v item">
                    <div class="h1 text-danger font-thin h1">521</div>
                    <span class="text-muted text-xs">Клиентов</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel  box-shadow padder-v item">
                    <div class="h1 text-danger font-thin h1">521</div>
                    <span class="text-muted text-xs">Клиентов</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel  box-shadow padder-v item">
                    <div class="h1 text-danger font-thin h1">521</div>
                    <span class="text-muted text-xs">Клиентов</span>
                </div>
            </div>
        </div>
    </div>


@endsection