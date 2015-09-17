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

	   	$items = array(
	    'id' => 1,
	    'name' => 'Juicy Picnic Hamper',
	    'price' => 120.00,
	    'quantity' => 1
		);

		//Make the insert
		
		return view('cart'); 
    }
}
