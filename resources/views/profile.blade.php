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

    <!-- Page Container -->
    <div id="profile" class="container tab-pane active" style="max-width:1400px;"><br>
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{session()->get('message')}}
      </div>@endif

      @if ($errors->has('profile'))
      <span class="help-block">
        <strong>{{ $errors->first('profile') }}</strong>
      </span>
      @endif
      <!-- The Grid -->
      <div class="w3-row-padding">

        <!-- Left Column -->
        <div class="w3-third">

          <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-display-container">

              <div class="profile-header-container" id="profile">
                <a href="picture">Upload Picture</a>
                @foreach($data as $key => $data)
                @if($data->user_id==Auth::User()->id)
                <div class="profile-header-img">
                  <img class="img-thumbnail" alt="Profile Image" src="/images/{{$data->name}}" width="100%"/ style="margin-bottom:20px;">
                </div>
                @endif
                @endforeach
              </div>
              <div class="w3-display-bottomleft w3-container w3-text-black">
                <h2>{{Auth::User()->first_name}} {{Auth::User()->last_name}}</h2>
              </div>
            </div>
            <div class="w3-container">
              <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{Auth::User()->knowledge}}</p>
              <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{Auth::User()->address}}</p>
              <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{Auth::User()->email}}</p>
              <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{Auth::User()->phone_no}}</p>
              <hr>

              <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
              <p>{{Auth::User()->knowledge}}</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
              </div>
              <p>Photography</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                  <div class="w3-center w3-text-white">80%</div>
                </div>
              </div>
              <p>Illustrator</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
              </div>
              <p>Media</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
              </div>
              <br>

              <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
              <p>English</p>
              <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
              </div>
              <p></p>
              <div class="w3-light-grey w3-round-xlarge">

            <div class="w3-round-xlarge" style="height:24px;width:55%"></div>
                <a href="chat"><button class="btn btn-info fa fa-envelope"></button></a>
              </div>
              <p></p>
              <div class="w3-light-grey w3-round-xlarge">

            <div class="w3-round-xlarge" style="height:24px;width:25%"></div>
                <a href="/home">Back to home</a>
              </div>
              <br>
            </div>
          </div><br>

        <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

          <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
              <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
              <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
            </div>
          </div>

          <div class="w3-container w3-card w3-white">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
              <p>Web Development! All I need to know in one place</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>London Business School</b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
              <p>Master Degree</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>School of Coding</b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
              <p>Bachelor Degree</p><br>
            </div>
          </div>

        <!-- End Right Column -->
        </div>

      <!-- End Grid -->
      </div>

      <!-- End Page Container -->
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
