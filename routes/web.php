
<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->prefix('auth')
    ->group(function () {
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register');
        Route::get('logout', 'logout')->name('logout');
        Route::post('login', 'loginPost')->name('loginPost');
    });

Route::controller(\App\Http\Controllers\user\UserController::class)->group(function () {
    Route::get('/home', 'home')->name('home')->middleware('WebGuard');
    Route::get('/create-ticket', 'createTicket')->name('createTicket')->middleware('WebGuard');
    Route::get('/api/totalTicekts', 'App\Http\Controllers\user\UserController@totalTicekts');
    Route::get('/api/totalTicektsResolved', 'App\Http\Controllers\user\UserController@totalTicektsResolved');
    Route::get('/api/totalTicektsUnresolved', 'App\Http\Controllers\user\UserController@totalTicektsUnresolved');

    Route::get('/user/totalTicekts', 'UsertotalTicekts');
    Route::get('/user/totalTicektsResolved', 'UsertotalTicektsResolved');
    Route::get('/user/totalTicektsUnresolved', 'UsertotalTicektsUnresolved');
    
    Route::get('/user/latestTicekt', 'UserlatestTicekt');
    
    

    Route::post('/create-ticketPost', 'createTicketPost')->name('create-ticketPost')->middleware('WebGuard');
    
});


Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/home', 'home')->name('adminHome')->middleware('WebGuard');
    Route::get('/ticket/solve/{id}', 'solveTicket')->name('solveTicket');
    Route::post('/ticket/solved/{id}', 'solveTicketPost')->name('solveTicketPost');
    Route::get('/tickets','tickets')->name('tickets');


});

