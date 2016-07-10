<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/{name?}/{page?}', function ($name = 'welcome', $page = 'welcome') {
    if($name === 'welcome' && $page === 'welcome') {
        return view($name);
    }
    else{
        return view('page.'.$name.'.'.$page);
    }
});




