<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
  public function index(){
    return view('cart');
  }

  public function store(Request $request){
    $item_id = $request->input('item_id');

    $cart = session()->get('cart');
    if(!isset($cart)){
      $cart = [];
    }
    $cart[] = $item_id;
    session()->put('cart',$cart);

    return redirect('cart');
  }
}
