<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('discountCalculator');
});
Route::post('/', function (Request $request) {
    $name = $request->name;
    $price = $request->price;
    $percent = $request->percent;
    $discountAmount = $name . ' có giá là: ' . $price * $percent * 0.01;
    return view('precent', compact('discountAmount'));
});

