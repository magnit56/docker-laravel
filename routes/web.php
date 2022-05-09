<?php

use Illuminate\Support\Facades\Cache;
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
//    dump(\App\Models\User::all());
//    Cache::put('key1488', 'value1488', $seconds = 10000);
//    dd(Cache::get('key1488'));
//    \App\Jobs\CreateRandomUsers::dispatch();
    dump(\Illuminate\Support\Facades\DB::table('users')->select()->get());
//    phpinfo();
    return view('welcome');
});
