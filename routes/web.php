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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\SettingController@index');
    Route::get('tampilan', 'Backend\SettingController@pengaturan')->name('setting.tampilan');
});

Route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('pages.contact-us');
Route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('pages.about-us');
Route::get('/', 'Frontend\FrontendController@index')->name('pages.index');
Route::get('/lowongan-pekerjaan', 'Frontend\FrontendController@lokerPekerjaan')->name('pages.loker');
