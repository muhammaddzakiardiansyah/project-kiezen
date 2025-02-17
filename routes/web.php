<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.homePage');
});

Route::get('/login-user', function() {
    return view('Pages.loginUserPage');
});

Route::get('/login-admin', function() {
    return view('Pages.loginAdmin');
});
