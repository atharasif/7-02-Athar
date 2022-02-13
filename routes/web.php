<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
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