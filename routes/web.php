<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatistikPemainController;


Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/Statistics', [StatistikPemainController::class,'stat']);

Route::get('/News', function () {
    return view('News');
});
Route::get('/Analytics', function () {
    return view('Analytics');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
