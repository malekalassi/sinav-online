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



Auth::routes();



// Route::middleware(['admin'])->group(function () {
//     Route::get('/admin', '/Admin/ProfileController@index');


// });
Route::group(['namespace' => 'Admin', 'middleware' => ['admin' ,'auth']], function()
{
    Route::get('/', 'ProfileController@index')->name('admin.home');
    Route::get('/sinav/create', 'SinavController@create')->name('sinav.create');
    Route::get('/sinavlar/{lesson}', 'SinavController@index')->name('sinav.index');
    Route::post('/sinav', 'SinavController@store')->name('sinav.store');
    Route::post('/exam', 'ExamController@store')->name('exam.store');
    Route::delete('/question/{question}', 'SinavController@delete')->name('question.store');
    Route::delete('/exam/{sinav}', 'SinavController@remove')->name('exam.remove');

});


// Route::get('/', 'ProfileController@index')->name('profile.index');
Route::get('/sinavlar', 'DersController@index')->name('sinavlar.index');
Route::get('/sinav/{id}', 'DersController@show')->name('sinavlar.show');
Route::get('/sinav/{lessonId}/questions', 'QuestionController@index')->name('questions.index');
Route::post('/test/{lessonId}', 'QuestionController@getValue')->name('test.getvalue');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
