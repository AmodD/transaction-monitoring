<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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

Route::get('/testredis', function () {
  //    Redis::set('name', 'Taylor');
//    dd(Redis::command('get', ['hi']));
    return " testing ".Redis::command('get', ['prospect_database_name']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/transaction_details', function () {


        return view('transaction-details');
    })->name('transaction_details');
    Route::get('/advanced_analytics', function () {
        return view('advanced-analytics');
    })->name('advanced_analytics');
    Route::get('/user_management', function () {
        return view('dashboard');
    })->name('user_management');
});
