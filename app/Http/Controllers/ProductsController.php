<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        // $title = "hello";
        // return view('products.index', compact('title'));

        $myphone = [
            'name' => 'iphone',
            'year' => '2023'
        ];
        return view('products.index', compact('myphone'));
    }

    public function detail( $productName,$id){
        return "products id: {$id} {$productName}";
    }

    public function about(){
        return view('products.about');
    }
}
