<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CATEGORY;

class TopController extends Controller
{
    public function index(){

      $array = ["A","B","C","D"];
      $category = CATEGORY::all();
      return view('top',compact('array','category'));
    }
}
