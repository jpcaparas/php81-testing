<?php

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


Route::get('/fibers', function() {
    dispatch(new \App\Jobs\FiberJob());

    return null;
});

Route::get('/enums', function() {
    dispatch(new \App\Jobs\EnumJob());

    return null;
});


Route::get('/readonly', function() {
    dispatch(new \App\Jobs\ReadonlyJob());

    return null;
});

Route::get('/callable', function() {
    dispatch(new \App\Jobs\FirstClassCallableJob());

    return null;
});

Route::get('/intersection', function() {
    dispatch(new \App\Jobs\PureIntersectionTypesJob());

    return null;
});
