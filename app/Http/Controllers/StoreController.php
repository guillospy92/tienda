<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Carbon\Carbon;

class StoreController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $date = Carbon::now();
        return view('store.index',compact('products','category','date'));
    }

    public function product($slug){
        $category = Category::all();
        $product = Product::where('slug',$slug)->first();
        return view('store.show',compact('product','category'));
    }

    public function ver($id){

        return  "lista de categorias";
    }



}
