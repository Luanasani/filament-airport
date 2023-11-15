<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request, Product $product){
        $product -> title = $request -> title;
        $product -> price = $request -> price;
        $product -> save();
        return redirect()->route('products.index');
    }


    public function edit($id){
        $product = Product::where('id', $id) -> first()
        return view('products.edit',['product'=>])
    }

    public function update(){

    }

    public function delete(){

    }


    



}

