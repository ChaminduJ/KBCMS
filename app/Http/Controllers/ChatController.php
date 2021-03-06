<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $receiver = User::where('id', '!=', auth()->id())->get();
;
      return view('chat.index',['receiver' => $receiver])->withUser($receiver);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $receiver=User::find($id);
      return view('chat.show')->withReceiver($receiver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }

    public function getChat($id){
      $chats=Chat::where(function ($query) use ($id) {
        $query->where('sent_user_id','=',Auth::user()->id)->where('receive_user_id','=', $id);
      })->orWhere(function ($query) use ($id) {
        $query->where('sent_user_id','=', $id)->where('receive_user_id','=', Auth::user()->id);
      })->get();

      return $chats;
    }

    public function sendChat(Request $request){
      Chat::create([
        'sent_user_id' => $request->sent_user_id,
        'receive_user_id' => $request->receive_user_id,
        'chat' => $request->chat
      ]);
      return [];
    }
}
