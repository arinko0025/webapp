<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\SLIP;
use App\SLIPITEM;
use App\ITEM;

class BuyController extends Controller
{
  public function index(){
    if(!Auth::check()){
      return redirect('/login');
    }
    $cart = new \App\Service\CartService();
    $item = $cart->getCart();
    if(empty($item->toArray())){
      return back()->with('error','e');
    }
    $user = Auth::user();
    return view('buy',compact('item','sumprice','user'));
  }

  public function store(Request $request){
    $userid = Auth::user()->id;

    $itemnum = $request->input('num');

    $sumprice = 0;
    foreach ($itemnum as $key => $value) {
      $data = ITEM::where('id',$key)->first();
      $sumprice += $data->price * $value;
    }
    $id = Carbon::now()->timestamp;

    SLIP::insert([
      "id" => $id,
      "sumprice" => $sumprice,
      "userID" => $userid,
      "getmoney" => 0
    ]);

    foreach ($itemnum as $key => $value) {
      SLIPITEM::insert([
        "itemID" => $key,
        "slipID" => $id,
        "num" => $value
      ]);
    }
    $cart = new \App\Service\CartService();
    $cart->clearCart();

    return redirect('/completion');
  }

  public function stores(Request $request){
    // userIDを取得
    $userid = Auth::user()->id;

    // itemIDとその個数を配列で取得
    $itemnum = $request->input('num');

    // 合計金額変数を初期化
    $sumprice = 0;

    foreach ($itemnum as $itemid => $value) {
      // ITEM表の金額を取得
      $data = ITEM::where('id',$itemid)->first();
      // 合計金額にITEMの金額＊個数を追加
      $sumprice += $data->price * $value;
    }

    // timestampによる一意のIDを作成
    $id = Carbon::now()->timestamp;

    SLIP::insert([
      "id" => $id,
      "sumprice" => $sumprice,
      "userID" => $userid,
      "getmoney" => 0
    ]);

    foreach ($itemnum as $itemid => $value) {
      SLIPITEM::insert([
        "itemID" => $itemid,
        "slipID" => $id,
        "num" => $value
      ]);
    }

    // cartの中身をすべて消す
    $cart = new \App\Service\CartService();
    $cart->clearCart();

    return redirect('/completion');
  }
}
