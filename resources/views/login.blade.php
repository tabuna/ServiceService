@extends('layout.app')

@section('content')


    <div class="container">

        <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
        </div>

    <div class="row wrapper-lg">
    <div class="col-xs-6">
        <div class="well">
            <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                    <span class="help-block"></span>
                </div>
                <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="remember"> Remember login
                    </label>
                    <p class="help-block">(if this is a private computer)</p>
                </div>
                <button type="submit" class="btn btn-success btn-block">Login</button>
                <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
            </form>
        </div>
    </div>
    <div class="col-xs-4 col-md-offset-2">
        <p class="lead">Register now for <span class="text-success">FREE</span></p>
        <ul class="list-unstyled" style="line-height: 2">
            <li><span class="fa fa-check text-success"></span> See all your orders</li>
            <li><span class="fa fa-check text-success"></span> Fast re-order</li>
            <li><span class="fa fa-check text-success"></span> Save your favorites</li>
            <li><span class="fa fa-check text-success"></span> Fast checkout</li>
            <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
            <li><a href="/read-more/"><u>Read more</u></a></li>
        </ul>
        <p><a href="/new-customer/" class="btn btn-info btn-block">Yes please, register now!</a></p>
    </div>
</div>
</div>
    @endsection