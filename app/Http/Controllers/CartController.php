<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cart;

class CartController extends Controller
{
    //
    public function showCart(){

		//Make the insert
		
		return view('cart'); 
    }

    public function addItem(Request $request){

    	$item = $request->only("id","quantity");

    	$product = \App\Models\Product::find($item["id"]);

    	$item["name"] = $product->name;
    	$item["price"] = $product->price;


    	Cart::insert($item);

    	return redirect("cart");

    }
    public function checkout(){

    	$order = new \App\Models\Order();
    	$order->user_id = \Auth::user()->id;
    	$order->status = "Pending";
    	$order->save();

    	foreach(Cart::contents() as $item){
    		$order->products()->attach($item->id,["quantity"=>$item->quantity]);
    	}

    	Cart::destroy();

    	return redirect("types/1");
    }
}
