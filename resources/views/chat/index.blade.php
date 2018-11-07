@extends('layouts.app')

@section('content')


<div class="container">
  <div class="column is-8 is-offset-2">
    <div class="panel col-lg-6 col-md-6 col-sm-12">
      <div class="panel-heading">
        List of all Users
        <a href="/home" class="pull-right">Back</a>
      </div>
      @foreach($receiver as $key => $receiver)
      <a href="{{route('chat.show',$receiver->id)}}" class="panel-block" style="justify-content: space-between;">
        <div>{{$receiver->first_name}} {{$receiver->last_name}}</div>
        <onlineuser v-bind:receiver="{{ $receiver }}" v-bind:onlineusers="onlineUsers"></onlineuser>
      </a>
      @endforeach

    </div>

  </div>
</div>


@endsection
