@extends('layout.sex-type')



@section('content')



    <div class="container-fluid">
        <div class="row paralax-auth v-center  box-shadow">


            <div class="container padder-v">


                <div class="col-md-4">
                    <div class="wrapper cart-titile bg-dark text-center b box-shadow padder-lg">
                        <p class="h1 font-thin m-b-md">Our <span class="text-danger">Services</span></p>
                        <i class="fa fa-users fa-4x padder-v text-white"></i>
                        <p class="small">Для входа в личный кабинет введите
                            номер вашего мобильного телефона и пароль</p>
                    </div>

                    <div class="cart-body bg-white wrapper-lg b box-shadow">

                        <form action="/auth/login" method="post" name="form">


                            <div class="form-group  form-group-default">
                                <label class="small">First name</label>
                                <input type="text" class="form-control" placeholder="Sheldon" data-mask="+ 9-999-999-99-99">
                            </div>

                            <div class="m-t-md m-b-md">
                                <input type="text" placeholder="Телефон" name="phone" class="form-control  rounded" required="" data-mask="+ 9-999-999-99-99">
                            </div>

                            <div class="m-t-md m-b-md">
                                <input type="password" name="password" placeholder="Пароль" class="form-control rounded" required="">
                            </div>

                            <input type="hidden" name="_token" value="bakoViTD5qAAjJ1BVQfWjCgoE8r7fZDKvtslNtYI">

                            <button type="submit" class="m-t-md btn  btn-danger btn-void btn-block">Войти
                            </button>
                        </form>
                        <p class="text-center m-t m-b"><a>Забыли пароль?</a></p>

                    </div>


                </div>


                <div class="col-md-4">
                    <div class="wrapper cart-titile bg-dark text-center b box-shadow padder-lg">
                        <p class="h1 font-thin m-b-md">Our <span class="text-danger">Services</span></p>
                        <i class="fa fa-users fa-4x padder-v text-white"></i>
                        <p class="small">Просто получите пароль на ваш мобильный телефон и начните пользоваться личным</p>
                    </div>

                    <div class="cart-body bg-white wrapper-lg b box-shadow">

                        <p class="text-center padder-v">
                            Введите номер мобильного телефона, указанный вами при посещении медицинского центра Здоровье Нации
                        </p>


                        <form action="/auth/login" method="post" name="form">
                            <div class="form-group">
                                <input type="text" placeholder="Телефон" name="phone" class="form-control  rounded" required="" data-mask="+ 9-999-999-99-99">
                            </div>

                            <input type="hidden" name="_token" value="bakoViTD5qAAjJ1BVQfWjCgoE8r7fZDKvtslNtYI">

                            <button type="submit" class="btn  btn-danger btn-void btn-block">Получить пароль
                            </button>
                        </form>

                    </div>


                </div>


                <div class="col-md-4">
                    <div class="wrapper cart-titile bg-dark text-center b box-shadow padder-lg">
                        <p class="h1 font-thin m-b-md">Our <span class="text-danger">Services</span></p>
                        <i class="fa fa-users fa-4x padder-v text-white"></i>
                        <p class="small">Зарегистрируйтесь, чтобы пользоваться всеми преимуществами личного кабинета</p>
                    </div>

                    <div class="cart-body bg-white wrapper-lg b box-shadow">

                        <div class="padder">
                            <ul class="list-unstyled">
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Смотри историю посещений
                                </li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Узнавай результаты
                                    анализов
                                </li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Сохраняй свои записи</li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Получай новости</li>
                                <li class="m-xs"><span class="fa fa-check text-success"></span> Обращаяся за вопросами
                                </li>
                            </ul>
                        </div>

                        <button type="submit" class="btn  btn-danger btn-void btn-block">Регистрация
                        </button>
                        <p class="text-center m-t m-b"><a>Выслать код подтверждения повторно</a></p>

                    </div>


                </div>




            </div>


        </div>
    </div>




@endsection