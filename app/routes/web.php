<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|        $data = $request->all();ervc
*/
use App\Product;
use Illuminate\Http\Request;

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
        'comments' => $product->comments
    ]);
});

Route::post('/quicklogout', function() {
    Auth::logout();
    return redirect()->back();
}) -> name('quicklogout');

Route::get('/test', function() {
    return view('layouts.karma');
});

Route::post('/comment', function(Request $request) {
    if (Auth::check()) {
        $comment = new App\Comment1();
        $comment->user_id = Auth::id();
        $comment->product_id = $request->product_id;
        $comment->content = $request->message;
        $comment->save();

        $result = array();
        $result['created_at'] = date('d/m/Y - H:i:s', $comment->created_at->timestamp);
        $result['content'] = $comment->content;
        $result['id'] = $comment->id;

        return $result;
    }
}) -> name('comment');