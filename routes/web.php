<?php

use App\Http\Controllers\Democontroller;
use App\Http\Middleware\demoMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return Redirect::to('/dashboard', 302);
});