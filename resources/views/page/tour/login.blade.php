@extends('layout.tour')

@section('content')






    <div class="container-fluid">
        <div class="row paralax-auth v-center  box-shadow">


            <div class="container padder-v">


                <div class="col-md-10 col-md-offset-1">
                <div class="col-md-7">

                    <div class="panel wrapper-xl b box-shadow-lg  padder-lg" data-mh="auth">

                        <p class="h4 font-thin padder-v text-center">Туристско-информационные
                            центры Липецкой области</p>


                        <form action="/auth/login" method="post" name="form">
                            <div class="m-t-md m-b-md">
                                <div class="form-group form-group-default m-t-md">
                                    <label class="text-sm text-left">Адрес электронной почты</label>
                                    <input type="email" required placeholder="Введите Email" class="form-control">
                                </div>
                            </div>

                            <div class="m-t-md m-b-md">
                                <div class="form-group form-group-default m-t-md">
                                    <label class="text-sm text-left">Пароль</label>
                                    <input type="password" placeholder="Введите пароль" required class="form-control">
                                </div>
                            </div>


                            <div class="btn-group btn-group-justified m-b-md m-t-md">
                                <a href="" class="btn btn-default"><i class="fa fa-vk"></i> Вконтакте</a>
                                <a href="" class="btn btn-default"><i class="fa fa-facebook-official"></i> Facebook</a>
                                <a href="" class="btn btn-default"><i class="fa fa-odnoklassniki"></i> Однокласники</a>
                            </div>


                            <div class="form-group">
                                <div class="checkbox">
                                    <label class="i-checks">
                                        <input type="checkbox" checked=""><i></i> Запомнить меня
                                    </label>
                                </div>
                            </div>



                            {!! csrf_field() !!}


                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <p class="m-t m-b">
                                        <a class="text-muted" href="#lostpassword">Забыли пароль?</a>
                                    </p>



                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn  btn-outline btn-danger btn-rounded">Войти на
                                        сайт
                                    </button>
                                </div>
                            </div>




                        </form>

                    </div>


                </div>


                <div class="col-md-5">

                    <div class="panel wrapper-xl b box-shadow-lg  padder-lg" data-mh="auth">


                        <i class="icon-info text-danger icon-title"></i>
                        <p class="h4 font-thin padder-v text-center">Зарегистрируйся сейчас бесплатно</p>

                        <div class="padder">
                            <ul class="list-unstyled">
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Смотри историю посещений
                                </li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Узнавай результаты
                                    анализов
                                </li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Сохраняй свои записи
                                </li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Получай новости</li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Обращаяся за вопросами
                                </li>
                            </ul>
                        </div>

                        <button type="submit" class="btn btn-default btn-void-primary btn-block">Регистрация
                        </button>

                    </div>


                </div>
                    </div>


            </div>


        </div>
    </div>







@endsection