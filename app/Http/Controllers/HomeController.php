<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function index()
  {
    $data = DB::table('pictures')->get();
    $info = DB::table('users')->get();
    $p = DB::table('posts')->get();
    // $user = Auth::user();
    return view('home',['data' => $data,'info'=>$info,'p'=>$p]);
  }
}
