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


Route::get('/db', function () {
    return view('db/index_db');
});

Route::get('/news_db', function () {
    return view('db/news_db');
});
Route::get('/pemain_db', function () {
    return view('db/pemain_db');
});
Route::get('/pertandingan_db', function () {
    return view('db/pertandingan_db');
});
Route::get('/stat_pemain_db', function () {
    return view('db/stat_pemain_db');
});

Route::get('/stat_tim_db', function () {
    return view('db/stat_tim_db');
});

Route::get('/tim_db', function () {
    return view('db/tim_db');
});

