<?php

use App\Http\controllers\DataController;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/lapor-banjir', [DataController::class, 'form']);
Route::post('/lapor-banjir/proses', [DataController::class, 'proses']);

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/reshare', function () {
    return view('reshare.index'); 
});
Route::get('/reshare/donasi', function () {
    return view('reshare.donasi'); 
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Andi';
});

Route::get('/user/{name}', function ($name){
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest'){
    return "Halo, $name";
});

Route::get('profile', function () {
    return View('profile');
});

Route::get('/about', function () {
    return View('about', ['name' => 'Andi']);
});

Route::get('/home', function () {
    return 'halo, ini adalah halam home';
}) -> name('home.page');
