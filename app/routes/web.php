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
    return view('karmahome');
}) -> name('karmahome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/id/{product_id}', function($product_id) {
    $product = Product::find($product_id);
    if (!$product) {
        return redirect('/');
    }
    return view('product', [
        'product' => $product,
        'comments' => $product->comments,
        'reviews' => $product->reviews
    ]);
}) -> name('product');

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
        $comment->content = htmlspecialchars($request->message);
        $comment->save();

        $result = array();
        $result['created_at'] = date('d/m/Y - H:i:s', $comment->created_at->timestamp);
        $result['content'] = $comment->content;
        $result['id'] = $comment->id;

        return $result;
    }
}) -> name('comment');

Route::post('/rep_comment', function(Request $request) {
    if (Auth::check()) {
        $rep = new App\Comment2();
        $rep->user_id = Auth::id();
        $rep->cmt1_id = $request->comment1_id;
        $rep->content = htmlspecialchars($request->message);
        $rep->save();

        $result = array();
        $result['created_at'] = date('d/m/Y - H:i:s', $rep->created_at->timestamp);
        $result['content'] = $rep->content;
        $result['id'] = $rep->id;
        return $result;
    }
}) -> name('rep_comment');

Route::post('/review', function(Request $request) {
    if (Auth::check() &&
        App\Review::where('user_id', '=', Auth::id())->where('product_id','=', $request->product_id)->count() == 0) {
        $review = new App\Review();
        $review->user_id = Auth::id();
        $review->product_id = (int)($request->product_id);
        $review->stars = (int)($request->stars);
        $review->content = htmlspecialchars($request->message);
        $review->save();
        return $review->stars;
    }
}) -> name('review');

Route::any('/advanced_search', function() {
    return view('advanced_search');
})->name('advanced_search');

Route::get('/search', function(Request $req) {
    $product = Product::where('name','like','%'.$req->search_input.'%')->get();
    return view('search_result',compact('product'));
})->name('search');

Route::any('/search_result', function() {
    $search_input = Input::get ('search_input');
})->name('search_result');