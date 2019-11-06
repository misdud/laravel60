<?php

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

Route::get('/', function () {
    return view('default.home');
})->name('home');

Route::get('/articles', ['as'=>'articles', 'uses'=>'Admin\MyControllerArticl@showArticles']);
Route::get('/articl/{id}', ['as'=>'articl', 'uses'=>'Admin\MyControllerArticl@showArticl'])->where('id', '[0-9]+');
Route::get('/about', ['as'=>'about', 'uses'=>'Admin\MyControllerArticl@showAbout']);
Route::match(['post', 'get', 'put'],'/contact/{page?}',['as'=>'contact', 'uses'=>'Admin\MyControllerContact@showContact']);



//Route::fallback(function(){
//    echo "  Страница не найдена ";
//});





