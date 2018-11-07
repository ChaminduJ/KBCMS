@extends('layouts.app')

@section('content')
<audio id="ChatAudio">
  <source src="{{ asset('sounds/chat.mp3') }}">
  </audio>

  <meta name="receiverId" content="{{$receiver->id}}">


  <div class="container">
    <div class="column is-8 is-offset-2">
      <div class="panel">
        <div class="panel-heading">
          {{$receiver->first_name}}
          <div class="contain is-pulled-right">
            <a href="{{url('/chat')}}" class="is-link">Go Back</a>
          </div>
          <chat v-bind:chats="chats" v-bind:userid="{{Auth::user()->id}}" v-bind:receiverid="{{$receiver->id}}"></chat>
        </div>
      </div>

    </div>
  </div>







  @endsection
