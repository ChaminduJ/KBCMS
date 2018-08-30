@extends('layouts.app')

@section('title')
Home page
@endsection

@section('content')

<div class="text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="profile">My Profile</a></p>
        @foreach($data as $key => $data)
        @if($data->user_id==Auth::User()->id)
        <img src="/images/{{$data->name}}" class="img-circle" height="75" width="65" alt="Profile Image">
        @endif
        @endforeach
      </div>

      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <a href="{{ url('/chat') }}">Chat</a>
      <p><a href="uploadPost">Post</a></p>
      <p><a href="reset">Reset</a></p>
    </div>
    <div data-spy="scroll" data-target="#posts" data-offset="0" class="scrollspy-posts">
      <div class="col-sm-6" id="posts">

        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default text-left">

              @foreach($p as $key => $p)
              @if($p->post_picture != NULL)
              <div class="panel-body">

                <div class="row" id="post">
                  <div class="col-sm-3">
                    <table>
                      <img src="/postImages/{{$p->post_picture}}" class="img-rounded" width="180" alt="Post Image">
                    </table><br>

                  </div>
                  <div class="col-sm-9">
                    <li class="list-group-item list-group-item-info">{{$p->post_title}}</li>
                    <p class="list-group-item list-group-item-info">{{$p->post_text}}</p>


                  </div>
                </div>

                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>
              </div>
              @else
              <div class="panel-body">

                <div class="row">

                  <div class="col-sm-12">

                    <li class="list-group-item list-group-item-info">{{$p->post_title}}</li>
                    <p class="list-group-item list-group-item-info">{{$p->post_text}}</p>

                  </div>
                </div>

                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>
              </div>
              @endif
              @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-last well pull-right">
      <div class="thumbnail">

        @foreach($info as $key => $info)

        <div class="well">

          <li class="list-group-item list-group-item-info">{{$info->first_name}} {{$info->last_name}}</li>
          <li class="list-group-item list-group-item-info">{{$info->knowledge}}</li>

          <!--  <a href=" "><button class="btn btn-info"></button></a> -->

        </div>
        @endforeach


      </div>
    </div>
  </div>
</div>


@endsection
