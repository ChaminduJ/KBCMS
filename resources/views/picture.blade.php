@extends('layouts.app')

@section('title')
picture page
@endsection


@section('content')

<div class="container text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
          <div class="panel-heading">Upload Picture</div>

          <div class="panel-body">
            <div class="row">
              <div class="col-lg-5 center_div">
                @if (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
                @endif
                @if(session()->has('message'))
                <div class="alert alert-success">
                  {{session()->get('message')}}
                </div>@endif


                @if(isset($table->profileImg))
                Profile Image:
                <img class="img-circle" alt="Profile Image" src="/images/{{$table->profileImg}}"/>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('uploadPicture') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <input type="file" class="form-control-file{{ (!empty($table->profileImg)) ? "disabled" : ''}}" name="profileImg" id="profileImg" aria-describedby="fileHelp" value="{{ old('profileImg') }}">
                    @if ($errors->has('profileImg'))
                    <span class="alert alert-danger">
                      <strong>{{ $errors->first('profileImg') }}</strong>
                    </span>
                    @endif
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                  </div>

                  <!--Grid column-->
                  <div class="col-md-1 col-md-5 d-flex align-items-start">
                    <div class="text-center">
                      <button type="submit" class="btn btn-info fa fa-upload pull-left">Picture</button>
                    </div>
                  </div>
                  <div class="text-center">
                    <a href="profile"><button type="button" class="btn btn-secondary pull-right">back</button></a>
                  </div>

                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
