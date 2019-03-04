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
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () {
    return view('welcome');
});
Route::get('/finance','Controller@finance');
Route::get('/cards','Controller@cards');
Route::get('/general','Controller@general');
Route::get('/carousel','Controller@carousel');
Route::get('/list_group','Controller@list_group');
Route::get('/typography','Controller@typography');
Route::get('/accordions','Controller@accordions');
Route::get('/tabs','Controller@tabs');
Route::get('/chart','Controller@chart');
Route::get('/morris','Controller@morris');
Route::get('/sparkline','Controller@sparkline');
Route::get('/form_elements','Controller@form_elements');
Route::get('/form_validation','Controller@form_validation');

Route::get('/multiselect','Controller@multiselect');
Route::get('/bootstrap_select','Controller@bootstrap_select');
Route::get('/parsely_validation','Controller@parsely_validation');
Route::get('/datepicker','Controller@datepicker');
Route::get('/general_table','Controller@general_table');
Route::get('/data_table','Controller@data_table');
// Route::get('/home','HomeController@index');

});

