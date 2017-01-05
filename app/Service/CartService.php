<?php
namespace App\Service;

use App\ITEM;
use Illuminate\Support\Facades\DB;

class CartService
{

  public function addCart($id){

    $cart = session()->get('cart');
    if(!isset($cart)){
      $cart = [];
    }
    $cart[] = $id;
    session()->put('cart',$cart);
  }

  public function getCart(){
    $cart = session()->get('cart');
    if(!isset($cart)){
      $cart = [];
    }
    $item = ITEM::whereIn('id',$cart)->with('Img')->get();
    return $item;
  }

  public function removeCart($id){
    $cart = session()->get('cart');
    $result = array_diff($cart,array($id));
    $result = array_values($result);
    session()->put('cart',$result);
  }
}


 ?>
