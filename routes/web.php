<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatistikPemainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\NewsController;


Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::delete('/logout', [LoginController::class,'logout'])->name('logout');


/////// USER ///////
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

/////// DATABASE ///////
Route::get('/login', function () {
    return view('Login');
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

/////// FORM ///////
Route::get('/form', [KompetisiController::class,'index']);
Route::post('/form', [KompetisiController::class, 'store'])->name('kompetisi');


Route::get('/Match', function () {
    return view('form/Match');
});

Route::get('/News_form', [NewsController::class,'index']);
Route::post('/News_form', [NewsController::class, 'store'])->name('news');

Route::get('/Player', [PemainController::class,'index']);
Route::post('/Player', [PemainController::class, 'createPemain'])->name('pemain');


Route::get('/Team', [TimController::class,'index']);
Route::post('/Team', [TimController::class,'createTim'])->name('tim');
