<?php 

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductsController;



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

Route::get('/sales', function () {
    return view('sales');
});

Route::get('/orders', 
[OrdersController::class, 'ordersDB'])->
name('orders');