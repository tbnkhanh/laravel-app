<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('home');
});

//posts  

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/createPage', function () {
    return view('/posts.create');
});
Route::post('/posts', [PostsController::class, 'create']);
Route::get('/posts/detail/{id}', [PostsController::class, 'detail']);
Route::get('/posts/edit/{id}', [PostsController::class, 'editPage']);
Route::post('/posts/edit/{id}', [PostsController::class, 'edit']);
Route::get('/posts/delete/{id}', [PostsController::class, 'delete']);


// Route::get('/res', function () {        
//     return redirect('/');
// });