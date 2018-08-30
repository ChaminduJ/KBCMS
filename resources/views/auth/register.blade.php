@extends('layouts.app')

@section('title')
Register page
@endsection

@section('content')


<div class="columns is-marginless is-centered">
  <div class="column is-5">
    <div class="card center">
      <header class="card-header">
        <p class="card-header-title">Register</p>
      </header>

      <div class="card-content">
        <form class="register-form" method="POST" action="{{ route('register') }}">

          {{ csrf_field() }}

          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" id="first_name" type="text" placeholder="First Name" name="first_name" value="{{ old('first_name') }}"
                  required autofocus>
                </p>

                @if ($errors->has('first_name'))
                <p class="help is-danger">
                  {{ $errors->first('first_name') }}
                </p>
                @endif
              </div>
            </div>
          </div>
          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" id="last_name" type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}"
                  required autofocus>
                </p>

                @if ($errors->has('last_name'))
                <p class="help is-danger">
                  {{ $errors->first('last_name') }}
                </p>
                @endif
              </div>
            </div>
          </div>
          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <select type="text" class="form-control selectpicker" title="Sex" id="sex" name="sex" value="{{ old('sex') }}" required autofocus>
                    <optgroup label="" data-max-options="1">
                      <option {{{ (isset($user->sex) && $user->sex == 'Male') ? "selected=\"selected\"" : "" }}}>Male</option>
                      <option {{{ (isset($user->sex) && $user->sex == 'Female') ? "selected=\"selected\"" : "" }}}>Female</option>
                    </optgroup>
                  </select>
                </p>
                @if ($errors->has('sex'))
                <p class="help is-danger">
                  {{ $errors->first('sex') }}
                </p>
                @endif
              </div>
            </div>
          </div>
          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" id="address" type="text" placeholder="Address" name="address" value="{{ old('address') }}"
                  required autofocus>
                </p>

                @if ($errors->has('address'))
                <p class="help is-danger">
                  {{ $errors->first('address') }}
                </p>
                @endif
              </div>
            </div>
          </div>

          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <select type="text" class="form-control selectpicker" title="Select 1 or more knowledges you have" id="knowledge" name="knowledge" value="{{ old('knowledge') }}" multiple data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" data-selected-text-format="count" required autofocus>


                    <!-- <option selected>Select 1 or more knowledges you have</option> -->
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Chemistry') ? "selected=\"selected\"" : "" }}}>Chemistry</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Computer Science') ? "selected=\"selected\"" : "" }}}>Computer Science</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Physics') ? "selected=\"selected\"" : "" }}}>Physics</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Mathematics') ? "selected=\"selected\"" : "" }}}>Mathematics</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Bialogy') ? "selected=\"selected\"" : "" }}}>Bialogy</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Economics') ? "selected=\"selected\"" : "" }}}>Economics</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Geology') ? "selected=\"selected\"" : "" }}}>Geology</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Socialogy') ? "selected=\"selected\"" : "" }}}>Socialogy</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Archilogy') ? "selected=\"selected\"" : "" }}}>Archilogy</option>
                    <option {{{ (isset($user->knowledge) && $user->knowledge == 'Statistics') ? "selected=\"selected\"" : "" }}}>Statistics</option>


                  </select>
                </p>

                @if ($errors->has('knowledge'))
                <p class="help is-danger">
                  {{ $errors->first('knowledge') }}
                </p>
                @endif
              </div>
            </div>
          </div>
          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input bfh-phone" id="phone_no" placeholder="Phone Number" type="text" name="phone_no" value="{{ old('phone_no') }}"
                  required autofocus>
                </p>

                @if ($errors->has('phone_no'))
                <p class="help is-danger">
                  {{ $errors->first('phone_no') }}
                </p>
                @endif
              </div>
            </div>
          </div>
          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" id="email" placeholder="E-Mail Address" type="email" name="email"
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

          <div class="field is-horizontal">

            <div class="field-body">
              <div class="field">
                <p class="control">
                  <input class="input" placeholder="Confirm-Password" id="password-confirm" type="password"
                  name="password_confirmation" required>
                </p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-primary">Register</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
