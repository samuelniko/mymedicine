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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('obat','MedicineController');
Route::resource('kategori','CategoryController');
Route::resource('transaksi','TransactionController');
Route::resource('suppliers','SupplierController')->middleware('auth');;

Route::post('/supplier/getEditForm','SupplierController@getEditForm')->name('supplier.getEditForm')->middleware('auth');
Route::post('/supplier/getEditForm2','SupplierController@getEditForm2')->name('supplier.getEditForm2');
Route::post('/supplier/saveData','SupplierController@saveData')->name('supplier.saveData')->middleware('auth');;

Route::post('/transactions/showAjax','TransactionController@showAjax')->name('transactions.showAjax');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
