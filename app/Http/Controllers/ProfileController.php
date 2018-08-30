<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function profile()
  {
    $data = DB::table('pictures')->get();

    // $user = Auth::user();
    return view('profile',['data' => $data]);
  }
}
