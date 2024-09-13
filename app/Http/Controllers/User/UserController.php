<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(Request $request)
  {
      $products = Product::filter($request->all())->paginate(10);
    return view('user.home' , compact('products'));
  }
}
