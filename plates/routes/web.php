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

Route::get('/tracker', function () {
    return view('tracker');
});

Route::get('/orderlist', function () {
    return view('orderlist');
});

Route::get('/menucreate', function () { //Dean
    return view('menucreate');
});

Route::get('/', function () {
    return view('mainscreen');
});

Route::get('/ordersystem', function () { //Dean
    return view('ordersystem');
});

Route::get('/tablemap', function () { //Dean
    return view('tablemap');
});

Route::get('/cusactivity', 'CustomeractivityController@cusactivity');

Route::get('/performancemain', 'CustomeractivityController@performancemain');

Route::get('/plateassign', 'MenuController@index');

Route::get('/analytics', 'CustomeractivityController@index');

Route::get('/assign', 'AssignController@index');

Route::get('/readerupdate', 'AssignController@assignplateid');

Route::post('/setplate', 'AssignController@setplate');

Route::post('/deactiveplate', 'AssignController@deactiveplate');

Route::resource('menus','MenuController');

Route::resource('plates','PlateController');

Route::resource('nerds', 'NerdController');

Route::resource('items', 'ItemsController');

Route::get('/menu', 'ItemsController@index');