<?php

namespace App\Http\Controllers;

use App\Home;
use App\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Input;
use Hash;


class DeleteController extends Controller
{
    public function destroy(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::User()->password))) {
            // The passwords matches
            return redirect()->with("error","Your password does not matches with the password you provided. Please try again.");
        }


     else {
         $user = Auth::User();
         $user->delete();
         return Redirect('/')->with('message','Your account has been permanently removed from the system. Sorry to see you go!');

     }
    }
}
