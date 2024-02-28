<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

Route::get('/', function () {
    return view('home');
});

//posts  
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/createPage', function () {
    return view('/posts.create');
});
Route::get('/posts/detail/{id}', [PostsController::class, 'detail']);
Route::post('/posts', [PostsController::class, 'create']);

//food
Route::get('/foods', [FoodsController::class, 'index']);

//products
Route::get('/products', [ProductsController::class, 'index']);

Route::get('/about', [ProductsController::class, 'about']);

Route::get('/products/{productName}/{id}', [ProductsController::class, 'detail'])->where(['id' => '[0-9]+', 'productName' => '[a-z]+']);

// Route::get('/about', function () {
//     return [
//         'name' => 'test',
//         'age' => 12
//     ];
// });

// Route::get('/res', function () {        
//     return redirect('/');
// });