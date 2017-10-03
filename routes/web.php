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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);


// Mailable Templates routes
Route::prefix('mail-template')->middleware('auth')->group(function(){
    Route::get('/', [
        'uses' => 'MailTemplateController@index',
        'as'   => 'mail-template.all'
    ]);
    Route::get('/{id}',[
        'uses' => 'MailTemplateController@getTemplate',
        'as'   => 'mail-template.item'
    ]);
    Route::put('/{id}',[
        'uses' => 'MailTemplateController@putTemplate',
        'as'   => 'mail-template.edit'
    ]);
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
