<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
  public function index(){
    $cart = new \App\Service\CartService();
    $item = $cart->getCart();
    $user = Auth::user();
    return view('buy',compact('item','sumprice','user'));
  }
}
