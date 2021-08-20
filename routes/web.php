<?php

use App\Jobs\LaraQueue;
use App\Models\LaraQueue as ModelsLaraQueue;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\LaraQueues;
use App\Http\Controllers\LaraQueueController;

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

Route::post('message', [LaraQueueController::class, "lara"]);
Route::get('/', function () {
    
    // return Hash::make("123456");
    return view('welcome');
});
Route::get('api/laraqueue', [LaraQueueController::class, "getLara"]);