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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact',function(){
	return view('contact');
});
Route::post('/contact','PagesController@mail');
Route::get('/proposal','ProposalController@index');
Route::get('/petition','PetitionController@index');
Route::get('/writepetition','PetitionController@create');
Route::post('/writepetition','PetitionController@store');
Route::get('/fullproposal/{id}','ProposalController@show');
Route::get('/admin/seepetitions','AdminController@show');
Route::post('/admin/seepetitions/approve/{id}','AdminController@approve');
Route::post('/admin/seepetitions/delete/{id}','AdminController@destroy');
Route::get('/admin/uploadproposals','ProposalController@create');
Route::post('/admin/uploadproposals','ProposalController@store');
Route::get('/fullpetition/{id}','PetitionController@show');
Route::post('/fullpetition/comment/{id}','PetitionController@comment');
Route::post('/fullpetition/like/{id}','PetitionController@like');
Route::post('/fullproposal/comment/{id}','ProposalController@comment');
Route::post('/fullproposal/like/{id}','ProposalController@like');
Route::get('/myform',array('as'=>'myform','uses'=>'PagesController@myform'));
Route::get('/myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'PagesController@myformAjax'));
Route::post('/myform','PagesController@show');






Route::get('/admin','AdminController@index');
Route::get('/admin/options',function(){
	return view('options');
})->name('options');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
