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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'InvoiceController@index');
// Route::get('all-category', 'InvoiceController@all_categories');
// Route::get('generate-pdf','PdfgenerateController@generatePDF');
// Route::get('general-invoice', 'PdfgenerateController@Vieworder');

Route::get('disneyplus', 'DisneyplusController@create')->name('disneyplus.create');
Route::post('disneyplus', 'DisneyplusController@store')->name('disneyplus.store');
Route::get('/', 'DisneyplusController@index')->name('disneyplus.index');
Route::get('/downloadPDF/{id}','DisneyplusController@downloadPDF');