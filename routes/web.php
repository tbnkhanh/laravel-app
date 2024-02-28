<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('home');
});
    
//posts
Route::get('/posts', [PostsController::class, 'index']);

//products
Route::get('/products', [ProductsController::class, 'index']);

Route::get('/about', [ProductsController::class, 'about']);

Route::get('/products/{productName}/{id}', [ProductsController::class, 'detail'])->where(['id'=>'[0-9]+', 'productName'=>'[a-z]+' ]);


// Route::get('/about', function () {
//     return [
//         'name' => 'test',
//         'age' => 12
//     ];
// });

// Route::get('/res', function () {        
//     return redirect('/');
// });