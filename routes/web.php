<?php

use App\Http\Controllers\Democontroller;
use App\Http\Middleware\demoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("/hello1/{key}",[Democontroller::class, "demoaction1"])->middleware([demoMiddleware::class]);
Route::get("/hello2",[Democontroller::class, "demoaction2"]);



    Route::get("/hello1/{key}",[Democontroller::class, "demoaction1"]);
    Route::get("/hello2/{key}",[Democontroller::class, "demoaction2"]);
    Route::get("/hello3/{key}",[Democontroller::class, "demoaction3"]);
    Route::get("/hello4/{key}",[Democontroller::class, "demoaction4"]);
