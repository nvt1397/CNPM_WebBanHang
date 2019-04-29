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

Route::get('/', function () {
    return view('welcome');
});

// Just for test
Route::get('/test', function() {
    $catalog = new App\Catalog();
    $product = new App\Product();
    $cmt1 = new App\Comment1();
    $cmt2 = new App\Comment2();

    // Product
    $product->name = 'Giày addidas';
    $product->price = 1965000;
    $product->catalog_id = 1;
    $product->save();
    echo "Successful";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
