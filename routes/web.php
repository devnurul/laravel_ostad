<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\demoMiddleware;
use App\Http\Controllers\Democontroller;
use Illuminate\Support\Facades\Redirect;








Route::get('/dashboard', function (){
    return "Hello bangladesh";
});

Route::get('/home', function () {
    return Redirect::to('/dashboard', 302);
});
