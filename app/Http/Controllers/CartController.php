<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ITEM;

class CartController extends Controller
{
  public function index(){
    $cart = session()->get('cart');
    if(!isset($cart)){
      $cart = [];
    }
    $item = ITEM::whereIn('id',$cart)->with('Img')->get();
    return view('cart',compact('item'));
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
