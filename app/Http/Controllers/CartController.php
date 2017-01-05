<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ITEM;

class CartController extends Controller
{
  public function index(){
    $cart = new \App\Service\CartService();
    $item = $cart->getCart();
    return view('cart',compact('item'));
  }

  public function store(Request $request){
    $id = $request->input('item_id');
    $cart = new \App\Service\CartService();
    $cart->addCart($id);
    return redirect('cart');
  }

  public function destroy(Request $request){
    $id = $request->input('item_id');
    $cart = new \App\Service\CartService();
    $cart->removeCart($id);
    return redirect('cart');
  }
}
