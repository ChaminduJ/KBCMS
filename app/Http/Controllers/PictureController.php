<?php

namespace App\Http\Controllers;

use DB;
use App\Picture;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{
  public function uploadPicture(Request $request)
  {
    $user = User::find(Auth::User()->id);

    if ($request->hasFile('profileImg')) {
      $this->validate($request, [
        'profileImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $image = $request->file('profileImg');
      $name = $image->getClientOriginalName();
      $size = $image->getClientSize();
      $destinationPath = public_path('/images');
      $image->move($destinationPath, $name);
      
      $picture = new Picture;

      $picture->user_id=$user->id;
      $picture->name = $name;
      $picture->size = $size;


      $picture->save();

      return redirect('profile')->with('message', 'You have successfully upload image.');
    }
    return back()->with('error', 'Upload failed.something wrong..!!');
  }
}
