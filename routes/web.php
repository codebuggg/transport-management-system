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
})->name('login');

// Route::get('/register', function(){
//     return view('register');
// })->name('register');;

Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');

Route::get('/drivers',[DriverController::class, 'index'])->middleware('auth')->name('drivers');
Route::get('/drivers/create',[DriverController::class, 'create'])->middleware('auth')->name('newDriver');
Route::get('/drivers/edit/{driver}',[DriverController::class, 'edit'])->middleware('auth')->name('editDriver');
Route::post('/drivers',[DriverController::class, 'store'])->middleware('auth')->name('driver.store');
Route::get('/drivers/view/{driver}',[DriverController::class, 'show'])->middleware('auth')->name('driver.show');
Route::get('/drivers/newDriver', function () {
    return view('logistics.newDriver');
})->middleware('auth')->name('newDriver');



Route::get('/sales',[SalesController::class, 'index'])->middleware('auth')->name('sales');
Route::get('/sales/create',[SalesController::class, 'create'])->middleware('auth')->name('newSales');
Route::post('/sales',[SalesController::class, 'store'])->middleware('auth')->name('sales.store');

Route::get('/expense',[ExpenseController::class, 'index'])->middleware('auth')->name('expense');
Route::get('/expense/create',[ExpenseController::class, 'create'])->middleware('auth')->name('newExpense');
Route::post('/expense',[ExpenseController::class, 'store'])->middleware('auth')->name('expense.store');


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

Auth::routes(['except' => 'login']);

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
