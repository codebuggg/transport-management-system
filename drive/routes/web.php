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

Route::get('/', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/dashboard', function () {
    return view('logistics.dashboard');
})->name('dashboard');

Route::get('/drivers', function () {
    return view('logistics.drivers');
})->name('drivers');

Route::get('/drivers/newDriver', function () {
    return view('logistics.newDriver');
})->name('newDriver');

Route::get('/sales', function () {
    return view('logistics.sales');
})->name('sales');

Route::get('/sales/newSales', function () {
    return view('logistics.newSales');
})->name('newSales');

Route::get('/expense', function () {
    return view('logistics.expense');
})->name('expense');

Route::get('/expense/newExpense', function () {
    return view('logistics.newExpense');
})->name('newExpense');

Route::get('/messages', function () {
    return view('logistics.messages');
})->name('messages');

Route::get('/messages/newMessages', function () {
    return view('logistics.newMessages');
})->name('newMesages');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
