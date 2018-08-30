@extends('layouts.app')

@section('title')
profile page
@endsection

@section('content')



<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#delete">Delete Account</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#update">Update</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div id="profile" class="container tab-pane active"><br>


    <div class="row">
      <div class="col">

        <div class="col-lg-5">
          <table>

            <u1>

              @if(session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
              </div>@endif

              @if ($errors->has('profile'))
              <span class="help-block">
                <strong>{{ $errors->first('profile') }}</strong>
              </span>
              @endif
              <div class="profile-header-container" id="profile">
                <a href="picture">Upload Picture</a>
                @foreach($data as $key => $data)
                @if($data->user_id==Auth::User()->id)
                <div class="profile-header-img">
                  <img class="img-thumbnail" alt="Profile Image" src="/images/{{$data->name}}" width="400" height="300"/>
                </div>
                @endif
                @endforeach
              </div>
              <li class="list-group-item list-group-item-info">{{Auth::User()->first_name}} {{Auth::User()->last_name}}</li>
              <li class="list-group-item list-group-item-info">{{Auth::User()->sex}}</li>
              <li class="list-group-item list-group-item-info">{{Auth::User()->knowledge}}</li>
              <li class="list-group-item list-group-item-info">{{Auth::User()->address}}</li>
              <li class="list-group-item list-group-item-info">{{Auth::User()->updated_at}}</li>
              <a href="/home">Back to home</a>
              <a href="chat"><button class="btn btn-info fa fa-envelope"></button></a>

            </u1>
          </table><br>


        </div>
      </div>
    </div>
  </div>
  <div id="delete" class="container tab-pane fade"><br>


    <div class="container">
      <div class="panel">
        <div class="panel-header">
          <h3>Delete Account</h3>

        </div>
        <div class="panel-body">

          @if(session()->has('message'))
          <div class="alert alert-success">
            {{session()->get('message')}}
          </div>@endif

          @if ($errors->has('form'))
          <span class="help-block">
            <strong>{{ $errors->first('form') }}</strong>
          </span>
          @endif
          <form class="form-horizontal" id="form" method="POST" action="{{ route('confirm') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
              <label for="new-password" class="col-md-4 control-label">Your Password</label>

              <div class="col-md-6">
                <input id="current-password" type="password" class="form-control" name="current-password" required>

                @if ($errors->has('current-password'))
                <span class="help-block">
                  <strong>{{ $errors->first('current-password') }}</strong>
                </span>
                @endif

                <p>Are you sure?</p>
                <button type="submit" class="btn btn-primary">confirm</button>
              </div>
            </div>
            <hr>

            {{csrf_field()}}
          </form>


        </div>
      </div>
    </div>
  </div>
  <div id="update" class="container tab-pane fade"><br>
    <h2>Update account</h2>

    <a href="/reset"><button class="btn btn-info fa fa-reset">Reset Password</button></a>   </div>
  </div>









  @endsection
