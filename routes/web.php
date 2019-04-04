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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'HomeController@index')->name('index');

Route::get('/account','Admin\AccountController@index')->name('account');
Route::get('{id}/ladgerDetail','Admin\AccountController@detailLadger')->name('ladgerDetail');
Route::resource('Admin/Ladger','Admin\LadgerController');
Route::get('Entry/create','Admin\EntryController@createEntry');
Route::get('Order/create','Admin\OrderController@createOrder');
Route::get('OrderUser/create','Admin\OrderUserController@createOrderOrder');

Route::get('balanced','Admin\AccountController@balanced')->name('balanced');
Route::post('balancedInsert','Admin\AccountController@createBalanced')->name('balancedInsert');
Route::get('{id}/ladgerBalanced','Admin\AccountController@makeBalanced')->name('ladgerBalanced');
Route::get('{id}/prnpriview','Admin\AccountController@prnpriview')->name('prnpriview');

Route::get('json-balance','Admin\EntryController@balanceds');
// Group Routes
Route::group(['prefix' => 'group'], function () {
	Route::get('create', [
	    'uses' => 'Admin\GroupController@getAllGroup',
	    'as' => 'group.create'
	]);
	Route::get('{id}/edit', [
	    'uses' => 'Admin\GroupController@getOnceGroup',
	    'as' => 'group.edit'
	]);
 
	Route::post('/store', [
	    'uses' => 'Admin\GroupController@StoreGroup',
	    'as' => 'group.store'
	]);
 
	Route::post('{id}/update', [
	    'uses' => 'Admin\GroupController@UpdateGroup',
	    'as' => 'group.update'
	]);
 
	Route::get('{id}/delete', [
	    'uses' => 'Admin\GroupController@DeleteGroup',
	    'as' => 'group.delete'
	]);

	Route::get('{id}/show', [
		'uses' => 'Admin\GroupController@showGroup',
		'as' => 'group.show'
	]);
});
//Ladger Routes
Route::group(['prefix' => 'ladger'], function () {
	Route::get('create', [
	    'uses' => 'Admin\LadgerController@createLadger',
	    'as' => 'ladger.create'
	]);
	Route::get('{id}/edit', [
	    'uses' => 'Admin\LadgerController@editLadger',
	    'as' => 'ladger.edit'
	]);
 
	Route::post('store', [
	    'uses' => 'Admin\LadgerController@storeLadger',
	    'as' => 'ladger.store'
	]);
 
	Route::post('{id}/update', [
	    'uses' => 'Admin\LadgerController@UpdateLadger',
	    'as' => 'ladger.update'
	]);
 
	Route::get('{id}/delete', [
	    'uses' => 'Admin\LadgerController@DeleteLadger',
	    'as' => 'ladger.delete'
	]);
});

// Entry Routes
Route::group(['prefix' => 'entry'], function () {
	Route::get('/{id?}', [
	    'uses' => 'Admin\EntryController@getAllEntry',
	    'as' => 'entry.index'
	]);
 
	Route::post('store', [
	    'uses' => 'Admin\EntryController@entryStore',
	    'as' => 'entry.store'
	]);
 
	Route::get('{id}/entryShow', [
	    'uses' => 'Admin\EntryController@entryShow',
	    'as' => 'entry.entryShow'
	]);
 
	Route::delete('{id}/delete', [
	    'uses' => 'TaskController@postDeleteTask',
	    'as' => 'task.delete'
	]);
});

// Order Routes
Route::group(['prefix' => 'order'], function () {
	Route::get('/{id?}', [
	    'uses' => 'Admin\OrderController@getAllOrder',
	    'as' => 'order.index'
	]);
 
	Route::post('store', [
	    'uses' => 'Admin\OrderController@orderStore',
	    'as' => 'order.store'
	]);
 
	Route::patch('{id}/update', [
	    'uses' => 'Admin\OrderController@UpdateOrder',
	    'as' => 'order.update'
	]);

	Route::get('{id}/show', [
	    'uses' => 'Admin\OrderController@orderShow',
	    'as' => 'order.show'
	]);
 
	Route::delete('{id}/delete', [
	    'uses' => 'TaskController@postDeleteTask',
	    'as' => 'task.delete'
	]);
	Route::get('{id}/edit', [
	    'uses' => 'Admin\OrderController@editOrder',
	    'as' => 'order.edit'
	]);
});
// OrderUser Routes
Route::group(['prefix' => 'orderUser'], function () {
	Route::get('/index', [
	    'uses' => 'Admin\OrderUserController@getAllOrderUser',
	    'as' => 'orderUser.index'
	]);
 
	Route::post('/store', [
	    'uses' => 'Admin\OrderUserController@StoreOrderUser',
	    'as' => 'orderUser.store'
	]);
 
	Route::get('{id}/show', [
	    'uses' => 'Admin\OrderUserController@OrderUserShow',
	    'as' => 'orderUser.show'
	]);
 
	Route::get('{id}/delete', [
	    'uses' => 'Admin\OrderUserController@DeleteOrderUser',
	    'as' => 'orderUser.delete'
	]);
	Route::get('/print', [
	    'uses' => 'Admin\OrderController@printOrder',
	    'as' => 'order.print'
	]);
});
// Bill Print
Route::group(['prefix' => 'bill'], function () {
	Route::get('/index', [
	    'uses' => 'Admin\BillController@index',
	    'as' => 'bill.index'
	]);
 
	Route::post('/store', [
	    'uses' => 'Admin\BillController@store',
	    'as' => 'bill.store'
	]);
 
	Route::get('/show', [
	    'uses' => 'Admin\BillController@show',
	    'as' => 'bill.show'
	]);
 
	Route::get('{id}/printdats', [
	    'uses' => 'Admin\BillController@printdats',
	    'as' => 'bill.printdats'
	]);
	Route::get('/print', [
	    'uses' => 'Admin\OrderController@printOrder',
	    'as' => 'order.print'
	]);
});