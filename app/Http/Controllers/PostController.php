<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function uploadPost(Request $request)
  {
    $user = User::find(Auth::User()->id);
    $this->validate($request,[
      'post_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'post_title'=>'required|max:20',
      'post_text'=>'required'

    ]);


    $table=new Post();

    $image = $request->file('post_picture');

    if($image != NULL){
      $post_picture = $image->getClientOriginalName();
      $destinationPath = public_path('/postImages');
      $image->move($destinationPath, $post_picture);
      $table->post_picture = $post_picture;
    }else{
      $table->post_picture=NULL;
    }

    $table->user_id=$user->id;
    $table->post_title = $request->input('post_title');
    $table->post_text = $request->input('post_text');

    $data = $request->session()->all();
    $table->save();
    return redirect('/home');

  }
}
