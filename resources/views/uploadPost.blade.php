@extends('layouts.app')

@section('title')
upload post
@endsection


@section('content')

<div class="container text-center">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-success">
        <div class="panel-heading">Upload Post</div>

        <div class="panel-body">
            <div class="col-lg-5 center_div">

              @if(session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
              </div>@endif


              @if(isset($table->post_picture))
              Post Image:
              <img class="img-circle" alt="post Image" src="/postImages/{{$table->post_picture}}"/>
              @endif

              <form class="form-horizontal" method="POST" action="{{ route('uploadPost') }}" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="field is-horizontal">

                  <div class="field-body">
                    <div class="field">
                      <p class="control">
                        <input class="input" id="post_title" type="text" placeholder="Post Title" name="post_title" value="{{ old('post_title') }}"
                        required autofocus>
                      </p>

                      @if ($errors->has('post_title'))
                      <p class="help is-danger">
                        {{ $errors->first('post_title') }}
                      </p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="field is-horizontal">

                  <div class="field-body">
                    <div class="field">
                      <p class="control">
                        <input class="input" id="post_text" type="text" placeholder="Post Text" name="post_text" value="{{ old('post_text') }}"
                        required autofocus>
                      </p>

                      @if ($errors->has('post_text'))
                      <p class="help is-danger">
                        {{ $errors->first('post_text') }}
                      </p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group">

                  <input type="file" class="form-control-file{{ (!empty($table->post_picture)) ? "disabled" : ''}}" name="post_picture" id="post_picture" aria-describedby="fileHelp" value="{{ old('post_picture') }}">
                  @if ($errors->has('post_picture'))
                  <span class="alert alert-danger">
                    <strong>{{ $errors->first('post_picture') }}</strong>
                  </span>
                  @endif
                  <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>


                <!--Grid column-->
                <div class="col-md-1 col-md-5 d-flex align-items-start">
                  <div class="text-center">
                    <button type="submit" class="btn btn-info fa fa-upload pull-left">Post</button>
                  </div>
                </div>
                <div class="text-center">
                  <a href="/home"><button type="button" class="btn btn-secondary pull-right">back</button></a>
                </div>

              </form>
            </div>

        </div>

      </div>
    </div>
  </div>


@endsection
