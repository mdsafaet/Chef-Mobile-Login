<?php

use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Login');

});

Route::get('/env',[TokenController::class, 'index'])->name('env');

Route::view('/login-fardin', 'login_from_fardin');
=======
});

