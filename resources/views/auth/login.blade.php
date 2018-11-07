@extends('layouts.app')

@section('title')
Login page
@endsection

@section('content')


<div class="columns is-marginless is-centered">
  <div class="column is-5">
    <div class="card center">
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      @if (session('warning'))
      <div class="alert alert-warning">
        {{ session('warning') }}
      </div>
      @endif
      <header class="card-header">
        <p class="card-header-title">Login</p>
      </header>

      <div class="card-content">
        <form class="login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="field is-horizontal">


            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" placeholder="E-Mail Address" id="email" type="email" name="email"
                  value="{{ old('email') }}" required autofocus>
                </p>

                @if ($errors->has('email'))
                <p class="help is-danger">
                  {{ $errors->first('email') }}
                </p>
                @endif
              </div>
            </div>
          </div>

          <div class="field is-horizontal">


            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" id="password" placeholder="Password" type="password" name="password" required>
                </p>

                @if ($errors->has('password'))
                <p class="help is-danger">
                  {{ $errors->first('password') }}
                </p>
                @endif
              </div>
            </div>
          </div>

          <div class="field is-horizontal"  style="margin-left:20px;">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <label class="checkbox">
                    <input type="checkbox"
                    name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
                </p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-primary">Login</button>
                </div>

                <div class="control pulled-right"  style="margin-left:90px;">
                  <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                  </a>
                </div>
              </div>
            </div>
          </div>
        </form>
        @if(session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
        </div>@endif
      </div>
    </div>
  </div>
</div>
@endsection
