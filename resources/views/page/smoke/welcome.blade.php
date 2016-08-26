@extends('layout.smoke')



@section('content')




    <section>


        <div class="carousel slide" id="carousel-example-captions" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img alt="900x500"
                                       src="/img/hero5.jpg"
                                       class="w-full" style="max-height: 350px">
                    <div class="carousel-caption"><h3>First slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p></div>
                </div>

                <div class="item"><img alt="900x500"
                                              src="/img/hero7.jpg"
                                              class="w-full" style="max-height: 350px">
                    <div class="carousel-caption"><h3>First slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p></div>
                </div>

                <div class="item"><img alt="900x500"
                                              src="/img/hero8.jpg"
                                              class="w-full" style="max-height: 350px">
                    <div class="carousel-caption"><h3>First slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p></div>
                </div>
            </div>
            <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev"> <span
                        class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>
            </a> <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span
                        class="sr-only">Next</span> </a></div>


    </section>









    <div class="b-t b-light">

        <div class="row grid">
            <div class="col-md-3 no-padder">
                <figure class="effect-lily">
                    <img src="/img/hero1.jpg" class="img-responsive" alt="img33">
                    <figcaption>
                        <h2>Качественные <span>Девайсы</span></h2>
                        <p class="padder-v">Таким образом новая модель организационной деятельности в значительной степени обуславливает создание модели развития.</p>
                        <a href="#">Смотреть всё</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 no-padder">
                <figure class="effect-lily">
                    <img src="/img/hero2.jpg" alt="img33">
                    <figcaption>
                        <h2>Вкусные <span>Жидкости</span></h2>
                        <p class="padder-v">Таким образом новая модель организационной деятельности в значительной степени обуславливает создание модели развития.</p>
                        <a href="#">Смотреть всё</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 no-padder">
                <figure class="effect-lily">
                    <img src="/img/hero3.jpg" alt="img33">
                    <figcaption>
                        <h2>Стабильные <span>Основы</span></h2>
                        <p class="padder-v">Таким образом новая модель организационной деятельности в значительной степени обуславливает создание модели развития.</p>
                        <a href="#">Смотреть всё</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 no-padder">
                <figure class="effect-lily">
                    <img src="/img/hero4.jpg" alt="img33">
                    <figcaption>
                        <h2>Прикольные <span>Аксессуары</span></h2>
                        <p class="padder-v">Таким образом новая модель организационной деятельности в значительной степени обуславливает создание модели развития.</p>
                        <a href="#">Смотреть всё</a>
                    </figcaption>
                </figure>
            </div>

        </div>

    </div>






@endsection




