@extends('layout.tour')

@section('content')


    <div class="container m-t-xxl">


    <div class="panel b box-shadow wrapper-lg">
        <div class="row">
            <div class="col-md-3">

                <!-- nav -->
                <nav class="navi clearfix  wrapper-sm">
                    <ul class="nav">


                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="">Мой профиль</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-heart"></i>
                                <span>Мне нравиться</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-tag"></i>
                                <span>Мои закладки</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-location-pin"></i>
                                <span>Мои маршруты</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <i class="icon-speech"></i>
                                <span>Мои комментарии</span>
                            </a>
                        </li>


                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="">Общие настройки</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-wrench"></i>
                                <span>Настройка</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-lock-open"></i>
                                <span>Смена пароля</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <i class="icon-wallet"></i>
                                <span>Платежи</span>
                            </a>
                        </li>


                    </ul>


                    <ul class="nav">

                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="">Организация</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-list"></i>
                                <span>Список</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-pencil"></i>
                                <span>Создать</span>
                            </a>
                        </li>


                    </ul>


                    <ul class="nav">

                        <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                            <span class="">Управление</span>
                        </li>


                        <li>
                            <a href="#">
                                <i class="icon-info"></i>
                                <span>Помощь</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/logout')}}">
                                <i class="icon-logout"></i>
                                <span>Выйти</span>
                            </a>
                        </li>


                    </ul>


                </nav>
                <!-- nav -->

            </div>

            <div class="col-md-9  b-l b-light">

                @yield('accounts')


            </div>
        </div>
    </div>
</div>




@endsection
