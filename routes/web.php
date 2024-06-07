<?php

use App\Http\Controllers\NoticiaController;
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

// rota de teste: conexão redis
Route::get('/redis-test', function () {
    $redis = app()->make('redis');
    $redis->set('name', 'Laravel');
    return $redis->get('name');
});

Route::get('/', function () {
    return view('welcome');
});


Route::Resource('noticia', NoticiaController::class);