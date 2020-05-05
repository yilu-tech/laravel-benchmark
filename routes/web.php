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
    $before = memory_get_usage()/1048576;

    for ($i = 0; $i < 5; $i++) {
        $content[] = file_get_contents(storage_path('test.file'));
    }

    $after = memory_get_usage()/1048576;

    return [
        'before' => $before,
        'after' => $after
    ];
});
