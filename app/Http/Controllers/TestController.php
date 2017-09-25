<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

  public function index($name)
  {
    return "$name is learning Laravel!";
  }

  public function user()
  {
    return view('user');
  }

  public function about()
  {
    return view('user');
  }



    //
}
