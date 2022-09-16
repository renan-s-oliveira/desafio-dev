<?php

use Illuminate\Http\Request;
use Renan\LeitorCnabDesafio\Cnab;
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


Route::post('/cnab', function (Request $request) {
    $file = $request->file('file');
    $cnab = new Cnab;
    dd($cnab->getInfo($file));
});
