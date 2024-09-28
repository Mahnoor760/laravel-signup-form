<?php
use App\Http\Controllers\register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
        return view('home');
     });
     route::get('/reg',[register::class ,"index"]);
route::post('/reg',[register::class ,"register"]);