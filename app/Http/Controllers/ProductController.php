<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return view('product')->with('product', $products);
    }

    public function create(){
        $category = Category::all();
        return view('create',compact('category'));
    }

    public function store(Request $request){
        $input = $request->name;
        Product::create($input);
        return redirect('/');
    }

    public function edit($product){
        $category = Category::all();
        $product = Product::find($product);
        return view('edit',compact('product','category'));
    }

    public function update(Request $request,$product){
        $input = $request->name;

        $product = Product::find($product);
        $product->name = $input['name'];
        $product->price = $input['price'];
        $product->category_id = $input['category_id'];
        $product->save();
        return redirect('/');
    }

    public function delete($product){
        Product::find($product)->delete();
        return redirect()->back();
    }
}
