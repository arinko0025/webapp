<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ITEM;

class ItemController extends Controller
{
  public function index(Request $request){
    $categoryid = $request->input('id');
    $item = ITEM::where('categoryID',$categoryid)->with('Img')->get();
    return view('item',compact('item'));
  }
  public function detail(Request $request){
    $itemid = $request->input('id');
    $item = ITEM::where('id',$itemid)->with('Img')->get();
    return view('detail',compact('item'));
  }
}
