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
    $users = [

    1 => "Daniel",
    2 => "Maila",
    3 => "Ana",
    4 => "Radojka",
    5 => "Daniela",
    ];

    return view('user', compact($users));
  }

  public function about()
  {
    return view('user');
  }



    //
}
