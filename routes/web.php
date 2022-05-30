<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
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


    // Route::get('/messages', function () {
    //     return 'Hello World';
    // });
    
    // Route::get('/messages', function () {
    //     return view('messages'); 
    // });

    Route::get('/messages', [MessagesController::class, 'showAll']);
    Route::post('/create', [MessagesController::class, 'create']);
    Route::get('/message/{id}', [MessagesController::class, 'details']);
    Route::delete('/message/{id}', [MessagesController::class, 'delete']);
