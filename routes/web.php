<?php

use App\Http\Controllers\Democontroller;
use App\Http\Middleware\demoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("/hello1/{key}",[Democontroller::class, "demoaction1"])->middleware([demoMiddleware::class]);
Route::get("/hello2",[Democontroller::class, "demoaction2"]);


Route::get('/admin/{code}', [Democontroller::class, 'htht'])->middleware('demoMiddle::class');
