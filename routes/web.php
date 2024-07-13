<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/', 'namespace' => 'App\Http\Controllers\Home'], function () { 
    Route::get('/', function () { return view('home'); });
    Route::get('/programs', function () { return view('pages.programs.index'); });
    Route::get('/instructors', function () { return view('pages.instructors.list'); });
    Route::get('/why-Choose-us', function () { return view('pages.whychooseus.index'); });
    Route::get('/gallery', function () { return view('pages.gallery.index'); });
    Route::get('/contact-us', function () { return view('pages.contactus.index'); });
    Route::get('/aboutus', 'HomeController@AboutUs');
    Route::get('/404', function () { return view('pages.404.index'); });  
});

