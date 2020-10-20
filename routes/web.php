<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ExpenseController;

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

Route::get('/drivers',[DriverController::class, 'index'])->name('drivers');
Route::get('/drivers/create',[DriverController::class, 'create'])->name('newDriver');
Route::post('/drivers',[DriverController::class, 'store'])->name('driver.store');

Route::get('/drivers/newDriver', function () {
    return view('logistics.newDriver');
})->name('newDriver');

Route::get('/sales',[SalesController::class, 'index'])->name('sales');
Route::get('/sales/create',[SalesController::class, 'create'])->name('newSales');
Route::post('/sales',[SalesController::class, 'store'])->name('sales.store');

Route::get('/expense',[ExpenseController::class, 'index'])->name('expense');
Route::get('/expense/create',[ExpenseController::class, 'create'])->name('newExpense');
Route::post('/expense',[ExpenseController::class, 'store'])->name('expense.store');


// Route::get('/expense', function () {
//     return view('logistics.expense');
// })->name('expense');

// Route::get('/expense/newExpense', function () {
//     return view('logistics.newExpense');
// })->name('newExpense');

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
