<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiStocksController;
use App\Http\Controllers\ApiIncomesController;
use App\Http\Controllers\ApiSalesController;
use App\Http\Controllers\ApiOrdersController;

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
    $data = [
        'Incomes' => [
            'list' => 'https://e675-102-88-36-140.ngrok-free.app/incomes/list?page=1&per_page=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            // 'add' => 'https://e675-102-88-36-140.ngrok-free.app/incomes/add',
            'fetchandstore' => 'https://e675-102-88-36-140.ngrok-free.app/incomes/fetchandstore?page=1&limit=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            'search' => 'https://e675-102-88-36-140.ngrok-free.app/incomes/search?nm_id=5147',
        ],
        'Sales' => [
            'list' => 'https://e675-102-88-36-140.ngrok-free.app/sales/list?page=1&per_page=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            // 'add' => 'https://e675-102-88-36-140.ngrok-free.app/sales/add',
            'fetchandstore' => 'https://e675-102-88-36-140.ngrok-free.app/sales/fetchandstore?page=1&limit=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            'search' => 'https://e675-102-88-36-140.ngrok-free.app/sales/search?nm_id=5147',
        ],
        'Stocks' => [
            'list' => 'https://e675-102-88-36-140.ngrok-free.app/stocks/list?page=1&per_page=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            // 'add' => 'https://e675-102-88-36-140.ngrok-free.app/stocks/add',
            'fetchandstore' => 'https://e675-102-88-36-140.ngrok-free.app/stocks/fetchandstore?page=1&limit=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            'search' => 'https://e675-102-88-36-140.ngrok-free.app/stocks/search?nm_id=4320',
        ],
        'Orders' => [
            'list' => 'https://e675-102-88-36-140.ngrok-free.app/orders/list?page=1&per_page=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            // 'add' => 'https://e675-102-88-36-140.ngrok-free.app/orders/add',
            'fetchandstore' => 'https://e675-102-88-36-140.ngrok-free.app/orders/fetchandstore?page=1&limit=10&dateFrom=2024-09-01&dateTo=2024-09-30',
            'search' => 'https://e675-102-88-36-140.ngrok-free.app/orders/search?nm_id=5147',
        ],
    ];

    return view('routes', compact('data'));
});

//Stocks Routes
Route::post('/stocks/add', [ApiStocksController::class, 'create']);
Route::get('/stocks/list', [ApiStocksController::class, 'list']);
Route::get('/stocks/fetchandstore', [ApiStocksController::class, 'fetchAndStore']);
Route::get('/stocks/search', [ApiStocksController::class, 'search']);


//Incomes Routes
Route::post('/incomes/add', [ApiIncomesController::class, 'create']);
Route::get('/incomes/list', [ApiIncomesController::class, 'list']);
Route::get('/incomes/fetchandstore', [ApiIncomesController::class, 'fetchAndStore']);
Route::get('/incomes/search', [ApiIncomesController::class, 'search']);

//Sales Routes
Route::post('/sales/add', [ApiSalesController::class, 'create']);
Route::get('/sales/list', [ApiSalesController::class, 'list']);
Route::get('/sales/fetchandstore', [ApiSalesController::class, 'fetchAndStore']);
Route::get('/sales/search', [ApiSalesController::class, 'search']);

//Orders Routes
Route::post('/orders/add', [ApiOrdersController::class, 'create']);
Route::get('/orders/list', [ApiOrdersController::class, 'list']);
Route::get('/orders/fetchandstore', [ApiOrdersController::class, 'fetchAndStore']);
Route::get('/orders/search', [ApiOrdersController::class, 'search']);
