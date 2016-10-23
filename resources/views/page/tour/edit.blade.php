@extends('page.tour.accounts')

@section('accounts')


    <div class="wrapper-md">


        <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">


            <div class="fileinput fileinput-exists thumb-lg pull-left m-r-md" data-provides="fileinput">

                <div class="btn-file">
                    <div class="fileinput-preview  thumb-lg pull-left m-r-md">
                        <img src="https://pp.vk.me/c626421/v626421062/232c7/gVAQsfE8pSY.jpg" alt="..."
                             class="img-circle">
                    </div>

                    <input type="file" name="avatar">
                </div>

            </div>


            <div class="clear m-b">
                <div class="m-b m-t-sm">
                    <span class="h3 text-black">Александр Черняев</span>
                    <small class="m-l">tabuna</small>
                </div>
                <p class="m-b">
                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i
                                class="fa fa-google-plus"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i
                                class="fa fa-vk"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i
                                class="fa fa-odnoklassniki"></i>
                    </a>
                </p>
            </div>


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif


            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control form-control-grey" value="" placeholder="Ваше полное имя">
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control form-control-grey" value="" placeholder="Электронная почта">
                </div>
            </div>

            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Псевдоним</label>
                <div class="col-sm-10">
                    <input type="text" name="nickname" class="form-control form-control-grey" value=""
                           placeholder="Псевдоним">
                </div>
            </div>

            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Веб-сайт</label>
                <div class="col-sm-10">
                    <input type="url" name="website" class="form-control form-control-grey" value=""
                           placeholder="Личный веб-сайт">
                </div>
            </div>


            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="tel" name="phone" class="form-control form-control-grey" value="" placeholder="Номер телефона">
                </div>
            </div>


            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">О себе</label>
                <div class="col-sm-10">
                    <textarea class="form-control form-control-grey no-resize" rows="6" name="about"
                              placeholder="Небольшой рассказ о себе"></textarea>
                </div>
            </div>


            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                <div class="col-sm-offset-2 col-sm-10">
                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="sex" value="1" >
                        <i></i>
                        Мужчина
                    </label>

                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="sex" value="0" >
                        <i></i>
                        Женщина
                    </label>

                </div>
            </div>


            <div class="form-group{{ $errors->has('notification') ? ' has-error' : '' }}">
                <div class="col-sm-offset-2 col-sm-10">
                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="notification" value="1">
                        <i></i>
                        Подписаться на уведомления
                    </label>

                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="notification" value="0">
                        <i></i>
                        Не присылать уведомления
                    </label>

                </div>
            </div>


            {!! csrf_field() !!}
            <input name="_method" value="PUT" type="hidden">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-right">
                    <button type="submit" class="btn btn-outline btn-danger btn-rounded">Сохранить</button>
                </div>
            </div>
        </form>


    </div>








@endsection