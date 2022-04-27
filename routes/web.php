<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;


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


Route::get('/redirect',[HomeController::class,"index"]);
Route::get('/tickets',[TicketController::class,"index"])->name("ticket.index");
Route::get('/tickets/create',[TicketController::class,"create"])->name("ticket.create");
Route::post('/tickets',[TicketController::class,"store"])->name("ticket.store");
Route::get('/tickets/{id}',[TicketController::class,"show"])->name("ticket.show");
Route::get('/tickets/{id}/edit',[TicketController::class,"edit"])->name("ticket.edit");







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
