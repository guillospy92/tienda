<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class CartController extends Controller
{


    public function __construct(){

        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    public function show(){
        $category = Category::all();
        $total = $this->total();
      $cart = \Session::get('cart');
        return view('store.cart',compact('cart','category','total'));
    }

    public function add(Product $product){

        $cart = \Session::get('cart');
        $product->quantity =1;
        $cart[$product->slug] = $product;
        \Session::put('cart',$cart);
        return redirect()->route('carrito');


    }

    public function delete(Product $product){

        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart',$cart);
        return redirect()->route('carrito');

    }

    public function deleteall(){
        \Session::forget('cart');
        return redirect()->route('carrito');

    }

    public function update(Product $product, $quantity ){

        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart',$cart);
        return redirect()->route('carrito');

    }

    private function total(){

        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }

    public function detalle(){

        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.detalle',compact('cart','total'));

    }


}