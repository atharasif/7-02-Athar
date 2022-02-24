<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/',function() {
    return view('index', [
        "title" => "Beranda"
    ]);
});

route::get('/about',function() {
    return view('about', [
        "title" => "About",
        "nama" => "Athar Asif Nurcahyadi",
        "email" => "3103120038@student.smktelkom-pwt.sch.id",
        "gambar" => "athar.jpg"
    ]);
});

route::get('/gallery',function() {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

route::resource('/contacts', ContactController::class);
Auth::routes();

route::group(['middleware' => ['auth']], function (){
    route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
