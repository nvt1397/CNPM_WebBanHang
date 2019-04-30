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
use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/id/{product_id}', function($product_id) {
    $product = Product::find($product_id);
    if (!$product) {
        return redirect('/');
    }
    return view('product', [
        'product' => $product,
    ]);
});

Route::post('/quicklogout', function() {
    Auth::logout();
    return redirect()->back();
}) -> name('quicklogout');